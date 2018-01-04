<?php namespace App\Http\Controllers;

use Input;
use GuzzleHttp\Client;
// use  IvoPetkov\HTML5DOMDocument;
// use  IvoPetkov\HTML5DOMDocument\Internal\QuerySelectors;
// use  IvoPetkov\HTML5DOMElement;
// use  IvoPetkov\HTML5DOMNodeList;

class UploadController extends Controller {

	public function upload(){
		echo 'Upload function called successfully!';

		if(Input::hasFile('image-file')){

			echo 'Downloading file in server...\n';
			$file = Input::file('image-file');
			$file->move('uploads', $file->getClientOriginalName());
			echo 'File downloaded and successfully saved \n';

			$jar = new \GuzzleHttp\Cookie\CookieJar;
			$domain = 'photofunia.com';
			$values = ['PHPSESSID' => 'gc938mjl73umea70kbl5chk2n5'];
			$cookieJar = $jar->fromArray($values,$domain);

			$client = new Client([
			    // Base URI is used with relative requests
			    'base_uri' => 'https://photofunia.com/',
			    // You can set any number of default request options.
			    'timeout'  => 10.0,
			    'cookies' => $cookieJar
			]);
			echo 'Guzzle and cookies initialized. Sending image to photo funia...\n';







			// print_r($response);
			// $dom = new IvoPetkov\HTML5DOMDocument();
			// $dom->loadHTML($response->getBody());
			// echo $dom->querySelector('a.button')->getAttribute('href');

			$response = $client->request('POST', 'https://photofunia.com/images?server=1', [
			    'multipart' => [
			        [
			            'name'     => 'image',
			            'contents' => fopen('./uploads/'.$file->getClientOriginalName(),'r')
			        ],
			    ]
			]);

			$responseJSON = json_decode($response->getBody(), true);

			echo 'Successfully sent to photfunia...\n';

			$imageKey = $responseJSON["response"]["key"];

			$response = $client->request('POST', 'https://photofunia.com/categories/all_effects/pencil_drawing?server=1', [
			    'multipart' => [
			        [
			            'name'     => 'current-category',
			            'contents' => 'all_effects'
			        ],
			        [
			            'name'     => 'image',
			            'contents' => $imageKey
			        ],
			        [
			            'name'     => 'color',
			            'contents' => 'gray'
			        ],
			        [
			            'name'     => 'paper',
			            'contents' => 'white'
			        ],
			        [
			            'name'     => 'fade_edges',
			            'contents' => 'on'
			        ],
			    ]
			]);

			// print_r($response);
			$dom = new HTML5DOMDocument();
			$dom->loadHTML($response->getBody());
			echo $dom->querySelector('a.button')->getAttribute('href');
		}

	}
}
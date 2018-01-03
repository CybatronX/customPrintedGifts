<?php namespace App\Http\Controllers;

use Input;
use GuzzleHttp\Client;
use PHPHtmlParser\Dom;

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



			// $response = $client->request('POST', 'https://photofunia.com/categories/all_effects/pencil_drawing?server=1', [
			//     'multipart' => [
			//         [
			//             'name'     => 'current-category',
			//             'contents' => 'all_effects'
			//         ],
			//         [
			//             'name'     => 'image',
			//             'contents' => 'FpOP8l20CYBd_SLz5kG4PQ'
			//         ],
			//         [
			//             'name'     => 'image:crop',
			//             'contents' => '0.0.1280.770'
			//         ],
			//         [
			//             'name'     => 'color',
			//             'contents' => 'gray'
			//         ],
			//         [
			//             'name'     => 'paper',
			//             'contents' => 'white'
			//         ],
			//         [
			//             'name'     => 'fade_edges',
			//             'contents' => 'on'
			//         ],
			//     ]
			// ]);




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


			// echo($response->getBody());
			echo("##############");
			echo(" ImageKey:".var_dump($responseJSON["response"]));
		}

	}
}
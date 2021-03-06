<?php namespace App\Http\Controllers;

use Input;
use GuzzleHttp\Client;
use IvoPetkov\HTML5DOMDocument;
use IvoPetkov\HTML5DOMDocument\Internal\QuerySelectors;
use IvoPetkov\HTML5DOMElement;
use IvoPetkov\HTML5DOMNodeList;
use Illuminate\Support\Facades\Redirect;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;


class UploadController extends Controller {

	public function upload(){
		echo 'Upload function called successfully!';

		if(Input::hasFile('image-file')){

			echo 'Downloading file in server...\n';
			$file = Input::file('image-file');
			$file->move('uploads/originalFiles/', $file->getClientOriginalName());
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

			$response = $client->request('POST', 'https://photofunia.com/images?server=1', [
			    'multipart' => [
			        [
			            'name'     => 'image',
			            'contents' => fopen('./uploads/originalFiles/'.$file->getClientOriginalName(),'r')
			            // 'contents' => $file
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
			$downloadURL = $dom->querySelector('a.button')->getAttribute('href');
			$sketchURL = explode('?', $downloadURL)[0];
			echo $sketchURL;
			
			$randomString = trim(Uuid::uuid1()->toString());
			$sketchFileName = $randomString.'.jpg';
			$sketchedFileNameBackgroundRemoved = $randomString.'.png';

			copy($sketchURL, 'uploads/sketchedFiles/'.$sketchFileName);

			//use ImageMagick to remove background
			$removeBackgroundCommand = 'convert "./uploads/sketchedFiles/'.$sketchFileName.'" -fill none -draw "color 1,1 floodfill" "./uploads/sketchedFilesBackgroundRemoved/'.$sketchedFileNameBackgroundRemoved.'"';
			$output = '';
			$commandOutput = shell_exec($removeBackgroundCommand);
			$output .= htmlentities(trim($commandOutput)) . "\n";

			$queryString 	= array('sketchURL' => url('/').'/uploads/sketchedFilesBackgroundRemoved/'.$sketchedFileNameBackgroundRemoved);

			return redirect()->route('showMenTshirt', $queryString);
			// return redirect()->route('showMenTshirt');
		}

	}

	public function showProducts(){
			// echo 'hey there!';
			$sketchURL = request()->query('sketchURL');
			return view('showMenTshirt', ['sketchURL' => $sketchURL]);
	}
}
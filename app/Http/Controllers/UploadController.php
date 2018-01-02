<?php namespace App\Http\Controllers;

use Input;

class UploadController extends Controller {

	public function upload(){
		echo 'Upload function called successfully!';

		if(Input::hasFile('image-file')){

			echo 'Uploaded';
			$file = Input::file('image-file');
			$file->move('uploads', $file->getClientOriginalName());
			echo '';
		}

	}
}
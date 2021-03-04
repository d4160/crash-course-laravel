<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class UploadImageController extends Controller
{
    public function index(){
        return view('website.uploadImage', ['imageId' => 'jxablob8ogbbm2mvgywi']);
    }

    public function upload(Request $request){
        $input = $request->all();
        // dd($input);

        $this->validate($request, [
            'fleImage' => 'required|mimes:jpg,bmp,png|between:1,10000'
        ]);

        $image = $request->file('fleImage');

        $result = Cloudinary::upload($image->getRealPath(), [
            'folder' => 'example/misc'
        ]);

        dd($result);
    }
}

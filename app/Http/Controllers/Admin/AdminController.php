<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    //
    public function index(Request $request){

        return view('admins.index');
    }
    
    public function info(){
        return view('admins.profile.info');
    }

    public function changePassword(){
        return view('admins.profile.change_password');
    }

    public function uploadImage(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'file' => 'image',
            ],
            [
                'file.image' => 'The file must be an image (jpeg, png, bmp, gif, or svg)'
            ]);
        if ($validator->fails())
            return array(
                'fail' => true,
                'errors' => $validator->errors()
            );
        $extension = $request->file('file')->getClientOriginalExtension();
        $dir = 'uploads/';
        $filename = uniqid() . '_' . time() . '.' . $extension;
        $request->file('file')->move($dir, $filename);

        return $filename;

    }


    public function deleteImage(Request $request)
    {
        $filename = $request->input('filename');
        File::delete('uploads/' . $filename);

    }
}

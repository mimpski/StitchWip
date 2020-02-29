<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Illuminate\Support\Str;


class ImageController extends Controller
{
    public function superadminIndex()
    {
        $this->middleware('superadmin');
        $body_class = 'superadmin';
        return view('super_admin.image_uploader', compact('body_class'));
    }
 
    public function superadminSave(Request $request)
    {
        $this->middleware('superadmin');
        $body_class = 'superadmin';
       request()->validate([
            'fileUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       if ($files = $request->file('fileUpload')) {
           $destinationPath = 'images/news/'; // upload path
           $profileImage = Str::slug($request->image_title) . "-" . date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
        }
        return Redirect::to("superadmin/image/uploader")
        ->withSuccess('Great! Image has been successfully uploaded.');
 
    }

    public function superadminShow()
    {
        $this->middleware('superadmin');
        $body_class = 'superadmin';
        $path = public_path('/images/news/');
        $files = File::allfiles($path);
        return view('super_admin.image_viewer', compact('files'));
    }
}

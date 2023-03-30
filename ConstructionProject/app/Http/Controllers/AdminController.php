<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Image_Gallery;
use App\Models\ContactUs;

class AdminController extends Controller
{
    public function user(){
        $data = user::all();
        return view("admin.users", compact("data"));
    }
    public function deleteuser($id){
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function imagesGalleries(){
        $data = image_Gallery::all();
        return view("admin.imagesGalleries", compact("data"));
    }

    public function uploadimage(Request $request){
        $data = new Image_Gallery;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('imageGallery', $imagename);
        //  folder name imageGallery

        $data->image=$imagename;
        $data->title=$request->title;
        $data->imageType=$request->imageType;
        $data->save();
        return redirect()->back();
    }
    public function deleteimage($id){
        $data = image_Gallery::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function contactUs(Request $request){
        $data = new ContactUs();

        

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->subject=$request->subject;
        $data->message=$request->message;

        $data->save();
        return redirect()->back();
    }

    public function viewcontactUs(){
        $data = ContactUs::all();
        return view("admin.admincontact", compact("data"));
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Image_Gallery;

class HomeController extends Controller
{
    public function index(){
        $data = Image_Gallery::all();
        return view("home", compact("data"));
    }

    public function redirects(){
        $data = Image_Gallery::all();
        $usertype = Auth::user()-> usertype;
        if($usertype == '1'){
            return view('admin.adminhome');
        }
        else{
            return view("home", compact("data"));
        }
    }
}

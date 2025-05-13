<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){

        $data=[
            "pageTitle" => "Home | ".config('website.siteName'),
            "pageName" => "Home"
        ];

        return view('home', $data);
    }

    public function about(){

        $data=[
            "pageTitle" => "About | ".config('website.siteName'),
            "pageName" => "About"
        ];

        return view('about', $data);
    }
}

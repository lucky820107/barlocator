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

    public function map(){

        $data=[
            "pageTitle" => "map | ".config('website.siteName'),
            "pageName" => "map"
        ];

        return view('map', $data);
    }
}

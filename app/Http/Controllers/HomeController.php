<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
        return view('dashboard.about',[
            "title" => "about"
        ]);
    }

    public function resume()
    {
        return view('dashboard.resume',[
            "title" => "Resume"
        ]);
    }


    public function portofolio()
    {
        return view('dashboard.portofolio', [
            "title" => "Portofolio"
        ]);
    }


    public function blog()
    {
        return view('dashboard.blog',[
            "title" => "blog"
        ]);
    }
}


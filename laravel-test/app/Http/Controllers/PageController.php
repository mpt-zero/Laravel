<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view("content")->withText("this is home footer text")
        ->withTitle("example title")
        ->withTheme("dark")
        ->withShow(true)
        ->withMain("Example of homepage")
        ;
    }
    public function contact(){
        return view("content")->withText("this is contact footer text")
        ->withTitle("example title")
        ->withTheme("dark")
        ->withShow(false)
        ->withMain("Example of contactpage")
        ;
    }
    public function about_us(){
        return view("content")->withText("this is about-us footer text")
        // ->withTitle("example title")
        ->withTheme("light")
        ->withShow(true)
        ->withMain("Example of about-uspage")
        ;
    }
}

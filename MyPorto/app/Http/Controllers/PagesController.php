<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Home page
    function home(){
        return view('pages/home');
    }

    function about(){
        return view('pages/about');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontpage.mainpage');
    }
    public function faq(){
        return view('frontpage.faq');
    }
}

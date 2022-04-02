<?php

namespace App\Http\Controllers;

use App\Models\Recomplex;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $recomplexes=Recomplex::all();
        return view('frontpage.page', compact('recomplexes'));
    }
}

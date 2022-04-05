<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recomplex;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $users_flats_total=DB::table('users_flats')->count();
        $users_total=User::count();
        $recomplexes_total=Recomplex::count();

        return view('backpage.index', compact('users_flats_total', 'users_total', 'recomplexes_total'));
    }
}

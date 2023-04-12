<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use App\Models\Recomplex;
use App\Models\UserFlat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PageController extends Controller
{
    public function index(){
        $recomplexes=Recomplex::all();
        return view('frontpage.page', compact('recomplexes'));
    }

    public function page_see($recomplex_id)
    {
        $recomplex = Recomplex::find($recomplex_id);
        $flats = Flat::where('recomplex_id', $recomplex_id)->get();
        $userFlats = UserFlat::with('status')->where('user_id', Auth::id())->get();

        return view('frontpage.page_see', compact('recomplex', 'flats', 'userFlats'));
    }

    public function add_flat($flat_id)
    {
         UserFlat::updateOrCreate([
            'user_id' => Auth::id(),
            'flat_id' => $flat_id,
        ], [
            'status_id' => null,
            'gdate' => now()->toDateTimeString()
        ]);

        return Redirect::back()->with('info', 'Өтінім жіберілді!');
    }

    public function get_application($user_id)
    {
        $user_flats = DB::table('users_flats as uf')
            ->where('uf.user_id', $user_id)
            ->leftJoin('flats as f', 'f.id', 'uf.flat_id')
            ->leftJoin('rooms as r', 'r.id', 'f.room_id')
            ->leftJoin('statuses as st','st.id', 'uf.status_id')
            ->leftJoin('recomplexes as re','re.id', 'f.recomplex_id')
            ->select('re.name as rename', 'f.totalarea', 'r.name as rname', 'st.name as stname', 're.price')
            ->get();
        return view('frontpage.application', compact('user_flats'));
    }
}

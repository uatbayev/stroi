<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use App\Models\Recomplex;
use App\Models\Room;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flats=Flat::all();
        return view('flat.index', compact('flats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms=Room::all();
        $recomplexes=Recomplex::all();
        return view('flat.create', compact('rooms','recomplexes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Flat::create($request->all());
        return redirect()->route('flat.index')->with('info', 'Сәтті қосылды!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function show(Flat $flat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function edit(Flat $flat)
    {
        $rooms=Room::all();
        $recomplexes=Recomplex::all();
        return view('flat.edit', compact('rooms','recomplexes', 'flat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flat $flat)
    {
        $flat->update($request->all());
        return redirect()->route('flat.index')->with('info', 'Сәтті өңделді!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flat $flat)
    {
        $flat->delete();
        return redirect()->route('flat.index')->with('info', 'Сәтті жойылды!!!');
    }

    public function flat_list(){
        $statuses=Status::all();
        $user_flats=DB::table('users_flats as uf')
            ->leftJoin('users as us','us.id', 'uf.user_id')
            ->leftJoin('flats as f','f.id', 'uf.flat_id')
            ->leftJoin('rooms as r','r.id', 'f.room_id')
            ->leftJoin('statuses as st','st.id', 'uf.status_id')
            ->leftJoin('recomplexes as re','re.id', 'f.recomplex_id')
            ->select('re.name as rename', 'f.totalarea', 'r.name as rname', 'st.name as stname', 're.price', 'us.lastname','us.firstname', 'us.patronymic', 'us.tel', 'uf.id', 'uf.status_id')
            ->get();

        dd($user_flats);
        return view('flat.applications', compact('user_flats', 'statuses'));

    }
    public function flat_report(){
        $statuses=Status::all();
        $user_flats=DB::table('users_flats as uf')
            ->leftJoin('users as us','us.id', 'uf.user_id')
            ->leftJoin('flats as f','f.id', 'uf.flat_id')
            ->leftJoin('rooms as r','r.id', 'f.room_id')
            ->leftJoin('statuses as st','st.id', 'uf.status_id')
            ->leftJoin('recomplexes as re','re.id', 'f.recomplex_id')
            ->leftJoin('districts as dis','dis.id', 're.district_id')
            ->select('dis.name as disname','re.name as rename','r.name as rname',DB::raw("count('uf.*') as raw_count"))
            ->groupBy(['dis.name','re.name','r.name'])
            ->orderBy('dis.name')
            ->orderBy('re.name')
            ->orderBy('r.name')
            ->get();
//        dd($user_flats);
        //$recomplexes=Recomplex::all();
        $recomplexes_flat=DB::table('flats as f')->leftJoin('recomplexes as re','re.id', 'f.recomplex_id')
            ->select('re.price as price','re.name as name','f.room_id','f.totalarea as totalarea')
            ->get();
        return view('flat.report', compact('user_flats', 'statuses', 'recomplexes_flat'));

    }
    public function flat_save(Request $request){
        $user_flat_id=$request->user_flat_id;
        $status_id=$request->status_id;
        DB::update('update users_flats set status_id=? where id=?', [$status_id, $user_flat_id]);
        return redirect()->route('flat_list')->with('info', 'Сәтті өңделді!');
    }
}

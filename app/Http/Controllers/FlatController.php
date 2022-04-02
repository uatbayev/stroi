<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use App\Models\Recomplex;
use App\Models\Room;
use Illuminate\Http\Request;

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
}

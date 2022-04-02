<?php

namespace App\Http\Controllers;

use App\Models\Hometype;
use Illuminate\Http\Request;

class HometypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hometypes=Hometype::all();
        return view('hometype.index', compact('hometypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hometype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Hometype::create($request->all());
        return redirect()->route('hometype.index')->with('info', 'Сәтті қосылды!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hometype  $hometype
     * @return \Illuminate\Http\Response
     */
    public function show(Hometype $hometype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hometype  $hometype
     * @return \Illuminate\Http\Response
     */
    public function edit(Hometype $hometype)
    {
        return view('hometype.edit', compact('hometype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hometype  $hometype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hometype $hometype)
    {
        $hometype->update($request->all());
        return redirect()->route('hometype.index')->with('info', 'Сәтті өңделді!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hometype  $hometype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hometype $hometype)
    {
        $hometype->delete();
        return redirect()->route('hometype.index')->with('info', 'Сәтті жойылды!!!');
    }
}

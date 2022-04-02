<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Floor;
use App\Models\Hometype;
use App\Models\Recomplex;
use Illuminate\Http\Request;

class RecomplexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recomplexes=Recomplex::all();
        return view('recomplex.index', compact('recomplexes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hometypes=Hometype::all();
        $floors=Floor::all();
        $districts=District::all();
        return view('recomplex.create', compact('hometypes','floors','districts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename_photo="";
        if($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension=$file->getClientOriginalExtension();
            $filename_photo = time().''.uniqid().'.'.$extension;
            $file->storeAs('recomplex',$filename_photo);
        }
        $data=$request->all();
        $data['photo']=$filename_photo;
        Recomplex::create($data);
        return redirect()->route('recomplex.index')->with('info', 'Сәтті қосылды!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recomplex  $recomplex
     * @return \Illuminate\Http\Response
     */
    public function show(Recomplex $recomplex)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recomplex  $recomplex
     * @return \Illuminate\Http\Response
     */
    public function edit(Recomplex $recomplex)
    {
        $hometypes=Hometype::all();
        $floors=Floor::all();
        $districts=District::all();
        return view('recomplex.edit', compact('hometypes','floors','districts','recomplex'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recomplex  $recomplex
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recomplex $recomplex)
    {
        $filename_photo=$recomplex->photo;
        if($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension=$file->getClientOriginalExtension();
            $filename_photo = time().''.uniqid().'.'.$extension;
            $file->storeAs('recomplex',$filename_photo);
        }
        $data=$request->all();
        $data['photo']=$filename_photo;
        $recomplex->update($data);
        return redirect()->route('recomplex.index')->with('info', 'Сәтті өңделді!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recomplex  $recomplex
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recomplex $recomplex)
    {
        $recomplex->delete();
        return redirect()->route('recomplex.index')->with('info', 'Сәтті жойылды!!!');
    }
}

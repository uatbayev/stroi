<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genders=Gender::all();
        return view('user.create', compact('genders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'patronymic' => $request->patronymic,
            'tel' => $request->tel,
            'birthdate' => $request->birthdate,
            'iin' => $request->iin,
            'address' => $request->address,
            'gender_id' => $request->gender_id
        ]);

        return redirect()->route('user.index')->with('info', 'Пайдаланушы сәтті қосылды!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $genders=Gender::all();
        return view('user.edit', compact('genders','user' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $user->update($request->all());

        return redirect()->route('user.index')->with('info', 'Сәтті өңделді!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('info', 'Сәтті жойылды!!!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getSignup(){
        $genders=Gender::all();
        return view('auth.register', compact('genders'));
    }
    public function postSignup(Request $request){
        $this->validate($request, [
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed',
            'lastname'=>'required',
            'firstname'=>'required',
            'tel'=>'required',
            'birthdate'=>'required|date',
            'iin'=>'required',
            'address'=>'required',
            'gender_id'=>'required|not_in:0',
        ]);
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

        return redirect()->route('auth.login')->with('info', 'Сіз сәтті тіркелдіңіз!');
    }

    public function getSignin(){
        return view('auth.login');
    }
    public function postSignin(Request $request){
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required',
        ]);
        if(!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))){
            return redirect()->back()->with('info-danger', 'Сіз қате пайдаланушы атын немесе құпия сөзді енгіздіңіз!');
        }
        return redirect()->route('home')->with('info', 'Сіз жүйеге кірдіңіз!');
    }

    public function getSignout(){
        Auth::logout();
        return redirect()->route('home')->with('info', 'Сіз жүйеден шықтыңыз!');
    }
}

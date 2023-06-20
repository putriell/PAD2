<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('Page/register');
    }

    public function registerPost(Request $request){
        $user = new User();

        $user -> name = $request -> name;
        $user -> email = $request -> email;
        $user -> phone = $request -> phoneNumber;
        $user -> address = $request -> address;
        $user -> level = 0;
        $user -> password = Hash::make($request -> password);

        $user -> save();

        return back() -> with('success', 'Register successfully');
    }

    public function login(){
        return view('Page/login');
    }

    public function loginPost(Request $request){
        $credentials = [
            'email' => $request -> email,
            'password' => $request -> password
        ];

        // $mail = $request -> email;
        // $dataUser = User::where('email', $mail);
        // // $level = $dataUser['id'];
        // dd($dataUser);

        // if ($level == 1) {
        //     if (Auth::attempt($credentials)) {
        //         return redirect('/admin') -> with('success', 'Login berhasil');
        //     }
        // }
        if (Auth::attempt($credentials)) {
            if (Auth::user() -> id == '1') {
                return redirect('/admin') -> with('success', 'Login berhasil');
            }

            return redirect('/profile') -> with('success', 'Login berhasil');
        }
        return back() -> with('error', 'email atau password salah!');
    }

    public function logout(){

        Auth::logout();

        return redirect() -> route('login');
    }
}

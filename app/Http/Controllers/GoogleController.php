<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle() {
        return Socialite::driver('google') -> redirect();
    }

    public function handleGoogleCallback() {
        
        $user = Socialite::driver('google') -> stateless() -> User();
        $finduser = User::where('google_id', $user -> id) -> first();
        // dd($user);
        if ($finduser) {

            Auth::login($finduser);
            return redirect() -> intended('/profile');

        } else {
            $newUser = User::Create([
                'email' => $user -> email, 
                'name' => $user -> name,
                'level' => 0,
                'address' => ' ',
                'phone' => '',
                'google_id' => $user -> id,
                'password' => Hash::make('password')
            ]);

            Auth::login($newUser);
            return redirect() -> intended('/profile');
        }

        
    }
}

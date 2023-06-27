<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $ID = Auth::user() -> id;
        $data_produk = produk::where('userID', $ID) -> get();
        $jumlah_produk = count($data_produk);
        
        return view('Page/profile', compact('data_produk', 'jumlah_produk'));
    }

    public function detailProfile()
    {
        $ID = Auth::user() -> id;
        $data_produk = produk::where('userID', $ID) -> get();
        $jumlah_produk = count($data_produk);
        
        return view('Page/detailProfile', compact('data_produk', 'jumlah_produk'));
    }

    public function adm() {
        return view('cms/admin');
    }

    public function editProfile(Request $request, string $id) {
        $profile = User::find($id);

        if ($request -> hasFile('foto')) {
            $profile -> name = $request -> name_profile;
            $profile -> phone = $request -> phone;
            $profile -> address = $request -> address;

            $request -> file('foto') -> move('build\assets\foto_produk', $request -> file('foto') -> getClientOriginalName());
            $profile -> foto = $request -> file('foto') -> getClientOriginalName();

            $profile -> save();

        } else {
            $profile -> name = $request -> name_profile;
            $profile -> phone = $request -> phone;
            $profile -> address = $request -> address;

            $profile -> save();
        }

        return redirect('/profile') -> with('editProfile', 'Profile berhasil diubah');

    }

    public function changePassword (Request $request) {

        $new_password = $request -> old_password;
        $old_password = Auth::user() -> password;
        $changePW = user::where('password', $old_password) -> first();

        if (Hash::check($new_password, $old_password)) {

            if ($request -> new_password == $request -> confirm_password) {
                // dd($changePW);
                $changePW -> password = $request -> new_password;
                $changePW -> save();

                return redirect('/profile') -> with('successChangePassword', 'Prassword berhasil diubah');

            } else {

                return redirect('/profile') -> with('pwBerbeda', 'Prassword baru yang dimasukan tidak cocok');

            }
            
        } else {
            
            return redirect('/profile') -> with('passwordLamaSalah', 'Password lama anda salah');

        }
    }

}

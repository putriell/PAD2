<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}

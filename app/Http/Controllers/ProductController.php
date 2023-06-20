<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\produk;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        $data_produk = produk::all();
        $data_user = User::all();
        return view('Page/product', compact('data_produk', 'data_user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new produk;
        if ($request -> hasFile('foto')) {
            $product -> nama_produk = $request -> namaProduk;
            $product -> harga = $request -> harga;
            $product -> umur_simpan = $request -> umurSimpan;
            $product -> kategori_produk = $request -> kategori;
            $product -> userID = Auth::user() -> id;
            $request -> file('foto') -> move('build\assets\foto_produk', $request -> file('foto') -> getClientOriginalName());
            $product -> foto = $request -> file('foto') -> getClientOriginalName();
            
            $product -> save();
        }
        
        return redirect('/profile') -> with('success_add', 'Berhasil menambahkan produk');;
    }

    /**
     * Display the specified resource.
     */
    public function search(Request $request, string $keyword)
    {
        $batas = 20;
        $keyword = $request -> key_word;
        $data_produk = produk::where('nama_produk', 'like', '%'.$keyword.'%') 
                    -> orwhere('nama_produk', 'harga', 'kategori', '%'.$keyword.'%') 
                    -> paginate($batas);
        
        return view('product.search', compact('data_buku', 'keyword'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data_produk = produk::find($id);

        if ($request -> hasFile('foto')) {
            $data_produk -> nama_produk = $request -> namaProduk;
            $data_produk -> harga = $request -> harga;
            $data_produk -> umur_simpan = $request -> umurSimpan;
            $data_produk -> kategori_produk = $request -> kategori;
            $request -> file('foto') -> move('build\assets\foto_produk', $request -> file('foto') -> getClientOriginalName());
            $data_produk -> foto = $request -> file('foto') -> getClientOriginalName();

            $data_produk -> save();
        }
        return redirect('/profile') -> with('edit', 'Produk berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data_produk = produk::find($id);
        $data_produk -> delete();

        return redirect('/profile') -> with('delete', "Produk berhasil dihapus");
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\produk;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataProduct = produk::all();
        $data = ProductResource::collection($dataProduct);
        return $this -> sendResponse($data, 'Successfull get data');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        // $product = new ProductResource(produk::create($request -> validated()));
        $product = new produk;
        $product -> nama_produk = $request -> namaProduk;
        $product -> harga = $request -> harga;
        $product -> umur_simpan = $request -> umurSimpan;
        $product -> kategori_produk = $request -> kategori;

        $product -> save();

        return $this -> sendResponse($product, 'Successfully added data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cek = produk::find($id);
        if (!$cek) {
            abort(404, 'Object not found');
        }

        $data = new ProductResource($cek);

        return $this -> sendResponse($data, 'Successfull get data');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

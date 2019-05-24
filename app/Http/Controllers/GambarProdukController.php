<?php

namespace App\Http\Controllers;

use App\GambarProduk;
use App\Produk;
use Illuminate\Http\Request;

class GambarProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        $product = Produk::find($produk)->first();
        $images = GambarProduk::where('product_id',$product->id)->get();
        
        return view('Backend.Produk.produkimage',compact('product','images','produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GambarProduk  $gambarProduk
     * @return \Illuminate\Http\Response
     */
    public function show(GambarProduk $gambarProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GambarProduk  $gambarProduk
     * @return \Illuminate\Http\Response
     */
    public function edit(GambarProduk $gambarProduk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GambarProduk  $gambarProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GambarProduk $gambarProduk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GambarProduk  $gambarProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(GambarProduk $gambarProduk)
    {
        //
    }
}

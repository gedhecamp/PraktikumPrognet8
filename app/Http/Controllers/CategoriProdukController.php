<?php

namespace App\Http\Controllers;

use App\CategoriProduk;
use Illuminate\Http\Request;

class CategoriProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $pesan = 0;
            $kategori = CategoriProduk::all();
            return view('Backend.Kategori.kategori',compact('kategori','pesan'));
        }
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
        CategoriProduk::create($request->all());
        return redirect('kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoriProduk  $categoriProduk
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriProduk $categoriProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoriProduk  $categoriProduk
     * @return \Illuminate\Http\Response
     */
    public function edit($categoriProduk)
    {
        //return $categoriProduk;
        $kategori = CategoriProduk::find($categoriProduk)->first();
        return $kategori;
        return view('Backend.Kategori.kategoriedit',compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoriProduk  $categoriProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categoriProduk)
    {
        CategoriProduk::find($categoriProduk)->update($request->all());
        return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoriProduk  $categoriProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($categoriProduk)
    {
        CategoriProduk::find($categoriProduk)->delete();
        return redirect('/kategori');
    }
}

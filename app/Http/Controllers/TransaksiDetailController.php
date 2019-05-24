<?php

namespace App\Http\Controllers;

use App\TransaksiDetail;
use Illuminate\Http\Request;
use App\Transaksi;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\Produk;
use DB;
use App\GambarProduk;
use App\Kategori;
use App\CategoriProdukDetail;
use App\Diskon;
use App\Kurir;

class TransaksiDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\TransaksiDetail  $transaksiDetail
     * @return \Illuminate\Http\Response
     */
    public function show(TransaksiDetail $transaksiDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TransaksiDetail  $transaksiDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(TransaksiDetail $transaksiDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TransaksiDetail  $transaksiDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransaksiDetail $transaksiDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TransaksiDetail  $transaksiDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransaksiDetail $transaksiDetail)
    {
        //
    }
}

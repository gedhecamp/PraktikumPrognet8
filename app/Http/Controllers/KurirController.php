<?php

namespace App\Http\Controllers;

use App\Kurir;
use Illuminate\Http\Request;

class KurirController extends Controller
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
        $pesan = 0;
        $kurir = Kurir::all();
        return view('Backend.Kurir.kurir',compact('kurir','pesan'));
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
        Kurir::create($request->all());
        return redirect('kurir');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kurir  $kurir
     * @return \Illuminate\Http\Response
     */
    public function show(Kurir $kurir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kurir  $kurir
     * @return \Illuminate\Http\Response
     */
    public function edit(Kurir $kurir)
    {
        $kurirr = Kurir::find($kurir)->first();
        //return $kurirr;
        return view('Backend.Kurir.kuriredit',compact('kurirr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kurir  $kurir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kurir $kurir)
    {
        Kurir::find($kurir->id)->update($request->all());
        return redirect('/kurir');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kurir  $kurir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kurir $kurir)
    {
        Kurir::find($kurir->id)->delete();
        return redirect('/kurir');
    }
}

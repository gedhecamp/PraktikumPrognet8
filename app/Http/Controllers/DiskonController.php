<?php

namespace App\Http\Controllers;

use App\Diskon;
use App\Produk;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DateTime;

class DiskonController extends Controller
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
        $diskon = Diskon::join('products', 'discounts.id_product', '=', 'products.id')
        ->select('discounts.*', 'products.product_name')
        ->get();
        // return $diskon;
        // $subquery = Produk::join('discounts', 'discounts.id_product', '=', 'products.id')
        // ->select('products.id')
        // ->where('discounts.end', '>', Carbon::now())
        // ->get();

        // $produk = Produk::all()
        // ->whereNotIn('products.id', $subquery)
        // ->get();

        $produk = Produk::whereNotIn('products.id', function($query){
            $query->select('id_product')
            ->from(with(new Diskon)->getTable())
            ->where('discounts.end', '>', Carbon::now());
        })-> get();

        // return $produk;
        return view('Backend.Diskon.diskon',compact('diskon','produk','pesan','subquery'));
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
        $start = $request->start;
        $end = $request->end;
        // return $tanggal;
        // $date = DateTime::createFromFormat('d/m/Y H:i:s', $tanggal);
        // return $date;
        // $tanggal->format('Y-m-d h:i:s');
        $start = strtotime($start);
        $end = strtotime($end);
        $start = date('Y-m-d H:i:s',$start);
        $end = date('Y-m-d H:i:s',$end);
        // return compact('start','end');

        $produk = $request->produk;
        // return $produk;
        foreach ($produk as $p) {
            // return $p;
            $diskon = Diskon::create(
                [
                'id_product' => $p,
                'percentage' => $request->percentage,
                'start' => $start,
                'end' => $end,
                ]);
        }
        
        return redirect('diskon');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Diskon  $diskon
     * @return \Illuminate\Http\Response
     */
    public function show(Diskon $diskon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Diskon  $diskon
     * @return \Illuminate\Http\Response
     */
    public function edit(Diskon $diskon)
    {
        // return $diskon;
        // $produk = Produk::join('discounts', 'discounts.id_product', '=', 'products.id')
        // ->select('products.*')
        // ->where('discounts.id_product', '=', $diskon->id_product)
        // ->get();
        // $produkitem = Diskon::where('id_product',$diskon->id_product)->get();
        $diskon = Diskon::join('products', 'discounts.id_product', '=', 'products.id')
        ->select('discounts.*', 'products.product_name')
        ->where('discounts.id_product', '=', $diskon->id_product)
        ->first();

        // return $produk;
        // return $diskon;
        return view('Backend.Diskon.diskonedit',compact('diskon','produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Diskon  $diskon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diskon $diskon)
    {
        Diskon::find($diskon->id)->update($request->all());
        return redirect('/diskon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Diskon  $diskon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diskon $diskon)
    {
        Diskon::find($diskon->id)->delete();
        return redirect('/diskon');
    }
}

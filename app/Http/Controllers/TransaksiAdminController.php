<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\TransaksiDetail;
use App\Cart;
use App\Produk;
use DB;
use App\GambarProduk;
use App\Kategori;
use App\CategoriProdukDetail;
use App\Diskon;
use App\Kurir;
use File;

class TransaksiAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unverified = Transaksi::where('status','unverified')->get();
        $delivered = Transaksi::where('status','delivered')->get();
        $cancel = Transaksi::where('status','canceled')->orWhere('status','expired')->get();
        $success = Transaksi::where('status','success')->get();
        $dataKategori = Kategori::all();
        return view('Backend.Transaksi.transaksi',compact('unverified','delivered','cancel','success','dataKategori'));   
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
        // return $request;
        $id_kurir = Kurir::where('courier',$request->courier)->first()->id;
        $todayString = Carbon::today()->toDateString();
        $today = Carbon::now();
        $timeout = $today->addDays(2)->toDateTimeString();
        // return $timeout;

        $transaksi = Transaksi::create([
            'timeout' => $timeout,
            'address' => $request->address,
            'regency' => $request->regency,
            'province' => $request->province,
            'total' => $request->total,
            'shipping_cost' => $request->shipping_cost,
            'sub_total' => $request->sub_total,
            'user_id' => Auth::user()->id,
            'courier_id' => $id_kurir,
            'status' => 'unverified',
            'service' => $request->service,
        ]);
        // return $todayString;
        $cart = Cart::join('products','carts.product_id','=','products.id')
        ->where('user_id',Auth::user()->id)->where('carts.status','notyet')
        ->select('carts.*','products.price')->get();
        $allDiskon = Diskon::where([
            ['start', '<=', $todayString],
            ['end', '>=', $todayString],
        ])->orderBy('updated_at', 'desc')->get();
        // return compact('cart','allDiskon');
        // $flag=2;
        foreach ($cart as $c) {
            foreach ($allDiskon as $d) {
                if ($c->product_id == $d->id_product) {
                    $flag=1;
                    $diskon = $d->percentage;
                    // return $diskon;
                    break;
                }
                else {
                    $flag=2;
                }
            }
            if ($flag==1) {
                TransaksiDetail::create([
                    'transaction_id' => $transaksi->id,
                    'product_id' => $c->product_id,
                    'qty' => $c->qty,
                    'discount' => $diskon,
                    'selling_price' => $c->price,
                ]);
            }
            else {
                TransaksiDetail::create([
                    'transaction_id' => $transaksi->id,
                    'product_id' => $c->product_id,
                    'qty' => $c->qty,
                    'discount' => 0,
                    'selling_price' => $c->price,
                ]);
            } 
        }
        Cart::where('user_id', Auth::user()->id)
          ->where('status', 'notyet')
          ->update(['status' => 'checkedout']);
        $user = User::find(3);
        $user->notify(new UserNotif("Status Transaksi Anda Sudah Delivered"));
        return redirect('/cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($transaksi)
    {
        Transaksi::where('id',$transaksi)
          ->update(['status' => 'delivered']);
        return redirect('/transaksi/');
    }

    public function cancel($transaksi)
    {
        Transaksi::where('id',$transaksi)
          ->update(['status' => 'success']);
        return redirect('/profile/');
    }

    public function uploadBukti(Request $request)
    {
        // return $request;
        $today = Carbon::now();
        $transaksi = Transaksi::where('id',$request->id)->first();
        if(!empty($transaksi->proof_of_payment)){
            File::delete($transaksi->proof_of_payment);
        }
        if($transaksi->timeout < $today){
            Transaksi::where('id',$request->id)
                    ->update([
                    'status' =>  'expired',
                ]);
        }
        if($request->hasFile('images')) {
            $destinationPath = public_path('images/bukti/');
            $image = $request->file('images');
            $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
                Transaksi::where('id',$request->id)
                    ->update([
                    'proof_of_payment' =>  'images/bukti/'. $filename,
                ]);
        }
        return redirect('/profile/');
    }
}

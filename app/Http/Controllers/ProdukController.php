<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Kategori;
use App\GambarProduk;
use App\CategoriProdukDetail;
use App\Diskon;
use File;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use DB;
use App\AdminNotif;
use App\UserNotif;

class ProdukController extends Controller
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
        $produk = Produk::all();
        $kategori = Kategori::all();
        return view('Backend.Produk.produk',compact('produk','kategori'));
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
        $produk = Produk::create(
            [
            'product_name' => $request->nama,
            'price' => $request->harga,
            'description' => $request->des,
            'product_rate' => $request->rate,
            'stock' => $request->stok,
            'weight' => $request->berat,
            ]);
        foreach ($request->kategori as $kategoris) {
            CategoriProdukDetail::create(
                [
                'product_id' =>  $produk->id,
                'category_id' => $kategoris,
                ]);
        }
        if($request->hasFile('gambar')) {
            foreach($request->file('gambar') as $image) {
                $destinationPath = public_path('gambar/produk/');
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
                GambarProduk::create(
                    [
                    'product_id' =>  $produk->id,
                    'image_name' =>  'gambar/produk/'. $filename,
                    ]);
            }
        }
        //return $image;
        //return $produk;
        return redirect('produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        $product = Produk::find($produk)->first();
        $allKategori = Kategori::all();
        $kategori = CategoriProdukDetail::where('product_id',$product->id)->get();
        $images = GambarProduk::where('product_id',$product->id)->get();
        return view('Backend.Produk.produkshow',compact('product','kategori','images','allKategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        $product = Produk::find($produk)->first();
        $kategori = Kategori::all();
        $allKategori = CategoriProdukDetail::where('product_id',$product->id)->get();
        $images = GambarProduk::where('product_id',$product->id)->get();
        
        return view('Backend.Produk.produkedit',compact('product','kategori','allKategori','images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        Produk::find($produk->id)->update(
            [
                'product_name' => $request->nama,
                'price' => $request->harga,
                'description' => $request->des,
                'product_rate' => $request->rate,
                'stock' => $request->stok,
                'weight' => $request->berat,
            ]);
        CategoriProdukDetail::where('product_id',$produk->id)->delete();
        foreach ($request->kategori as $kategoris) {
            CategoriProdukDetail::create([
                'product_id' =>  $produk->id,
                'category_id' => $kategoris,
            ]);
        }
        $images = GambarProduk::where('product_id',$produk->id)->get();
        $arrayimage[] = "";
        foreach ($images as $i) {
            array_push($arrayimage,$i->image_name);
        }
        
        
        if($request->hasFile('gambar')) {
            GambarProduk::where('product_id',$produk->id)->delete();
            File::delete($arrayimage);
            foreach($request->file('gambar') as $image) {
                $destinationPath = public_path('gambar/produk/');
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
                GambarProduk::create(
                    [
                    'product_id' =>  $produk->id,
                    'image_name' =>  'gambar/produk/'. $filename,
                    ]);
            }
        }
        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        CategoriProdukDetail::where('product_id',$produk->id)->delete();

        $images = GambarProduk::where('product_id',$produk->id)->get();
        $arrayimage[] = "";
        foreach ($images as $i) {
            array_push($arrayimage,$i->image_name);
        }
        GambarProduk::where('product_id',$produk->id)->delete();
        File::delete($arrayimage);

        Diskon::where('id_product',$produk->id)->delete();

        Produk::find($produk->id)->delete();
        return redirect('produk');
    }

    public function tambah($id)
    {
        // return $id;
        $produk = Produk::all();
        $product = Produk::where('id', '=', $id)->get();
        $images = GambarProduk::where('product_id', '=', $id)->get();

        // return $product;
        return view('Backend.Produk.produkimage',compact('product','images','produk'));
    }

    public function tambahgambar(Request $request)
    {
        // $id = $request->id_product;
        if($request->hasFile('gambar')) {
            // GambarProduk::where('product_id',$request->id_product)->delete();
            $image = $request->file('gambar');
            // foreach($request->file('gambar') as $image) {
                $destinationPath = public_path('gambar/produk/');
                $filename = Carbon::now()->timestamp.$image->getClientOriginalName();
                // File::delete($destinationPath.$filename);
                $image->move($destinationPath, $filename);
                GambarProduk::create(
                    [
                    'product_id' =>  $request->id_product,
                    'image_name' =>  'gambar/produk/'. $filename,
                    ]);
            // }
        }
        // return $request;
        // return redirect('produktambah/'.$id);
        return redirect()->back();
    }

    public function destroyimages($id)
    {
        $images = GambarProduk::where('id', '=', $id)->first();
        


        // $cobak = $this->GambarProduk
        //     ->join('product', 'product.id', '=', 'product_images.product_id')
        //     ->where('product_images.id', '=', $id)
        //     ->select('product.id')
        //     ->first();

        // return $images;
        // return $images;
        // $idp = $images->product_id;
        // return $idp;
        File::delete($images->image_name);
        GambarProduk::where('id',$id)->delete();
        // return $id;
        return redirect()->back();
    }
}

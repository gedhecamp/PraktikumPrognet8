<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Kategori;
use App\GambarProduk;
use App\CategoriProdukDetail;
use App\Diskon;
use App\Cart;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $produk = Produk::all();
        $gambar = GambarProduk::groupBy('product_id')
            ->get();

        $product = Produk::join('product_category_details', 'products.id', '=', 'product_category_details.product_id')
            ->join('product_categories', 'product_categories.id', '=', 'product_category_details.category_id')
            ->join('product_images', 'products.id', '=', 'product_images.product_id')
            ->join('discounts', 'products.id', '=', 'discounts.id_product')
            // ->join('product_reviews', 'products.id', '=', 'product_reviews.product_id')
            ->select('*')
            ->get();

        $kategori = DB::table('product_categories')
            ->join('product_category_details', 'product_categories.id', '=', 'product_category_details.category_id')
            ->get();

        $now = date("Y-m-d H:i:s");
        // return $now;
        $diskon = Diskon::where([
            ['start', '<=', $now],
            ['end', '>=', $now],
        ])->get();
        // return $diskon;
        $max = sizeof($diskon);
        // return $diskon;
        $dataKategori = Kategori::all();
        // $countCart = DB::select('');
        // return $product;

        return view ('Frontend.layout.shopping', compact('produk','gambar','diskon','product','kategori','dataKategori','now','diskon','max'));
    }
    
    public function pageProduct(Request $request,$id){
        // $transactionCount = $this->transactionCount();
        // $cartCount = 0;

        // $cartData = "";
        // if(Auth::guard('user')->check()){
        //     $cartData = $this->cartData();
        //     $cartCount = 0;
        //     foreach($cartData as $cart){
        //         $cartCount++;
        //     }
        // }

        // $dataCategory = $this->headercategories();

        $today = Carbon::today()->toDateString();

        $product = Produk::join('product_category_details', 'products.id', '=', 'product_category_details.product_id')
            ->join('product_categories', 'product_categories.id', '=', 'product_category_details.category_id')
            ->join('product_images', 'products.id', '=', 'product_images.product_id')
            // ->join('discounts', 'products.id', '=', 'discounts.id_product')
            // ->join('product_reviews', 'products.id', '=', 'product_reviews.product_id')
            ->select('*')
            ->where('products.id', '=', $id)
            ->first();

        $images = GambarProduk::where('product_id',$id)->get();
        $now = date("Y-m-d H:i:s");
        $diskon = Diskon::where([
            ['start', '<=', $now],
            ['end', '>=', $now],
        ])->get();
        $max = sizeof($diskon);

        $dataKategori = Kategori::all();
        
        // $diskon = DB::select('SELECT * FROM discounts WHERE discounts.`id_product`='$id' AND discounts.`start`< NOW() AND discounts.`end` > NOW()');

        // $product = Produk::with('product_category_detail.product_category', 'product_review.user', 'product_image', 'discount', 'product_review.response.admin')
        //                         ->orderBy('products.id','desc')
        //                         ->where('products.id',$id)
        //                         ->first();
        //                         return $product;
        
        // return $product;
        // return $request;
        // return $diskon;
        return view('Frontend.Product.detail', compact('product','today','images','diskon','now','max','dataKategori'));
    }

    public function pageCategory($id){
        $kategoriname = Kategori::where('product_categories.id', '=', $id)
            ->first();

        $gambar = GambarProduk::join('products', 'products.id', '=', 'product_images.product_id')
        ->join('product_category_details', 'products.id', '=', 'product_category_details.product_id')
        ->join('product_categories', 'product_categories.id', '=', 'product_category_details.category_id')
        ->where('product_categories.id', '=', $id)
        ->groupby('products.id')
        ->select('product_images.*')
        ->get();

        $produk = Produk::join('product_category_details', 'products.id', '=', 'product_category_details.product_id')
            ->join('product_categories', 'product_categories.id', '=', 'product_category_details.category_id')
            // ->join('product_images', 'products.id', '=', 'product_images.product_id')
            // ->join('discounts', 'products.id', '=', 'discounts.id_product')
            // ->join('product_reviews', 'products.id', '=', 'product_reviews.product_id')
            ->where('product_categories.id', '=', $id)
            ->select('*')
            ->get();
        
        // $gambar = GambarProduk::groupBy('product_id')
        //     ->get();

        $kategori = DB::table('product_categories')
            ->join('product_category_details', 'product_categories.id', '=', 'product_category_details.category_id')
            ->get();

        $now = date("Y-m-d H:i:s");
        // return $now;
        $diskon = Diskon::where([
            ['start', '<=', $now],
            ['end', '>=', $now],
        ])->get();
        // return $diskon;
        $max = sizeof($diskon);
        // return $diskon;
        $dataKategori = Kategori::all();
        // return $product;

        // return $produk;
        // return $gambar;
        // return $kategoriname;
        return view ('Frontend.layout.kategori', compact('kategoriname','gambar','diskon','today','produk','kategori','dataKategori','now','max'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Transaksi;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Backend.Layouts.index2');
    }

    public function tahun()
    {
        $tahun = DB::select('SELECT YEAR(created_at) as tahun, COUNT(id) as jumlah, SUM(total) as total FROM transactions WHERE transactions.`status`="success" GROUP BY YEAR(created_at)');
        // return $tahun;
        return view('Backend.Report.tahun',compact('tahun'));
    }

    public function bulan()
    {
        $bulan = DB::select('SELECT YEAR(created_at) as tahun, MONTHNAME(created_at) AS bulan, COUNT(id) AS jumlah, SUM(total)AS total FROM transactions WHERE transactions.`status` = "success" GROUP BY MONTH(created_at)');
        return view('Backend.Report.bulan',compact('bulan'));
    }
}

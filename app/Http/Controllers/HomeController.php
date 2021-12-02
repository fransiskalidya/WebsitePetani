<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlah = DB::table('users')->count();
        $jumlah1 = DB::table('datapetani')->count();
        $jumlah2 = DB::table('barang')->count();
        return view('home', compact('jumlah', 'jumlah1', 'jumlah2'));
    }
}

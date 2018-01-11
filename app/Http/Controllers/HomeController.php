<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$item_kamera = DB::table('kameras')->where('id_kamera', '<', 13)->get();
    	$item_lensa =  DB::table('lensas')->where('id_lensa' , '<', 5)->get();

        return view('layouts/home', ['item_kamera' => $item_kamera, 'item_lensa' => $item_lensa]);
    }

}

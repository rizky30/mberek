<?php

namespace App\Http\Controllers;

use App\wishlist;
use Illuminate\Http\Request;

use Input; # untuk inputan

use Validator; #untuk validator

use Redirect; #untuk redirect (saat error)

use DB;

class wishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('/layouts/wishlist');
    }

    public function viewWishlist()
    {
        //
        $wishlist = wishlist::all();
        return view('/admin/viewWishlist',compact('wishlist'));
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
        $wishlist = new wishlist;
        $wishlist->nama=Input::get("nama");
        $wishlist->email=Input::get("email");
        $wishlist->telepon=Input::get("telepon");
        $wishlist->request=Input::get("request");
        $wishlist->deskripsi=Input::get("deskripsi");
        $wishlist->save();
        return redirect('wishlist');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_wishlist)
    {
        $wishlist = DB::table("wishlist")->where('id_wishlist',$id_wishlist)->first();
        return view('admin/detilWishlist',compact('wishlist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_wishlist)
    {
        $wishlist = DB::table("wishlist")->where('id_wishlist',$id_wishlist);
        $wishlist->delete();
        return redirect('/admin/viewWishlist');
    }
}

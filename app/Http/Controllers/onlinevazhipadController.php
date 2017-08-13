<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Vname;
use App\Vtype;
use App\Prathishta;
use Response;
use App\Star;
use App\Cart;
use Auth;

class onlinevazhipadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vtypes = Vtype::all();
        $stars = Star::all();
        $prathishtas = Prathishta::all();
        $carts = Cart::all();
        return view('online_vazhipad.online_vazhipad')->withVtypes($vtypes)->withPrathishtas($prathishtas)->withStars($stars)->withCarts($carts);
    }
    public function ajax(Request $request) {
        $vnames = Vname::all()->where('prathishtas_id', '=', $request->prathishtas_id)->where('vtypes_id', '=', $request->vtypes_id);
        return Response::json($vnames);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}

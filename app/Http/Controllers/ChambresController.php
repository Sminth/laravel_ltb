<?php

namespace App\Http\Controllers;

use App\Chambres;
use Illuminate\Http\Request;

class ChambresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('/LTB.room-2');
    }

    public function specifiedindex($id){

        return view('/LTB.room-details');
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
     * @param  \App\Chambres  $chambres
     * @return \Illuminate\Http\Response
     */
    public function show(Chambres $chambres)
    {

        //
        return view('/LTB.room-details');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chambres  $chambres
     * @return \Illuminate\Http\Response
     */
    public function edit(Chambres $chambres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chambres  $chambres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chambres $chambres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chambres  $chambres
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chambres $chambres)
    {
        //
    }
}

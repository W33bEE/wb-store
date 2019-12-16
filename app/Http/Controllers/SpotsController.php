<?php

namespace App\Http\Controllers;

use App\Spots;
use Illuminate\Http\Request;

class SpotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $spots = Spots::all();
        return view('/spots',compact('spots'));
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
     * @param  \App\Spots  $spots
     * @return \Illuminate\Http\Response
     */
    public function show(Spots $spots)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Spots  $spots
     * @return \Illuminate\Http\Response
     */
    public function edit(Spots $spots)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Spots  $spots
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spots $spots)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Spots  $spots
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spots $spots)
    {
        //
    }
}

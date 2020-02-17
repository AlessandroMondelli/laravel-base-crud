<?php

namespace App\Http\Controllers;

use App\Videogame;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videogame = Videogame::all();
        return view('videogames.index',['videogames' => $videogame]);
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
     * @param  \App\Videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function show(Videogame $videogame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function edit(Videogame $videogame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Videogame $videogame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Videogame  $videogame
     * @return \Illuminate\Http\Response
     */
    public function destroy(Videogame $videogame)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Universidades;
use Illuminate\Http\Request;

class UniversidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('universidades.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('universidades.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $universidad= request()->except('_token');
      Universidades::insert($universidad);
      return response()->json($universidad);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Universidades  $universidades
     * @return \Illuminate\Http\Response
     */
    public function show(Universidades $universidades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Universidades  $universidades
     * @return \Illuminate\Http\Response
     */
    public function edit(Universidades $universidades)
    {
        return view('universidades.editar');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Universidades  $universidades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Universidades $universidades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Universidades  $universidades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Universidades $universidades)
    {
        //
    }
}

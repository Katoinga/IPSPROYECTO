<?php

namespace App\Http\Controllers;
use DB;
use App\Universidades;
use Illuminate\Http\Request;

class UniversidadesController extends Controller
{
    public function __construct(){
      $this->middleware('auth')->only('create');
    }


    public function busqueda(Request $request)
    {
      $region = $request->get('queryRegion');
      $region = strtoupper($region);
      if (!($region === '')) {
          $universidades = DB::table('universidades')
                          ->where('departamento',$region)
                          ->get();
          return view('universidades.viewMore',['universidades' => $universidades]);
      }
      $universidades = DB::select('SELECT nombre, tipo_gestion, estado_licenciamiento, periodo_licenciamiento, departamento, provincia FROM universidades');
      return view('universidades.viewMore',['universidades' => $universidades]);
    }


    /*public function simple()
    {
      $universidades = DB::select('SELECT nombre, tipo_gestion, estado_licenciamiento, periodo_licenciamiento, departamento, provincia FROM universidades');
      return view('universidades.simple',['universidades' => $universidades]);

    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universidades = DB::select('SELECT nombre, tipo_gestion, estado_licenciamiento, periodo_licenciamiento, departamento, provincia FROM universidades');
        return view('universidades.index',['universidades' => $universidades]);
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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
      //return response()->json($universidad);
      return view('universidades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Universidades  $universidades
     * @return \Illuminate\Http\Response
     */
    public static function show($universidad)
    {
      $universidades = DB::table('universidades')
                      ->where('nombre',$universidad)
                      ->get();
      return view('universidades.viewUnique',['universidades' => $universidades]);
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

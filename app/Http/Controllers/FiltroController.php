<?php

namespace App\Http\Controllers;

use App\Universidades;
use Illuminate\Http\Request;
use DB;

class FiltroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $universidades = DB::select('SELECT nombre, tipo_gestion, estado_licenciamiento, periodo_licenciamiento, departamento, provincia FROM universidades');
      return view('universidades.viewMore',['universidades' => $universidades]);
    }
}

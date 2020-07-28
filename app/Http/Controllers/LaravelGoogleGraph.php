<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LaravelGoogleGraph extends Controller
{
  function index()
  {
   $data = DB::table('universidades')
     ->select(
       DB::raw('estado_licenciamiento as estado_licenciamiento'),
       DB::raw('count(*) as number'))
     ->groupBy('estado_licenciamiento')
     ->get();
   $array[] = ['Estado', 'Number'];
   foreach($data as $key => $value)
   {
    $array[++$key] = [$value->estado_licenciamiento, $value->number];
   }
   return view('google_pie_chart')->with('estado_licenciamiento', json_encode($array));
  }
  function segundo()
  {
   $data = DB::table('universidades')
     ->select(
       DB::raw('departamento as departamento'),
       DB::raw('count(*) as number'))
     ->groupBy('departamento')
     ->get();
   $array[] = ['Periodo', 'Number'];
   foreach($data as $key => $value)
   {
    $array[++$key] = [$value->departamento, $value->number];
   }
   return view('google_pie_chart2')->with('departamento', json_encode($array));
  }
  function tercero()
  {
   $data = DB::table('universidades')
     ->select(
       DB::raw('tipo_gestion as tipo_gestion'),
       DB::raw('count(*) as number'))
     ->groupBy('tipo_gestion')
     ->get();
   $array[] = ['Tipo', 'Number'];
   foreach($data as $key => $value)
   {
    $array[++$key] = [$value->tipo_gestion, $value->number];
   }
   return view('google_pie_chart3')->with('tipo_gestion', json_encode($array));
  }
}

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
}

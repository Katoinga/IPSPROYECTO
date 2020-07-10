<?php

namespace App\Http\Controllers;
use DB;
use Charts;


use Illuminate\Http\Request;
use App\Universidades;
use App\Charts\UniversidadChart;

class ChartController extends Controller
{
    public function index()
    {
      $universidades = DB::select('SELECT nombre, tipo_gestion, estado_licenciamiento, periodo_licenciamiento, departamento, provincia FROM universidades');

        $chart = new UniversidadChart;
        $chart->labels(['LICENCIA OTORGADA', 'LICENCIA DENEGADA', 'CON INFORME DE REVISIÓN']);
        $chart->dataset('Universidades Licenciadas', 'line', $universidades)->options([
            'fill' => 'true',
            'borderColor' => '#51C1C0'
        ]);

        return view('chart', compact('chart'));
    }
}

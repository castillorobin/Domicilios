<?php

namespace App\Http\Controllers;
use App\Models\Envio;

class DashboardController extends Controller
{
    public function index()
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);

        $envios = Envio::all();
        return view('pages.dashboards.index', compact('envios'));

       // return view('pages.dashboards.index');
    }

    public function filtroruta()
    {
        $envios = Envio::where('estado', "En ruta")->get();
        return view('pages.dashboards.index', compact('envios'));

      
    }

    public function filtroentregado()
    {
        $envios = Envio::where('estado', "Entregado")->get();
        return view('pages.dashboards.index', compact('envios'));
    }

    public function filtrofallido()
    {
        $envios = Envio::where('estado', "Fallido")->get();
        return view('pages.dashboards.index', compact('envios'));
    }

    public function filtronoentregado()
    {
        $envios = Envio::where('estado', "No entregado")->get();
        return view('pages.dashboards.index', compact('envios'));
    }

    public function filtroreprogramado()
    {
        $envios = Envio::where('estado', "Reprogramado")->get();
        return view('pages.dashboards.index', compact('envios'));
    }
     
}

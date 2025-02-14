<?php

namespace App\Http\Controllers;
use App\Models\Envio;
use Illuminate\Http\Request;
class DashboardController extends Controller
{
    public function index()
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);

        $envios = Envio::all();
        return view('pages.dashboards.index', compact('envios'));

       // return view('pages.dashboards.index');
    }

    public function detalles($id)
    {
        
        $envios = Envio::where('guia', $id)->get();
        return view('pages.dashboards.detalles', compact('envios'));

       // return view('pages.dashboards.index');
    }
 
    public function usuarios()
    {
        addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);

        $envios = Envio::all();
        return view('usuarios.index', compact('envios'));

       // return view('pages.dashboards.index');
    }

    public function filtroruta()
    {
        $envios = Envio::where('estado', "En ruta")->get();
        return view('pages.dashboards.indexdatos', compact('envios'));
    }

    public function filtroentregado()
    {
        $envios = Envio::where('estado', "Entregado")->get();
        return view('pages.dashboards.indexdatos', compact('envios'));
    }

    public function filtrofallido()
    {
        $envios = Envio::where('estado', "Fallido")->get();
        return view('pages.dashboards.indexdatos', compact('envios'));
    }

    public function filtronoentregado()
    {
        $envios = Envio::where('estado', "No entregado")->get();
        return view('pages.dashboards.indexdatos', compact('envios'));
    }

    public function filtroreprogramado()
    {
        $envios = Envio::where('estado', "Reprogramado")->get();
        return view('pages.dashboards.indexdatos', compact('envios'));
    }

    public function filtrocambio(Request $request)
    {
        
        $imagen2 = $request->file("foto");
        $guia = $request->file("guia2");
        $nota = $request->file("notarepa");

        $envios2 = Envio::find($guia);

        dd($guia);
        $envios2->foto5 = $nota;

        if ($request->hasFile('foto')) {

            $imagen = $request->file("foto");
            $nombreimagen = Str::slug(time()) . "." . $imagen->guessExtension();
            $envios2->fotocambio = $nombreimagen;
            $ruta = public_path("/fotos");
            $imagen->move($ruta, $nombreimagen);
        }

        $envios2->save();

        $envios = Envio::where('estado', "Cambio")->get();
        return view('pages.dashboards.indexdatos', compact('envios'));
    }

    public function filtroasig()
    {
        
        $envios = Envio::all();
        return view('pages.dashboards.indexdatos', compact('envios'));
    }   
     
}

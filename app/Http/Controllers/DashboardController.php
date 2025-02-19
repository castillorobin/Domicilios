<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Envio;
use Illuminate\Support\Str;
use Carbon\Carbon;


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
       $envios = new Envio();
       $envios = Envio::where('estado', "Entregado")->get();
       // $envios = new Envio();
       // $envios[0]->comercio = "No hay paquetes";
        return view('pages.dashboards.indexentregados', compact('envios'));
    }

    public function filtrofallido()
    {
        $envios = Envio::where('estado', "Fallido")->get();
        return view('pages.dashboards.indexfallidos', compact('envios'));
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

    public function cambiarruta($id)
    {
        $envios2 = Envio::find($id);
        $envios2->estado = "En ruta";
        $envios2->save();

        //$envios = Envio::all();
        return redirect()->route('filtroasig');
        //return view('pages.dashboards.indexdatos', compact('envios'));
    }
    
    public function cambiarentregado($id)
    {
        $envios2 = Envio::find($id);
        $envios2->estado = "Entregado";
        $envios2->save();

       // $envios = Envio::all();
        return redirect()->route('filtroentregado');
        //return view('pages.dashboards.indexdatos', compact('envios'));
    }


    public function filtrocambios(Request $request)
    {
        
        $imagen2 = $request->file("foto");
        $guia = $request->file("guia2");
        $nota = $request->file("notarepa");
        dd($nota);
        $envios2 = Envio::find($guia);

        
        $envios2->estado = "Cambio";
        $envios2->estado = $nota;

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

    public function cambiando(Request $request)
    {
        
        $imagen2 = $request->file("foto");
        $guia = $request->get("guia2");
        $nota = $request->get("notarepa");

        //dd($guia);
        $envios2 = Envio::find($guia);

        
        $envios2->estado = "Cambio";
        $envios2->guiacambio = $nota;

        if ($request->hasFile('foto')) {
//dd("Hay Foto");
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
        
        //$envios = Envio::all();
        $envios = Envio::whereDate('fecha_entrega', Carbon::today())->get();
        return view('pages.dashboards.indexdatos', compact('envios'));
    }   
     
}

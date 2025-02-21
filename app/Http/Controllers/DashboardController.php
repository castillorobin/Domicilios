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
        return view('pages.dashboards.indexnoentregados', compact('envios'));
    }

    public function filtroreprogramado()
    {
        $envios = Envio::where('estado', "Reprogramado")->get();
        return view('pages.dashboards.indexdatos', compact('envios'));
    }
    public function filtrocambio()
    {
        $envios = Envio::where('estado', "Cambio")->get();
        return view('pages.dashboards.indexcambios', compact('envios'));
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
        $envios2->cambioasi = 1;
        $envios2->save();

       // $envios = Envio::all();
        return redirect()->route('filtroentregado');
        //return view('pages.dashboards.indexdatos', compact('envios'));
    }

    public function cambiarfallido(Request $request)
    {
        $id = $request->get("idfallido");
        $nota = $request->get("notaotro");
        $nota2 = $request->get("notareprogra");
        $motivo = $request->get("motivofallo");
        $fecha = $request->get("fecha");

       // dd($fecha);
        $envios2 = Envio::find($id);
        $envios2->estado = "Fallido";
        if ($motivo == "otro") {
            $envios2->notafallido = $nota;
        }
        if ($motivo == "reprogramado") {
            $envios2->notafallido = $nota2;
        }
        $envios2->fechareprogra = $fecha;
        $envios2->motivofallo = $motivo;
        $envios2->cambioasi = 1;
        $envios2->save();

       // $envios = Envio::all();
        return redirect()->route('filtrofallido');
        //return view('pages.dashboards.indexdatos', compact('envios'));
    }

    public function cambiarnoentre(Request $request)
    {
        $id = $request->get("idnoentre");
        $nota = $request->get("nota");
        $envios2 = Envio::find($id);
        $envios2->estado = "No entregado";
        $envios2->notanoentre = $nota;
        $envios2->cambioasi = 1;
        $envios2->save();
        
       // $envios = Envio::all();
        return redirect()->route('filtronoentregado');
        //return view('pages.dashboards.indexdatos', compact('envios'));
    }

    public function cambiarreprogra(Request $request)
    {
        $id = $request->get("idreprogra");
        $nota = $request->get("motivo");
        $fecha = $request->get("fecha");
        $envios2 = Envio::find($id);
        $envios2->estado = "Reprogramado";
        $envios2->notareprogra = $nota;
        $envios2->fechareprogra = $fecha;
        $envios2->cambioasi = 1;
        $envios2->save();

       // $envios = Envio::all();
        return redirect()->route('filtroasig');
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
        $envios2->cambioasi = 1;
        if ($request->hasFile('foto')) {
//dd("Hay Foto");
            $imagen = $request->file("foto");
            $nombreimagen = Str::slug(time()) . "." . $imagen->guessExtension();
            $envios2->fotocambio = $nombreimagen;
            $ruta = public_path("/fotos");
            $imagen->move($ruta, $nombreimagen);
        }

        $envios2->save();
        return redirect()->route('filtrocambio');

       // $envios = Envio::where('estado', "Cambio")->get();
       // return view('pages.dashboards.indexdatos', compact('envios'));  filtrocambio
    }

    public function filtroasig()
    {
        
        //$envios = Envio::all();
        $envios = Envio::whereDate('fechaasigna', Carbon::today())->where('cambioasi', 0)->get();
        return view('pages.dashboards.indexdatos', compact('envios'));
    }   
     
}

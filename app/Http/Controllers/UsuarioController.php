<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*
        $roles = Role::pluck('name','name')->all();
        $usuarios = User::all();
        $empleados = Empleado::all();

        foreach ($usuarios as $key => $user) {
            if (Cache::has('user-is-online-' . $user->id)){
                $usuarios[$key]->status = 'Online';
            }else{
                $usuarios[$key]->status = 'Offline';
            }
        }
*/
addVendors(['amcharts', 'amcharts-maps', 'amcharts-stock']);

        $nota = " ";
      //  return view('usuarios.usuariolista',compact('usuarios', 'roles', 'empleados', 'nota')); 
      return view('pages.dashboards.usuariolista',compact( 'nota')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}

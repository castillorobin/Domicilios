<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Models\Usuario;
>>>>>>> c8834b76cb8b8bf4712759aafbd0543ab459312c
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        //
=======
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
>>>>>>> c8834b76cb8b8bf4712759aafbd0543ab459312c
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
<<<<<<< HEAD
    public function show(string $id)
=======
    public function show(Usuario $usuario)
>>>>>>> c8834b76cb8b8bf4712759aafbd0543ab459312c
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<< HEAD
    public function edit(string $id)
=======
    public function edit(Usuario $usuario)
>>>>>>> c8834b76cb8b8bf4712759aafbd0543ab459312c
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(Request $request, string $id)
=======
    public function update(Request $request, Usuario $usuario)
>>>>>>> c8834b76cb8b8bf4712759aafbd0543ab459312c
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy(string $id)
=======
    public function destroy(Usuario $usuario)
>>>>>>> c8834b76cb8b8bf4712759aafbd0543ab459312c
    {
        //
    }
}

<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tipoproducto;

class TiposproductosController extends Controller
{
    //Función del CRUD para mostrar todos los tipos de productos
    public function index()
    {
        //Consulta a la tabla tipos de productos
        $tipos = Tipoproducto::all();
        return view('admin.tiposproductos.index',compact('tipos'));
    }

    //Función del CRUD para mostrar el formulario para registrar un nuevo tipo de producto
    public function create()
    {
        return view('admin.tiposproductos.crear');
    }

    //función para guardar en la tabla tipos de productos
    public function store(Request $request)
    {
        //Validar
        $request->validate([
            'nombre'=> 'required|max:12|unique:tipos_productos'
        ]);

        //Guardar
        Tipoproducto::create([
            'nombre'=>$request->nombre
        ]);

        return redirect()->route('tiposproductos.index');
    }

    //Función para mostrar más detalles del tipo de producto    
    public function show($id)
    {
        //
    }

    //Función para mostrar el formulario para editar un producto
    public function edit($id)
    {
        //
    }

    //Función para actualizar el tipo de producto en la tabla
    public function update(Request $request, $id)
    {
        //
    }

    //Función para borrar un tipo de producto
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Producto;
use App\Tipoproducto;
use App\Animal;
use App\Estado;

class ProductosController extends Controller
{
    //Función para listar los productos
    public function index()
    {
        //Consulta a la tabla de productos
        $productos = Producto::all();
        return view('admin.productos.index',compact('productos'));
    }

    //Función para abrir el formulario que me permite ingresar los datos de un nuevo producto
    public function create()
    {
        $tipos = Tipoproducto::pluck('nombre','id');
        $animales = Animal::pluck('nombre','id');
        $estados = Estado::pluck('nombre','id');
        return view('admin.productos.crear',compact('tipos','animales','estados'));
    }

    //Función que guarda el nuevo producto
    public function store(Request $request)
    {
        //Validar los campos
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'precio'=>'required|numeric',
            'cantidad'=>'required|numeric',
            'tipo_id'=>'required',
            'animal_id'=>'required',
            'estado_id'=>'required'
        ]);

        //Insertarlos en la tabla
        $producto = Producto::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'precio'=>$request->precio,
            'cantidad'=>$request->cantidad,
            'tipo_id'=>$request->tipo_id,
            'animal_id'=>$request->animal_id,
            'estado_id'=>$request->estado_id
        ]);

        return redirect()->route('productos.index');
    }

    //Función que nos abre el formulario para editar un producto
    public function edit($id)
    {
        $producto = Producto::find($id);
        $tipos = Tipoproducto::pluck('nombre','id');
        $animales = Animal::pluck('nombre','id');
        $estados = Estado::pluck('nombre','id');
        return view('admin.productos.editar',compact('producto','tipos','animales','estados'));
    }

    
    public function update(Request $request, $id)
    {
        //Validar los campos
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'precio'=>'required|numeric',
            'cantidad'=>'required|numeric',
            'tipo_id'=>'required',
            'animal_id'=>'required',
            'estado_id'=>'required'
        ]);

        //Actualizar los datos en la tabla
        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->tipo_id = $request->tipo_id;
        $producto->animal_id = $request->animal_id;
        $producto->estado_id = $request->estado_id;
        $producto->save();

        return redirect()->route('productos.index');

    }
    
    //Función que elimina un registro a partir de su ID
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();

        return redirect()->route('productos.index');
    }
}

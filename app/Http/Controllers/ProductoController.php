<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
    // Obtener todos los productos de la base de datos
    $productos = Producto::all();

    // Retornar la vista 'productos.index' y pasar los productos a la vista
    return view('productos.index', compact('productos'));
    }



    public function create()
    { 
    return view("productos.create");
    }


    public function store(Request $request)
    {
        producto::create($request->all());
        return redirect()->route("productos.index");
    }

    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        return view("productos.edit", compact("producto"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)

    {
        $producto->update($request->all());
    }
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route("productos.index");
    }
}

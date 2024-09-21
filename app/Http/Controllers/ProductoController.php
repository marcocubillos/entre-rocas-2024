<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
        return response()->json(Producto::all(), 200); //200: OK
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        // Validar Productos 
        $datos = $request->validate([
       'nombre' =>['required', 'string', 'max:100'],
       'descripcion' =>['nullable','string', 'max:255'],
       'precio' =>['required', 'integer', 'min:1000'],
       'stock' =>['required', 'integer','min:1'], 
        ]);
       

     //Guardar Datos 
 $producto = Producto::create($datos); 

 // Respuesta al Cliente 
return response()->json(['success' => true, 'message' => 'Producto creado'], 201); 
 }

    public function show(Producto $producto)
    {
        return response()->json($producto, 200); //200: OK
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        // Validar datos de entrada
        $datos = $request->validate([
       'nombre' =>['required', 'string','max:100'],
       'descripcion' =>['nullable','string', 'max:255'],
       'precio' =>['required', 'integer','min:1000'],
       'stock' =>['required', 'integer','min:1'], 
        ]);
        // Actualizar Producto
        $producto->update($datos);
        // Respuesta al Cliente
        return response()->json(['success' => true,'message' => 'Producto actualizado'], 200); 
        }
    public function destroy(Producto $producto)
    {
        // Eliminar Producto
        $producto->delete();
        // Respuesta al Cliente
        return response()->json(['success' => true,'message' => 'Producto eliminado'], 200);
        }
}

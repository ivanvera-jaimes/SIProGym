<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view("productos.listarProductos",compact("productos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = producto::all();
        return view("productos.formularioCrearProducto",compact("productos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->foto=$request["foto"];
        $producto->nombre = $request["nombre"];
        $producto->descripcion = $request["descri"];
        $producto->valor = $request["valor"];
        $producto->save();

        return redirect()->route("productos.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = producto::find($id);
        return $producto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = producto::find($id);
        return view("productos.formularioEditarProductos",compact("producto"));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->foto=$request["foto"];
        $producto->nombre = $request["nombre"];
        $producto->descripcion = $request["descri"];
        $producto->valor = $request["valor"];
        $producto->save();

        return redirect()->route("productos.index");
    }

    /**
     * show the form to delete resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $producto = producto::find($id);
        return view("productos.formularioEliminarProducto",compact(["producto"]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = producto::find($id);
        $producto->delete();
        return redirect()->route("productos.index");
    }
}

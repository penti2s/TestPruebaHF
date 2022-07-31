<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recetas;

class RecetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recetas = Recetas::all();
        return $recetas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recetas = new Recetas();
        $recetas->id_pocion = $request->id_pocion;
        $recetas->ingrediente = $request->ingrediente;
        $recetas->cantidad = $request->cantidad;
        $recetas->precio = $request->precio;
        $recetas->save();
        //return json response
        return response()->json('Receta agregada con exito', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $recetas = Recetas::findOrFail($request->id);
        $recetas->id_pocion = $request->id_pocion;
        $recetas->ingrediente = $request->ingrediente;
        $recetas->cantidad = $request->cantidad;
        $recetas->precio = $request->precio;
        $recetas->save();

        return $recetas;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $recetas = Recetas::destroy($request->id);
        return $recetas;
    }
}

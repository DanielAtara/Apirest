<?php

namespace App\Http\Controllers;

use App\Models\Ocupaciones;
use Illuminate\Http\Request;

class OcupacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
        $ocupaciones=new Ocupaciones();
        $ocupaciones->occupation_code=$request->occupation_code;
        $ocupaciones->occupation_name=$request->occupation_name;
        $ocupaciones->description=$request->description;
        $ocupaciones->save;
        return response()->json(["mensaje"=>"hola como estas"],201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Ocupaciones $ocupaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ocupaciones $ocupaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ocupaciones $ocupaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ocupaciones $ocupaciones)
    {
        //
    }
}

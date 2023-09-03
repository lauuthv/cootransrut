<?php

namespace App\Http\Controllers;

use App\Models\recorridos;
use Illuminate\Http\Request;

class RecorridosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recorridos = Recorridos::orderBy('fechaAsignacion','ASC')->get();
        return view('recorridos.index',['recorridos'=>$recorridos]);
    }
    public function persona($id)
    {
        $personas = Personas::orderBy('nombrePersona','ASC')->where('idRotacion','=',$id)->get();
        $vehiculos = Vehiculos::orderBy('idVehiculo','ASC')->where('idRotacion','=',$id)->get();
        return view('recorridos.personas', ['personas' => $personas, 'vehiculos' => $vehiculos]);
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
    public function show(recorridos $recorridos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(recorridos $recorridos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, recorridos $recorridos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(recorridos $recorridos)
    {
        //
    }
}

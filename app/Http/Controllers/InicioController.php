<?php

namespace App\Http\Controllers;

use App\Models\Inicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inicio= Inicio::find(1);

        return view('modulos.Inicio')->with('inicio',$inicio);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function DatosCreate()
    {
        return view('modulos.Mis-Datos');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function show(Inicio $inicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inicio  $inicio
     * @return \Illuminate\Http\Response
     */

    public function edit(Inicio $id)
    {
     $inicio=Inicio::find($id->id);
     return view('modulos.Editarinicio')->with('inicio',$inicio);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {

        $inicio[0]=Inicio::findOrFail($id);

        $inicio[0]->dias = $request->input('dias');
        $inicio[0]->email=$request->input('email');
        $inicio[0]->horaInicio=$request->input('horaInicio');
        $inicio[0]->horaFin=$request->input('horaFin');
        $inicio[0]->direccion=$request->input('direccion');
        $inicio[0]->telefono=$request->input('telefono');

        $inicio[0]->save();

        return redirect('Inicio')->with('actualizadoA', 'Si');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inicio $inicio)
    {
        //
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }
}

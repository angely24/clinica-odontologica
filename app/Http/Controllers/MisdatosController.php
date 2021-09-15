<?php

namespace App\Http\Controllers;

use App\Models\misdatos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class MisdatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\misdatos  $misdatos
     * @return \Illuminate\Http\Response
     */
    public function show(misdatos $misdatos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\misdatos  $misdatos
     * @return \Illuminate\Http\Response
     */
    public function edit(misdatos $misdatos)
    {
        $id = Auth::id();

        $paciente = DB::select('select * from users where id='.$id);

        return view ('modulos/Mis-Datos', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\misdatos  $misdatos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paciente[0]=User::findOrFail($id);

        $paciente[0]->name=$request->input('name');
        $paciente[0]->email=$request->input('email');

        $Contraseña=$request->input('password');
        
        if ($Contraseña >= 8) {

            $ContraseñaDB = Hash::make($Contraseña);
            $paciente[0]->password= $ContraseñaDB;

        }else{

        }
       
        $paciente[0]->documento=$request->input('documento');
        $paciente[0]->telefono=$request->input('telefono');

        $paciente[0]->save();

        return redirect('Mis-Datos/{id}')->with('actualizadoI', 'Si');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\misdatos  $misdatos
     * @return \Illuminate\Http\Response
     */
    public function destroy(misdatos $misdatos)
    {
        //
    }
}

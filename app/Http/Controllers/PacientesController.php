<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PacientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if (auth()->user()->rol != 'Administrador' && auth()->user()->rol != 'secretaria' && auth()->user()->rol != 'Doctor') {
            return redirect('Inicio');
        }
        $pacientes = DB::select('select * from users where rol= "Paciente"');
        return view('modulos.Pacientes')->with('pacientes', $pacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->rol != 'Administrador' && auth()->user()->rol != 'secretaria' && auth()->user()->rol != 'Doctor') {
            return redirect('Inicio');
        }
        return view('modulos.Crear-Paciente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = request()->validate([
            'name' => ['required'],
            'documento' => ['required'],
            'password' => ['required', 'string', 'min:3'],
            'email' => ['required', 'string', 'email', 'unique:users']

        ]);
        Pacientes::create([
            'name' => $datos['name'],
            'id_consultorio' => 0,
            'email' => $datos['email'],
            'sexo' => '',
            'documento' => $datos['documento'],
            'telefono' => '',
            'rol' => 'Paciente',
            'password' => Hash::make($datos['password'])

        ]);
        return redirect('Pacientes')->with('Agregado', 'Si');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function show(Pacientes $pacientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pacientes  $pacientes
     * @return \Illuminate\Http\Response
     */
    public function edit(Pacientes $id)
    {
        if (auth()->user()->rol != 'Administrador' && auth()->user()->rol != 'secretaria' && auth()->user()->rol != 'Doctor') {
            return redirect('Inicio');
        }
        $paciente = Pacientes::find($id->id);
        return view('modulos.Editar-Paciente')->with('paciente', $paciente);
    }

    
    public function destroy($id)
    {
        Pacientes::destroy($id);
        return redirect('Pacientes');
    }

    public function update(Request $request, Pacientes $paciente)
    {
        if ($paciente["email"] != request('email') && request('passwordN') != "") {
            $datos = request()->validate([
                'name' => ['required'],
                'documento' => ['required'],
                'password' => ['required', 'string', 'min:3'],
                'email' => ['required', 'string', 'email', 'unique:users']
            ]);
            DB::table('users')->where('id', $paciente["id"])->update([
                'name' => $datos["name"],
                'email' => $datos["email"], 'documento' => $datos["documento"], 'password' => Hash::make($datos["password"])
            ]);
        } else if ($paciente["email"] != request('email') && request('paswordN') == "") {
            $datos = request()->validate([
                'name' => ['required'],
                'documento' => ['required'],
                'password' => ['required', 'string', 'min:3'],
                'email' => ['required', 'string', 'email', 'unique:users']
            ]);
            DB::table('users')->where('id', $paciente["id"])->update([
                'name' => $datos["name"],
                'email' => $datos["email"], 'documento' => $datos["documento"], 'password' => Hash::make($datos["password"])
            ]);
        } else if ($paciente["email"] != request('email') && request('paswordN') == "") {
            $datos = request()->validate([
                'name' => ['required'],
                'documento' => ['required'],
                'password' => ['required', 'string', 'min:3'],
                'email' => ['required', 'string', 'email']
            ]);
            DB::table('users')->where('id', $paciente["id"])->update([
                'name' => $datos["name"],
                'email' => $datos["email"], 'documento' => $datos["documento"], 'password' => Hash::make($datos["password"])
            ]);
        } else {
            $datos = request()->validate([
                'name' => ['required'],
                'documento' => ['required'],
                'password' => ['required', 'string', 'min:3'],
                'email' => ['required', 'string', 'email']


            ]);
            DB::table('users')->where('id', $paciente["id"])->update([
                'name' => $datos["name"],
                'email' => $datos["email"], 'documento' => $datos["documento"], 'password' => Hash::make($datos["password"])
            ]);
        }
    

        return redirect('Pacientes')->with('actualizado', 'Si');
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Pacientes  $pacientes
         * @return \Illuminate\Http\Response
         */

    }
}

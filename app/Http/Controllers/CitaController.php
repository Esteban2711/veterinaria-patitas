<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Cliente;
use App\Models\Mascota;
use Illuminate\Http\Request;
use App\Http\Requests\CitaRequest;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        $cita= Cita::all();
        $citaDisponible = false;
        foreach ($cita as  $cita) {
            if($cita->start == $request->start )
            {
                return back()->withInput($request->all())->withErrors('No tenemos citas disponible para esa fecha');
            }
            else{
                $citaDisponible = true;
            }
        }
        if ($citaDisponible == true) {
            $cliente = Cliente::create([
                'identificacion'=> $request['identificacion'], 
                'nombre_completo'=> $request['nombre_completo'],
                'apellido_completo'=> $request['apellido_completo'],
                'email'=> $request['email'],
                'telefono'=> $request['telefono']
            ]);
    
            if($cliente){
                $mascota = Mascota::create([
                    'identificador'=> $request['identificador'], 
                    'nombre'=> $request['nombre'],
                    'tipo'=> $request['tipo'],
                    'cliente_id'=> $cliente->id
                ]);

                if ($mascota) {
                    $cita = Cita::create([
                        'start'=> $request['start'],
                        'hora'=> $request['hora'],
                        'title' =>  $cliente->nombre_completo.' '.$cliente->apellido_completo.' '.$mascota->nombre,
                        'mascota_id' => $mascota->id,
                        'cliente_id' => $cliente->id
                    ]);
                }
    
                return redirect()->route('agenda.registro')->with('estado', 'Se creo la cita Correctamente');
            }
            return back()->withInput($request->all())->withErrors('No se pudo registrar la cita');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Cita $cita)
    {
        $citas= Cita::all();

        $cita = [
            "start" => $citas?->start.' '.$citas->hora,
            "title" => $citas->title
        ];

        return response()->json($cita);
    }

    public function consultarCita(Cita $cita)
    {
        
        $cita = Cita::with(
            'clientes',
            'mascotas',
        )->get()
        ->where("identificacion", $request->identificacion)
        ->first();

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cita $cita)
    {
        //
    }


}

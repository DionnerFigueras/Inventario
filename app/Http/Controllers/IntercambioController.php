<?php

namespace App\Http\Controllers;

use App\Models\Intercambio;
use App\Models\Medicamento;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class IntercambioController extends Controller
{
    public function index(){

        $intercambios = Intercambio::all();

        return view('/Intercambios/index', ['intercambios' => $intercambios]);

    }

    public function create(){

        $medicamentos = Medicamento::get();

        return view('/Intercambios/create', compact('medicamentos'));
    }

    public function store(Request $request){

        $medicamento = Medicamento::where('nombre', '=', $request->input('intercambiar'))->get();
        
        
        $request->validate([
            'intercambiar' => ['required', Rule::notIn($request->input('intercambiado')), 'exists:medicamentos,nombre'],
            'cantidad1' => ['required', 'numeric'],
            'intercambiado' => ['required', Rule::notIn($request->input('intercambiar')), 'exists:medicamentos,nombre'],
            'cantidad2' => ['required', 'numeric']
        ]); 

        $intercambio = new Intercambio;

        $intercambio->medicamento1 = $request->input('intercambiar');
        $intercambio->cantidad1 = $request->input('cantidad1');
        $intercambio->medicamento2 = $request->input('intercambiado');
        $intercambio->cantidad2 = $request->input('cantidad2');        

        $intercambio->save();

        session()->flash('estatus', 'Intercambio agregado');

        return to_route('intercambios');
        
    }
    

    public function destroy(Intercambio $intercambio){

        $intercambio->delete();

        return to_route('intercambios')->with('estatus', 'Intercambio Eliminado');

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Intercambio;
use App\Models\Medicamento;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        $medicamento1 = Medicamento::where('nombre', '=', $request->input('ofrecido'))->get();
    
        $medicamento2 = Medicamento::where('nombre', '=', $request->input('solicitado'))->get();

        $request->validate([
            'ofrecido' => ['required', Rule::notIn($request->input('solicidato')), 'exists:medicamentos,nombre'],
            'cantidad1' => ['required', 'numeric'],
            'solicitado' => ['required', Rule::notIn($request->input('ofrecido')), 'exists:medicamentos,nombre'],
            'cantidad2' => ['required', 'numeric']
        ]); 

        $medicamentoOfrecido = Medicamento::find($medicamento1[0]->id);

        $medicamentoSolicitado = Medicamento::find($medicamento2[0]->id);

        $medicamentoOfrecido->cantidad = $medicamentoOfrecido->cantidad + $request->input('cantidad1');

        $medicamentoSolicitado->cantidad = $medicamentoSolicitado->cantidad - $request->input('cantidad2');

        $intercambio = new Intercambio;

        $intercambio->medicamento1 = $request->input('intercambiar');
        $intercambio->cantidad1 = $request->input('cantidad1');
        $intercambio->medicamento2 = $request->input('intercambiado');
        $intercambio->cantidad2 = $request->input('cantidad2');        

        $medicamentoOfrecido->save();
        $medicamentoSolicitado->save();
        $intercambio->save();

        session()->flash('estatus', 'Intercambio agregado');

        return to_route('intercambios');

    }
    

    public function destroy(Intercambio $intercambio){

        $intercambio->delete();

        return to_route('intercambios')->with('estatus', 'Intercambio Eliminado');

    }
}

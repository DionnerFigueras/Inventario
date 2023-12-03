<?php

namespace App\Http\Controllers;

use App\Models\Insumo;
use Illuminate\Http\Request;

class InsumoController extends Controller
{
    public function index(){

        $insumos = Insumo::get();

        return view('/Insumos/index', ['insumos' => $insumos]);
    }

    public function show(Insumo $insumo){
        
        return view('/Insumos/show', ['insumo' => $insumo]); 
    }

    public function create(){
        return view('/Insumos/create',['insumo' => new Insumo]);
    }

    public function store(Request $request){
        
        $request->validate([
            'nombreInsumo' => ['required'],
            'cantidadInsumo' => ['required'],
            'usoInsumo' => ['required']
        ]);

        $insumo = new Insumo;

        $insumo->nombre = $request->input('nombreInsumo');
        $insumo->cantidad = $request->input('cantidadInsumo');
        $insumo->uso = $request->input('usoInsumo');

        $insumo->save();

        session()->flash('estatus', 'Insumo agregado');

        return to_route('insumos');

    }

    public function edit(Insumo $insumo){
        return view('/Insumos/edit', ['insumo' => $insumo]);
    }

    public function update(Request $request, Insumo $insumo){

        $request->validate([
            'nombreInsumo' => ['required'],
            'cantidadInsumo' => ['required'],
            'usoInsumo' => ['required']
        ]);

        $insumo->nombre = $request->input('nombreInsumo');
        $insumo->cantidad = $request->input('cantidadInsumo');
        $insumo->uso = $request->input('usoInsumo');

        $insumo->save();

        session()->flash('estatus', 'Insumo Actualizado');

        return to_route('insumos');
    }

    public function destroy(Insumo $insumo){
        
        $insumo->delete();

        return to_route('insumos')->with('estatus', 'Insumo Eliminado');
    }
}

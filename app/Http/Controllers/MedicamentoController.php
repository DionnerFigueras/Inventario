<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicamentoController extends Controller
{
    public function index(){

        $medicamentos = Medicamento::get();

        return view('/Medicamentos/index', ['medicamentos' => $medicamentos]);
    }

    public function show(Medicamento $medicamento){

        return view('/Medicamentos/show', ['medicamento' => $medicamento]);
    }

    public function create(){

        return view('/Medicamentos/create', ['medicamento' => new Medicamento]);
    }

    public function store(Request $request){

        $request->validate([
            'nombreMedicamento' => ['required'],
            'gramosMedicamento' => ['required'],
            'cantidadMedicamento' => ['required'],
            'usoMedicamento' => ['required'],
            'fechaV' => ['required'],
        ]);

        $medicamento = new Medicamento;

        $medicamento->nombre = $request->input('nombreMedicamento');
        $medicamento->gramos = $request->input('gramosMedicamento');
        $medicamento->cantidad = $request->input('cantidadMedicamento');
        $medicamento->uso = $request->input('usoMedicamento');
        $medicamento->fechaV = $request->input('fechaV');
        $medicamento->save();
        
        session()->flash('estatus', 'Medicamento agreado');

        return to_route('medicamentos');
    }

    public function edit(Medicamento $medicamento){
        return view('/Medicamentos/edit', ['medicamento' => $medicamento]);
    }

    public function update(Request $request, Medicamento $medicamento){

        $request->validate([
            'nombreMedicamento' => ['required'],
            'gramosMedicamento' => ['required'],
            'cantidadMedicamento' => ['required'],
            'usoMedicamento' => ['required'],
            'fechaV' => ['required'],
        ]);


        $medicamento->nombre = $request->input('nombreMedicamento');
        $medicamento->gramos = $request->input('gramosMedicamento');
        $medicamento->cantidad = $request->input('cantidadMedicamento');
        $medicamento->uso = $request->input('usoMedicamento');
        $medicamento->fechaV = $request->input('fechaV');

        $medicamento->save();

        session()->flash('estatus', 'Medicamento Actulizado');

        return to_route('medicamentos');
    }

    public function destroy(Medicamento $medicamento){
        
        $medicamento->delete();

        return to_route('medicamentos')->with('estatus', 'Medicamento eliminado');

    }
}

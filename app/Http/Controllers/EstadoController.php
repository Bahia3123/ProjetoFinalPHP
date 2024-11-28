<?php

namespace App\Http\Controllers;
use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function criar(Request $request) {
        $estado = new Estado;
        $estado->name = $request->name;
        $estado->cidade = $request->cidade;

        $estado->save();
        return redirect('/listar_estados');
    }

    public function listar() {
        $estados = \App\Models\Estado::with('cidade')->get();
        return view("estados", ["estados"=>$estados]);
    }

    public function formCriarEstado() {
        $cidades = \App\Models\Cidade::all(); // Busca todos os professores
        return view('cadastro_estado', ['cidades' => $cidades]); // Envia para a view
    }
    

    public function deletar($id) {
        $estado = Estado::find($id);
        if ($estado) {
            $estado->delete();
        }
        return redirect('/listar_estados');
    }
 }
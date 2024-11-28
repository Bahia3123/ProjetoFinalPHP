<?php

namespace App\Http\Controllers;
use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function criar(Request $request) {
        $cidade = new Cidade;
        $cidade->name = $request->name;
        $cidade->ddd = $request->ddd;
        

        $cidade->save();
        return redirect('/lista_cidades');
    }

    public function listar() {
        $cidades = Cidade::all();

        return view("cidades", ["cidades"=>$cidades]);
    }

    public function formCriarCidade() {
        return view("cadastro_Cidade");
    }

    public function deletar($id) {
        $cidade = new Cidade;
        $cidade->find($id)->delete();
        return redirect('/lista_cidades');
    }


}

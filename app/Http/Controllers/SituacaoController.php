<?php

namespace App\Http\Controllers;

use App\Models\Situacao;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SituacaoController extends Controller
{
    public function index(){
        $situacoes = Situacao::all();
        return view('situacao.index',compact('situacoes'));
    }

    public function create(){
        return view('situacao.create');
    }

    public function store(Request $request){
        $situacoes = Situacao::create(['descricao'=>$request['descricao']]);
        return redirect()->route('situacao.index');
    }

    public function delete(int $id){
        $situacao = Situacao::Find($id);

        if (DB::table('chamado')->where('situacao_id', $id)->count() > 0)
        {
            $messageError = 'Existe chamado cadastrado com esta situação, favor excluí-lo primeiro.';
            $situacoes = Situacao::all();
            return view('situacao.index', compact(['messageError', 'situacoes']));
        }

        if ($situacao)
            $situacao->delete();
            
        return redirect()->route('situacao.index');
    }
}

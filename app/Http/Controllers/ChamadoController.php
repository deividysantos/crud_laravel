<?php

namespace App\Http\Controllers;

use App\Models\Chamado;
use App\Models\Setor;
use App\Models\Situacao;
use Illuminate\Http\Request;

class ChamadoController extends Controller
{
    public function index(){
        $chamados = Chamado::all();
        return view('chamado.index',compact('chamados'));
    }

    public function create(){
        if (Setor::count() == 0){
            return redirect()->route('setor.novo');
        }

        if (Situacao::count() == 0){
            return redirect()->route('situacao.novo');
        }

        $setores = Setor::all();
        $situacoes = Situacao::all();
        return view('chamado.create', compact(['setores', 'situacoes']));
    }

    public function edit(int $id){
        $chamado = Chamado::Find($id);
        $setores = Setor::all();
        $situacoes = Situacao::all();
        return view('chamado.edit', compact(['chamado', 'setores', 'situacoes']));
    }

    public function store(Request $request){
        $payload = [
            'setor_id'=>$request['setorId'],
            'situacao_id'=>$request['situacaoId'],
            'titulo'=>$request['titulo'],
            'descricao'=>$request['descricao'],
            'dataTermino'=>$request['dataTermino'],           
        ];

        if (isset($request['chamadoId']))
        {
            $chamado = Chamado::Find($request['chamadoId']);
            $chamado->update($payload);
        } else
        {
            Chamado::create($payload);
        }
                
        return redirect()->route('chamado.index');
    }

    public function delete(int $id){
        $chamado = Chamado::Find($id);

        if ($chamado)
            $chamado->delete();
            
        return redirect()->route('chamado.index');
    }

    public function view(int $id){
        $chamado = Chamado::Find($id);

        if (! $chamado) 
            return redirect()->route('chamado.index');

        $setor = Setor::Find($chamado->setor_id)->descricao;
        $situacao = Situacao::Find($chamado->situacao_id)->descricao;
    
        return view('chamado.view', compact(['chamado', 'setor', 'situacao']));
    }
}

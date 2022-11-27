<?php

namespace App\Http\Controllers;

use App\Models\Setor;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SetorController extends Controller
{
    public function index(){
        $setores = Setor::all();
        return view('setor.index',compact('setores'));
    }

    public function create(){
        return view('setor.create');
    }

    public function store(Request $request){
        $setores = Setor::create(['descricao'=>$request['descricao']]);
        echo $setores;
        return redirect()->route('setor.index');
    }

    public function delete(int $id){
        $setor = Setor::Find($id);
        
        if (DB::table('chamado')->where('setor_id', $id)->count() > 0)
        {
            $messageError = 'Existe chamado cadastrado com este setor, favor excluí-lo primeiro.';
            $setores = Setor::all();
            return view('setor.index', compact(['messageError', 'setores']));
        }

        if ($setor)
            $setor->delete();
            
        return redirect()->route('setor.index');
    }
}

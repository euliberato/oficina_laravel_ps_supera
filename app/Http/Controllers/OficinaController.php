<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Carro;
use App\Models\User;

class OficinaController extends Controller
{
    public function index(){
        return view('index');
    }

    public function veiculos(){
        $carros = Carro::all();
        return view('oficina.veiculos', ['carros' => $carros]);
    }

    public function create(){
        return view('oficina.revisao');
    }

    public function store(Request $request){

        $carro = new Carro;
        $carro->marca = $request->marca;
        $carro->modelo = $request->modelo;
        $carro->versao = $request->versao;
        $carro->placa = $request->placa;
        $carro->servicos = $request->servicos;
        
        $user = auth()->user();
        $carro->user_id = $user->id;

        $carro->save();

        return redirect('/veiculos')->with('msg', 'Pedido de orçamento concluído, entraremos em contato!');
    }

    public function show($id){
        
        $carro = Carro::findOrFail($id);

        $proprietario = User::where('id', $carro->user_id)->first()->toArray();

        return view('oficina.info', ['carro' => $carro, 'proprietario' => $proprietario]);

    }

    public function dashboard() {
        
        $user = auth()->user();
        $carros = $user->carros;

        return view('oficina.veiculos', ['carros' => $carros]);
    }

    public function destroy($id){

        $user = auth()->user();
        $carro = Carro::findOrFail($id);

        if($user->id != $carro->user_id){
            return redirect('/veiculos')->with('msg', 'Não é permitido excluir dados de outros usuários!');
        }

        $carro->delete();
        return redirect('/veiculos')->with('msg', 'Revisão cancelada com sucesso!');
        
    }

    public function edit($id){

        $user = auth()->user();

        $carro = Carro::findOrFail($id);

        if($user->id != $carro->user_id){
            return redirect('/veiculos')->with('msg', 'Não é permitido alterar dados de outros usuários!');
        }
        
        return view('oficina.editar', ['carro' => $carro]);

    }

    public function update(Request $request){
        
        Carro::findOrFail($request->id)->update($request->all());
        
        return redirect('/veiculos')->with('msg', 'Pedido de revisão atualizada com sucesso!');
    }

}

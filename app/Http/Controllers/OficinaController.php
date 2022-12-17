<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Carro;

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

        //dd($request->all());
        //$carro = new Carro::create([]);

        $carro = new Carro;
        $carro->marca = $request->marca;
        $carro->modelo = $request->modelo;
        $carro->versao = $request->versao;
        $carro->placa = $request->placa;
        $carro->save();

        return redirect('/')->with('msg', 'Formulário concluído, entraremos em contato!');
    }

}

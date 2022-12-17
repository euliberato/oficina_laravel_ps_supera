@extends('layouts.template')

@section('title', 'Relatório')

@section('content')

<h1>Relatório</h1>

<div class="report-screen">
    <div class="report-text">
        <div class="report-proprietario">
            <h1>Proprietário: </h1>
            <p>{{ $proprietario['name'] }}</p>
        </div>
        <div class="report-marca">
            <h1>Marca: </h1>
            <p>{{ $carro->marca }}</p>
        </div>
        <div class="report-modelo">
            <h1>Modelo: </h1>
            <p>{{ $carro->modelo }}</p>
        </div>
        <div class="report-versao">
            <h1>Versão: </h1>
            <p>{{ $carro->versao }}</p>
        </div>
        <div class="report-placa">
            <h1>Placa: </h1>
            <p>{{ $carro->placa }}</p>
        </div>
        <div class="report-servicos">
            <h1>Serviços: </h1>
            <ul>
                @foreach($carro->servicos as $servico)
                    <li>{{ $servico }}</li>
                @endforeach
            </ul>
        </div>
        <div class="report-menu">
            
            <a href="/veiculos/editar/{{ $carro->id }}" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i> Editar</a>

            <form action="/veiculos/{{ $carro->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Cancelar</button>
            </form>
        </div>

    </div>
</div>
       
@endsection
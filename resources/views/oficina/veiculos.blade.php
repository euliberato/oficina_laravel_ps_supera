@extends('layouts.template')

@section('title', 'Veiculos')

@section('content')

<div class="screen">
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Meus Veículos:</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if(is_countable($carros) && count($carros) > 0)

        <form action="/veiculos/busca" method="POST">
            @csrf
            <span>Filtro:</span>
                <select name="filtro" class="filter">
                    <option value="todos">Todos</option>
                    <option value="semana">Últimos 7 dias</option>
                </select>
            <button type="submit">Filtrar</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Versão</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Menu</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carros as $carro)
                    <tr>
                        <td>{{ $carro->marca }}</td>
                        <td>{{ $carro->modelo }}</td>
                        <td>{{ $carro->versao }}</td>
                        <td>{{ $carro->placa }}</td>
                        <td>
                            <a href="/veiculos/{{ $carro->id }}"><i class="fa-solid fa-circle-info"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <i class="fa-solid fa-circle-exclamation"></i>
        <p>Você não tem nenhum veículo para manutenção, deseja <a href="/veiculos/revisao">marcar agora</a>?</p>
        @endif
    </div>
</div>

@endsection
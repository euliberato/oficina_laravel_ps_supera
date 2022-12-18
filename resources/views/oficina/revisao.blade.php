@extends('layouts.template')

@section('title', 'Revisão')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3 container-fluid">
    <h1>Formulário</h1>
    <p>Preencha os dados abaixo para solicitar seu orçamento.</p>
    <form action="/veiculos" method="POST">
        @csrf
            <div class="form-group">
                <label for="title">Marca:</label>
                <input type="text" class="form-control" id="marca" title="marca" name="marca" placeholder="Marca do veículo" maxlength="10">
            </div>
            <div class="form-group">
                <label for="title">Modelo:</label>
                <input type="text" class="form-control" id="modelo" title="modelo" name="modelo" placeholder="Modelo do veículo" maxlength="5">
            </div>
            <div class="form-group">
                <label for="title">Versão:</label>
                <input type="number" name="versao" id="versao" placeholder="Versão, exemplo: 3.0" maxlength="1" maxlength="2">
            </div>
            <div class="form-group">
                <label for="title">Placa:</label>
                <input type="text" class="form-control" id="placa" title="placa" name="placa" placeholder="Placa do veículo" maxlength="6">
            </div>
            <div class="form-group">
                <label for="title">Serviços:</label>
            </div>
            <div class="form-group">
                <input type="checkbox" name="servicos[]" value="Manutencao da Embreagem"> Manutenção da Embreagem
            </div>
            <div class="form-group">
                <input type="checkbox" name="servicos[]" value="Revisao dos Freios"> Revisão dos Freios
            </div>
            <div class="form-group">
                <input type="checkbox" name="servicos[]" value="Troca de oleo do motor"> Troca de óleo do motor
            </div>
            <div class="form-group">
                <input type="checkbox" name="servicos[]" value="Alinhamento"> Alinhamento
            </div>
            <input type="submit" value="Solicitar Orçamento" class="btn btn-primary">
    </form>
</div>

@endsection
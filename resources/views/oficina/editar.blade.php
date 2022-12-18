@extends('layouts.template')

@section('title', 'Editar Pedido')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3 container-fluid">
    <h1>Editar</h1>
    <p>Preencha os dados abaixo para editar seu orçamento.</p>
    <form action="/veiculos/atualizar/{{ $carro->id }}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="title">Marca:</label>
                <input type="text" class="form-control" id="marca" title="marca" name="marca" placeholder="Marca do veículo" value="{{ $carro->marca }}" maxlength="10">
            </div>
            <div class="form-group">
                <label for="title">Modelo:</label>
                <input type="text" class="form-control" id="modelo" title="modelo" name="modelo" placeholder="Modelo do veículo" value="{{ $carro->modelo }}" maxlength="5">
            </div>
            <div class="form-group">
                <label for="title">Versão:</label>
                <input type="number" name="versao" id="versao" placeholder="Versão, exemplo: 3.0" value="{{ $carro->versao }}" maxlength="1">
            </div>
            <div class="form-group">
                <label for="title">Placa:</label>
                <input type="text" class="form-control" id="placa" title="placa" name="placa" placeholder="Placa do veículo" value="{{ $carro->placa }}" maxlength="6">
            </div>
            <div class="form-groups">
                <div class="form-group">
                    <label for="title">Serviços:</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="servicos[]" value="Manutencao da Embreagem" <?php if (in_array("Manutencao da Embreagem", $carro->servicos)) { echo "checked"; } ?>> Manutenção da Embreagem
                </div>
                <div class="form-group">
                    <input type="checkbox" name="servicos[]" value="Revisao dos Freios"  <?php if (in_array("Revisao dos Freios", $carro->servicos)) { echo "checked"; } ?>> Revisão dos Freios
                </div>
                <div class="form-group">
                    <input type="checkbox" name="servicos[]" value="Troca de oleo do motor"  <?php if (in_array("Troca de oleo do motor", $carro->servicos)) { echo "checked"; } ?>> Troca de óleo do motor
                </div>
                <div class="form-group">
                    <input type="checkbox" name="servicos[]" value="Alinhamento"  <?php if (in_array("Alinhamento", $carro->servicos)) { echo "checked"; } ?>> Alinhamento
                </div>
            </div>
            <input type="submit" value="Concluir" class="btn btn-primary">

    </form>
</div>

@endsection
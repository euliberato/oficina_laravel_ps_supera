@extends('layouts.template')

@section('title', 'Oficina')

@section('content')

<div class="container-fluid">
    <h1>Confiança e Segurança | Since 1970</h1>
    <img src="img/banner.jpg" alt="Carros" class="img-fluid">
    <div>
        <h1>Principais serviços:</h1>
    </div>
    <div class="infos">
        <div class="card">
            <div class="title">Manutenção da Embreagem</div>
            <div class="text"><p>Esse conjunto de itens sofre maior desgaste por ser acionado com frequência, isso acontece geralmente quando se tem uma grande rodagem, principalmente em perímetro urbano, onde o trânsito é mais lento e exige mais do sistema de embreagem.</p></div>
        </div>
        <div class="card">
            <div class="title">Revisão dos Freios</div>
            <div class="text"><p>São inúmeros os componentes que compõem o sistema de frenagem do veículo como exemplo pastilhas, discos de freio, tambor entre outros. Regularmente tendem a ser feitas revisões nestes itens pois são de uso constante e consequentemente sofrem desgaste, como são de extrema importância para a segurança é inevitável o serviço de revisão e manutenção.</p></div>
        </div>
        <div class="card">
            <div class="title">Troca de óleo do motor</div>
            <div class="text"><p>A troca de óleo do motor é um dos serviços mais frequentes dentro da oficina mecânica e, mesmo sendo um procedimento simples, é importantíssimo para manter o bom funcionamento do veículo. Além do lubrificante é realizada a troca do filtro de óleo, portanto são itens e um serviço que não podem faltar de jeito nenhum em sua oficina mecânica.</p></div>
        </div>
        <div class="card">
            <div class="title">Alinhamento</div>
            <div class="text"><p>O alinhamento e balanceamento tendem a ser procedimentos periódicos, pois as estradas não apresentam boas condições de tráfego e assim vão desalinhando e causando desgastes nos componentes da suspensão. Realizando também a troca de pneus ou rodízio dos mesmos, o alinhamento e balanceamento são necessários para manter a dirigibilidade e evitar desgastes irregulares dos pneus.</p></div>
        </div>
    </div>
    <p class="info">E muitos mais, <a href="/veiculos/revisao">entre no sistema</a> e solicite seu orçamento.</p>
    <img src="img/banner2.jpg" alt="Carros" class="img-fluid">
</div>

@endsection
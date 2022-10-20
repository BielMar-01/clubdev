@extends('layouts.app')
@section('content')
<section class="produtos">
    <div class="container">
        <h2 class="produtos__titulo">Produtos</h2>
        <div class="produtos__itens">
            @foreach($produtos as $produto)
            <div class="produtos__itens__item"><img src="{{asset('img/produtos/'.$produto->img)}}" alt="">
                <h4>{{$produto->nome}}</h4>
                <h3>{{ 'R$ '.number_format($produto->preco, 2, ',', '.') }}</h3>
                <p>{{$produto->desc}}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

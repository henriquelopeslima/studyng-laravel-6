@extends('admin.layouts.app')

@section('title','Gestao de produtos')

@section('content')
    {{-- {{ $teste }}     --}}

    <h1>Exibindo os produtos</h1>

    <a href="{{route('products.create')}}">Cadastrar</a>
  
    @component('admin.components.card')
        @slot('title')
            Titulo com slot
        @endslot
        @slot('slot')
            Slot passado por slot
        @endslot
    @endcomponent

    <hr>

    @include(' admin.includes.alerts',['content'=>'Alerta de precos de produtos'])

    <hr>

    @if(isset($products))
        @foreach ($products as $product)
            <p class="@if($loop->last) last @endif">{{ $product }}</p>
        @endforeach
    @endif

    @forelse ($products as $product)
        <p class="@if($loop->first) last @endif">{{ $product }}</p>
    @empty
        <p>Nao temos produtos cadastrados...</p>
    @endforelse

    <hr>
    
    @if ($teste === 123)
        Eh igual!
    @else
        Eh diferente!
    @endif

    @unless ($teste === '123')
        Ramo ver
    @else
        Roparme
    @endunless

    @isset($teste2)
       <h1> {{ $teste2 }} </h1>
    @endisset

    @empty($teste3)
        <p>Vazio...</p>
    @endempty

    @auth
        <p>Autenticado</p>
    @else
        <p>Nao esta autenticado</p>
    @endauth

    @guest
        <p>Nao esta autenticado</p>    
    @endguest

    @switch($teste)
        @case(1)
            Igual a 1
            @break
        @case(2)
            Igual a 2
            @break
        @default
            Quem sabe ?
    @endswitch

@endsection

@push('styles')    
    <style>
        .last {background: #CCC;}
    </style>
@endpush

@push('scripts')
    <script>
        document.body.style.background = '#efefef';
    </script>
@endpush
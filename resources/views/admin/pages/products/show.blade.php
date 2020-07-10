@extends('admin.layouts.app')

@section('title',"Detalhes de produto {$product->name}")

@section('content')

<h1>Produto {{$product->name}}</h1>
<a href="{{route('products.index')}}"><<</a>
<ul>
    <li><strong>Nome: </strong>{{$product->name}}</li>
    <li><strong>Nome: </strong>{{$product->price}}</li>
    <li><strong>Nome: </strong>{{$product->description}}</li>
</ul>

@endsection

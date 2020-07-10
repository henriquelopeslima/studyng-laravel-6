@extends('admin.layouts.app')

@section('title', "Editando o produto {{$product->name}}")

@section('content')

    <h1>Editar produto {{ $product->name }}</h1>
    <form action="{{route('products.update',$product->id)}}" method="post">
        @method('PUT')
        @include('admin.pages.products._patials.form')
    </form>

@endsection

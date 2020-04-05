@extends('admin.layouts.app')

@section('content')
  
    <h1>Cadastrar novo produto</h1>
    <form action="{{route('products.store')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="name" placeholder="Nome:">
        <input type="text" name="description" placeholder="Descricao:">
        <button type="submit">Enviar</button>
    </form>

@endsection
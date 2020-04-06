@extends('admin.layouts.app')

@section('content')
  
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <h1>Cadastrar novo produto</h1>
    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="name" placeholder="Nome:" value="{{old('name')}}">
        <input type="text" name="description" placeholder="Descricao:" value="{{old('description')}}">
        <input type="file" name="photo" id="">
        <button type="submit">Enviar</button>
    </form>

@endsection
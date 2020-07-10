@extends('admin.layouts.app')

@section('title', "Cadastrar novo produto")

@section('content')

    <h1>Cadastrar novo produto</h1>


    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data" class="form">
        @include('admin.pages.products._patials.form')
    </form>

@endsection

@extends('admin.layouts.app')

@section('title',"Detalhes de produto {$product->name}")

@section('content')

<h1>Produto {{$product->name}}</h1>
<a href="{{route('products.index')}}"><<</a>
<ul>
    <li><strong>Nome: </strong>{{$product->name}}</li>
    <li><strong>Preço: </strong>{{$product->price}}</li>
    <li><strong>Detalhes: </strong>{{$product->description}}</li>
    @if($product->image)
        <li><img src="{{url("storage/{$product->image}")}}" alt="{{$product->image}}" style="max-width: 200px;"></li>
    @endif
</ul>

<form action="{{ route('products.destroy', $product->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Deletar o produto: {{$product->name}}</button>
</form>

@endsection

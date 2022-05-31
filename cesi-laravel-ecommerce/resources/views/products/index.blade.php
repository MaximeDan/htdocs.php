@extends('layouts.app')

@section('title', 'Liste des produits')

@section('content')
    <h1>Liste des produits</h1>

    @foreach($products as $product)
        <strong>{{ $product->name }}</strong>
        <p>{{ $product->price / 100 }} €</p>
        <a href="{{ route('products.show', ['product' => $product]) }}">Voir le produit</a>

        <a href="{{ route('products.edit', ['product' => $product]) }}">Editer le produit</a>

        <form action="{{ route('products.destroy', ['product' => $product]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Supprimer le produit</button>
        </form>
        <hr>
    @endforeach
@endsection

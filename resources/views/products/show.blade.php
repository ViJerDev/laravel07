@extends('layouts.start')

@section('title', 'Show: '.$product->name)

@section('content')
    <a href="{{ route('products.index') }}" type="button" class="btn btn-secondary">Back to products</a>

    <div class="card mt-3" style="width: 30rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h2 class="card-title">{{ $product->name }}</h2>
            <h5 class="card-title">${{ $product->price }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <p class="card-text mt-5">Created: {{ $product->created_at->format('d/m/y h:i:s') }}</p>
            <p class="card-text">Updated: {{ $product->updated_at->format('d/m/y h:i:s') }}</p>
            <form method="POST" action="{{ route('products.destroy', $product) }}">
                <a href="{{ route('products.edit', $product) }}" type="button" class="btn btn-warning">Edit...</a>
                @csrf
                @method('DELETE')
                <butt class="btn btn-danger" type="submit">Delete</butt>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.start')

@section('title', 'Products')

@section('content')
    <a class="btn btn-primary" role="button" href="{{ route('products.create') }}">Create product</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>
                <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
            </td>
            <td>${{ $product->price }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <form method="POST" action="{{ route('products.destroy', $product) }}">
                    <a href="{{ route('products.edit', $product) }}" type="button" class="btn btn-warning">Edit...</a>
                    @csrf
                    @method('DELETE')
                    <butt class="btn btn-danger" type="submit">Delete</butt>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@extends('layouts.start')

@section('title', isset($product) ? 'Update: '.$product->name : 'Create product')

@section('content')
    <a href="{{ route('products.index') }}" type="button" class="btn btn-secondary">Back to products</a>
    <form method="POST"
          @if(isset($product))
              action="{{route('products.update', $product)}}"
          @else
              action="{{route('products.store')}}"
            @endif>
        @if(isset($product))
            @method('PUT')
        @endif
            @csrf
        <div class="mb-3">
            <label class="form-label mt-3">Name</label>
            <input type="text" name="name" class="form-control"
                value="{{ isset($product) ? $product->name : null }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control"
                   value="{{ isset($product) ? $product->price : null }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <input class="form-control" name="description" type="text"
                   value="{{ isset($product) ? $product->description : null }}">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="status" value="1">
            <label class="form-check-label">Status</label>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection

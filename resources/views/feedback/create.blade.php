@extends('layouts.start')

@section('title', 'Create feedback')

@section('content')

    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
        </div>
    @endforeach

    <form method="POST" action="{{route('feedback.store')}}">
        @csrf
        <div class="mb-3">
            <label class="form-label mt-3">Theme</label>
            <input type="text" name="theme" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" type="text"> </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>

@endsection

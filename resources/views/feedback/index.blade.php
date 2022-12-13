@extends('layouts.start')

@section('title', 'Send feedback')

@section('content')

    <a href="{{ route('feedback.create') }}" type="button" class="btn btn-secondary">Send feedback</a>

@endsection

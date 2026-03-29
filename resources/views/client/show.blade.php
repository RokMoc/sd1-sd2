@extends('layouts.app')
@section('content')
    <h1>{{ $conference['title'] }}</h1>

    <p><strong>Description:</strong> {{ $conference['description'] }}</p>
    <p><strong>Speakers:</strong> {{ $conference['speakers'] }}</p>
    <p><strong>Date:</strong> {{ $conference['date'] }}</p>
    <p><strong>Time:</strong> {{ $conference['time'] }}</p>
    <p><strong>Address:</strong> {{ $conference['address'] }}</p>

    <a href="{{ route('client.conferences.index') }}">Back to list</a>
@endsection
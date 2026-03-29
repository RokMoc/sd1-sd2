@extends('layouts.app')

@section('content')
    <h1>Client Conferences</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @foreach($conferences as $conference)
        <div style="margin-bottom: 20px; border: 1px solid #ccc; padding: 10px;">
            <h3>{{ $conference['title'] }}</h3>
            <p>{{ $conference['date'] }} {{ $conference['time'] }}</p>
            <p>{{ $conference['address'] }}</p>

            <a href="{{ route('client.conferences.show', $conference['id']) }}">View</a>

            <form action="{{ route('client.conferences.register', $conference['id']) }}" method="POST" style="margin-top: 10px;">
                @csrf
                <button type="submit">Register</button>
            </form>
        </div>
    @endforeach
@endsection
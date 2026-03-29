@extends('layouts.app')

@section('content')
    <h1>Employee Conferences</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @foreach($conferences as $conference)
        <div style="margin-bottom: 20px; border: 1px solid #ccc; padding: 10px;">
            <h3>{{ $conference['title'] }}</h3>
            <p>{{ $conference['date'] }} {{ $conference['time'] }}</p>
            <p>{{ $conference['address'] }}</p>

            <a href="{{ route('employee.conferences.show', $conference['id']) }}">View</a>
        </div>
    @endforeach
@endsection
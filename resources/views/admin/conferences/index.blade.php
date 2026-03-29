@extends('layouts.app')

@section('content')
    <h1>Conferences</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p>{{ session('error') }}</p>
    @endif

    <a href="{{ route('admin.conferences.create') }}">Create Conference</a>

    @foreach($conferences as $conference)
        <div style="margin-bottom: 15px; border: 1px solid #ccc; padding: 10px;">
            <p><strong>{{ $conference['title'] }}</strong></p>
            <p>{{ $conference['date'] }} {{ $conference['time'] }}</p>
            <p>{{ $conference['address'] }}</p>

            <a href="{{ route('admin.conferences.edit', $conference['id']) }}">Edit</a>

            <form action="{{ route('admin.conferences.destroy', $conference['id']) }}" method="POST" style="margin-top: 10px;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
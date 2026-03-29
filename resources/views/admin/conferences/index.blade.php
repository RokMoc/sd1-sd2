@extends('layouts.app')

@section('content')
    <h1>Conferences</h1>

    <a href="{{ route('admin.conferences.create') }}">Create Conference</a>

    @foreach($conferences as $conference)
        <div style="margin-bottom: 15px; border: 1px solid #ccc; padding: 10px;">
            <p><strong>{{ $conference['title'] }}</strong></p>
            <p>{{ $conference['date'] }}</p>

            <a href="{{ route('admin.conferences.edit', $conference['id']) }}">Edit</a>
        </div>
    @endforeach
@endsection
@extends('layouts.app')

@section('content')
    <h1>Users</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @foreach($users as $user)
        <div style="margin-bottom: 15px; border: 1px solid #ccc; padding: 10px;">
            <p><strong>{{ $user['first_name'] }} {{ $user['last_name'] }}</strong></p>
            <p>{{ $user['email'] }}</p>

            <a href="{{ route('admin.users.edit', $user['id']) }}">Edit</a>
        </div>
    @endforeach
@endsection
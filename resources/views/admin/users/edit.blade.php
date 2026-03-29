@extends('layouts.app')

@section('content')
    <h1>Edit User</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('admin.users.update', $user['id']) }}" method="POST">
        @csrf

        <div>
            <label>First Name</label><br>
            <input type="text" name="first_name" value="{{ old('first_name', $user['first_name']) }}">
            @error('first_name')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div>
            <label>Last Name</label><br>
            <input type="text" name="last_name" value="{{ old('last_name', $user['last_name']) }}">
            @error('last_name')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div>
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email', $user['email']) }}">
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <br>

        <button type="submit">Save</button>
    </form>
@endsection
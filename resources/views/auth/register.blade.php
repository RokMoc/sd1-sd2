@extends('layouts.app')

@section('content')
    <h2>Register</h2>

    <form method="POST" action="{{ route('register.submit') }}">
        @csrf

        <div>
            <label>First Name</label><br>
            <input type="text" name="first_name" value="{{ old('first_name') }}">
            @error('first_name')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div>
            <label>Last Name</label><br>
            <input type="text" name="last_name" value="{{ old('last_name') }}">
            @error('last_name')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div>
            <label>Email</label><br>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div>
            <label>Password</label><br>
            <input type="password" name="password">
            @error('password')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <br>

        <div>
            <label>Confirm Password</label><br>
            <input type="password" name="password_confirmation">
        </div>

        <br>

        <button type="submit">Register</button>
    </form>
@endsection
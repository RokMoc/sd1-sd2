@extends('layouts.app')

@section('content')
    <h2>Login</h2>

    <form method="POST" action="{{ route('login.submit') }}">
        @csrf

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

        <button type="submit">Login</button>
    </form>
@endsection
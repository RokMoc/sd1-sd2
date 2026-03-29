@extends('layouts.app')

@section('content')
    <h1>Admin Panel</h1>

    <ul>
        <li>
            <a href="{{ route('admin.users.index') }}">Manage Users</a>
        </li>
        <li>
            <a href="{{ route('admin.conferences.index') }}">Manage Conferences</a>
        </li>
    </ul>
@endsection
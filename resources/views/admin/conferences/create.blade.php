@extends('layouts.app')

@section('content')
    <h1>Create Conference</h1>

    <form action="{{ route('admin.conferences.store') }}" method="POST">
        @csrf

        @include('admin.conferences.form')

        <button type="submit">Create</button>
    </form>
@endsection
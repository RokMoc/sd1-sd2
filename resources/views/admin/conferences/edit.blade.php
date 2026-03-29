@extends('layouts.app')

@section('content')
    <h1>Edit Conference</h1>

    <form action="{{ route('admin.conferences.update', $conference['id']) }}" method="POST">
        @csrf

        @include('admin.conferences.form')

        <button type="submit">Save</button>
    </form>
@endsection
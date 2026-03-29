@extends('layouts.app')

@section('content')
<h1>Home Page</h1>

<p>Rokas Rokas</p>
<p>Group</p>
<h1>{{ __('messages.home_title') }}</h1>

<p>{{ __('messages.student_name') }}: Name Surname</p>
<p>{{ __('messages.student_group') }}: PI-23</p>

@endsection
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.system_title') }}</title>
</head>
<body>

<nav>
    <a href="/">Home</a>

    @auth
        @if(auth()->user()->hasRole('client'))
            <a href="{{ route('client.conferences.index') }}">Client</a>
        @endif

        @if(auth()->user()->hasRole('employee'))
            <a href="{{ route('employee.conferences.index') }}">Employee</a>
        @endif

        @if(auth()->user()->hasRole('admin'))
            <a href="{{ route('admin.index') }}">Admin</a>
        @endif
    @endauth

    @guest
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @endguest

    @auth
        <span style="margin-left:20px;">
            {{ __('messages.current_user') }}:
            {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
        </span>

        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit">{{ __('messages.logout') }}</button>
        </form>
    @endauth
</nav>

<hr>

<div>
    @yield('content')
</div>

</body>
</html>
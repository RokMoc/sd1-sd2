<!DOCTYPE html>
<html>
<head>
    <title>{{ __('messages.system_title') }}</title>

<nav>
    <a href="/">Home</a>
    <a href="/client/conferences">Client</a>
    <a href="/employee/conferences">Employee</a>
    <a href="/admin">Admin</a>

    <span>
        Rokas Rokas
    </span>

    <button disabled>{{ __('Logout') }}</button>
</nav>
</head>
<body>

<hr>

<div>
    @yield('content')
</div>

</body>
</html>
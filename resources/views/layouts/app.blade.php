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
        {{ __('messages.current_user') }}: John Doe
    </span>

    <button disabled>{{ __('messages.logout') }}</button>
</nav>
</head>
<body>

<nav>
    <a href="/">Home</a>
    <a href="/client/conferences">Client</a>
    <a href="/employee/conferences">Employee</a>
    <a href="/admin">Admin</a>

    <span style="margin-left:20px;">
        User: Rokas Rokas
    </span>

    <button disabled>Logout</button>
</nav>

<hr>

<div>
    @yield('content')
</div>

</body>
</html>
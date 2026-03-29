<!DOCTYPE html>
<html>
<head>
    <title>SD1</title>
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
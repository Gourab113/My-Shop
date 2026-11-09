<html>

<head></head>

<body>
    <header>
        <button><a href="{{ route('home') }}">Home</a></button>

        <button><a href="{{ route('show.login') }}">Login</a></button>
        <button><a href="{{ route('show.register') }}">Register</a></button>

        <form action="{{ route('logout') }}" method="POST" style="display: inline-block">
            @csrf
            <button type="submit">Logout</button>
        </form>

    </header>

    <div>

        {{ $slot }}

    </div>
</body>

</html>

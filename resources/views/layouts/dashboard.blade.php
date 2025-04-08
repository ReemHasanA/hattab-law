
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    @yield('style')
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <img id="LawLogo" src="{{ asset('img/homePage/logo.png') }}" alt="">
        <h2>Al Hattab Law Firm</h2>
        <ul>
            <li><a href="{{ route('admin.board') }}">Dashboard</a></li>
            <li><a href="{{ route('practices.create') }}">Practices</a></li>
            <li><a href="{{ route('team.create') }}">Our Team</a></li>
            <li><a href="{{ route('contact.index') }}">Contact</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
    </div>

    <main>
        @yield('body')
    </main>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Al Hattab Law Firm</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" href="{{asset('home/css/board.css')}}">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <img id="LawLogo" src="{{ asset('img/homePage/lawLogo.png') }}" alt="Law Firm Logo">
        <h2>Al Hattab Law Firm</h2>
        <ul>
            <li class="active"><a href="{{ route('admin.board') }}">Dashboard</a></li>
            <li><a href="{{ route('practices.create') }}">Practices</a></li>
            <li><a href="{{ route('team.create') }}">Our Team</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <h1>Admin Dashboard</h1>
        </div>

        <!-- Cards -->
        <div class="cards">
            <a href="{{ route('admin.board') }}" class="card">
                <h3>Dashboard Overview</h3>
                <p>Manage your data and activity.</p>
            </a>
            <a href="{{ route('practices.create') }}" class="card">
                <h3>Manage Practices</h3>
                <p>Add or Edit any of the practices area.</p>
            </a>
            <a href="{{ route('team.create') }}" class="card">
                <h3>Manage Team Members</h3>
                <p>View and edit team member details.</p>
            </a>
        </div>

        <!-- Footer -->
        <footer>
            <p>&copy; 2025 Thirty Six 36. All Rights Reserved.</p>
        </footer>
    </div>
</body>
</html>

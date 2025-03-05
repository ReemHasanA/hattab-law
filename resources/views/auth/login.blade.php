<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Hattab Law Firm</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: url("{{ asset('images/law-bg.jpg') }}") no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 20px;
        }

        /* Login Box */
        .login-container {
            max-width: 420px;
            width: 100%;
            padding: 40px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            text-align: center;
            backdrop-filter: blur(10px);
        }

        /* Logo */
        .logo {
            width: 160px;
            margin-bottom: 15px;
        }

        /* Header */
        .login-container h3 {
            font-size: 22px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        /* Form Styles */
        .form-group {
            text-align: left;
            margin-bottom: 15px;
            position: relative;
        }

        .form-group label {
            font-weight: 500;
            font-size: 14px;
            color: #34495e;
        }

        .form-control {
            width: 100%;
            height: 45px;
            border: 1px solid #ced4da;
            border-radius: 6px;
            font-size: 14px;
            padding: 10px;
            transition: 0.3s;
        }

        .form-control:focus {
            border-color: #1a252f;
            box-shadow: 0 0 6px rgba(44, 62, 80, 0.2);
            outline: none;
        }

        /* Password Toggle Icon */
        .password-wrapper {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 63%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 18px;
            color: #34495e;
        }

        .toggle-password:hover {
            color: #1a252f;
        }

        /* Checkbox */
        .form-check {
            display: flex;
            align-items: center;
        }

        .form-check-label {
            font-size: 14px;
            margin-left: 5px;
            color: #34495e;
        }

        /* Submit Button */
        .btn-primary {
            background-color: #2c3e50;
            border: none;
            font-size: 16px;
            font-weight: 500;
            padding: 12px;
            width: 100%;
            border-radius: 6px;
            transition: 0.3s;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #1a252f;
        }

        /* Footer */
        .login-footer {
            margin-top: 15px;
            font-size: 13px;
        }

        .login-footer a {
            color: #2c3e50;
            text-decoration: none;
            font-weight: 500;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .login-container {
                padding: 30px;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <!-- Logo -->
        <img src="{{ asset('img/homePage/logo.png') }}" alt="Law Firm Logo" class="logo">

        <h3>Admin Login</h3>

        <form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Field -->
    <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" class="form-control" required autofocus>
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <!-- Password Field with Show/Hide Toggle -->
    <div class="form-group password-wrapper">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" required>
        <span class="toggle-password" onclick="togglePassword()">👁</span>
        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <!-- Remember Me Checkbox -->
    <div class="form-group form-check">
        <input type="checkbox" name="remember" class="form-check-input" id="remember">
        <label class="form-check-label" for="remember">Remember Me</label>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Login</button>
</form>

    </div>

    <!-- JavaScript for Show/Hide Password -->
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var toggleIcon = document.querySelector(".toggle-password");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleIcon.textContent = "🔒"; // Change to hide icon
            } else {
                passwordField.type = "password";
                toggleIcon.textContent = "👁"; // Change back to show icon
            }
        }
    </script>

</body>
</html>

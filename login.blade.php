<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Login - Event Reservation</title>
    <style>
        body {
            background-color: pink;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        h1 {
            color: hotpink;
            text-align: center;
            padding-top: 50px;
            font-size: 3em;
        }
        form {
            max-width: 400px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(255, 105, 180, 0.3);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 1em;
        }
        button {
            width: 100%;
            padding: 15px;
            background-color: hotpink;
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 1.2em;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: deeppink;
        }
        .register-link {
            text-align: center;
            display: block;
            margin-top: 20px;
            font-size: 1em;
            color: hotpink;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .register-link:hover {
            color: deeppink;
        }
    </style>
</head>
<body>
    <h1>Login to Book</h1>
    <form method="POST" action="/login">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>

        <!-- Register link -->
        <a href="/register" class="register-link">Don't have an account? Register</a>
    </form>
</body>
</html>

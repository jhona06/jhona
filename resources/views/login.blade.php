<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login Form</h1>
    <form action="{{ route('home') }}" method="POST">
        @csrf
        <label for="age">Enter your age:</label>
        <input type="number" name="age" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>

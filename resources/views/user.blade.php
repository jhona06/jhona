<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh; /* Ensure body takes full height */
}

.content {
    flex: 1; /* Allow the content area to grow and take available space */
    display: flex;
    flex-direction: column;
    justify-content: center; /* Center content vertically */
    align-items: center; /* Center content horizontally */
    text-align: center;
}

.welcome-message {
    font-size: 2em;
    color: #000; /* Black text color */
    margin: 0;
    padding: 20px;
}

.welcome-image {
    margin-top: 20px; /* Space between message and image */
}

.welcome-image img {
    max-width: 100%;
    height: auto;
}
        </style>
</head>
<body>
<div class="content">
        <div class="welcome-message">
            Welcome, {{ $username }}!
        </div>
        <div class="welcome-image">
            <img src="{{ asset('images/hi.png') }}" alt="Welcome Image">
        </div>
    </div>
</body>
</html>

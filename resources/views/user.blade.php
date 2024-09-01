<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>

            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                text-align: center;
                background-color: #1E201E;
                margin: 0;
                padding: 0;
            }

            .welcome-message {
                margin-top: 250px;
                font-size: 1.5em;
                color: #333;
                padding: 30px;
                display: inline-block;
                background-color: #ffffff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            h1 {
                font-size: 2em;
                color: #007bff;
            }

            .container {
                max-width: 800px;
                margin: auto;
                padding: 0 20px;
            }
        </style>
</head>
<body>
<div class="container">
        <div class="welcome-message">
            <h1>Welcome, {{ $username }}!</h1>
        </div>
    </div>
</body>
</html>

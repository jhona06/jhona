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
                background-color: #f5f5f5;
                margin: 0;
                padding: 0;
            }

            .welcome-message {
                margin-top: 100px;
                font-size: 1.5em;
                color: #333;
                padding: 30px;
                border: 1px solid #007bff;
                border-radius: 12px;
                display: inline-block;
                background-color: #ffffff;
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

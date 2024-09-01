<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
         .navbar-container {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 9999;
        }

        .navbar {
            background-color: #ECDFCC;

        }

        .navbar-brand {
            font-size: 28px;
            text-transform: uppercase;
            margin-right: 50px;
            font-family: 'Playfair Display', serif;
        }

        .navbar .navbar-nav .nav-link {
            text-transform: uppercase;
            font-size: 14px;
        }

        body {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
        }

        .content {
            flex: 1; 
            display: flex;
            flex-direction: column;
            justify-content: center; 
            align-items: center; 
            text-align: center;
            margin-top: 20px;
        }

        .welcome-message {
            font-size: 50px;
            font-weight: 300;
            color: #000; 
            margin: 0;
            padding: 20px;
            margin-top: 50px;
        }

        .welcome-image {
            margin-top: 40px; 
            margin-right: 50px;
        }

        .welcome-image img {
            max-width: 100%;
            height: auto;
        }
        </style>
</head>
<body>
        <div class="navbar-container">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg">
                    <div class="container">
                        <a class="navbar-brand" href="{{ route('homepage') }}">Homepage</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="content">
                    <div class="welcome-message">
                        {{ $message }}
                    </div>

                    <div class="welcome-image">
                        <img src="{{ asset('images/whi.png') }}" alt="Welcome Image">
                    </div>
                </div>
</body>
</html>


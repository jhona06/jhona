<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Homepage</title>
    <style>

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
}

.welcome-message {
    font-size: 50px;
    font-weight: 300;
    color: #000; 
    margin: 0;
    padding: 20px;
}

.welcome-image {
    margin-top: 20px; 
    margin-right: 50px;
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
             {{ $message }}
        </div>
        <li class="nav-item">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact us</a>
                        </li>
</li>
        <div class="welcome-image">
            <img src="{{ asset('images/whi.png') }}" alt="Welcome Image">
        </div>
    </div>
</body>
</html>


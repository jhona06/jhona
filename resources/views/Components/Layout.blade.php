<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Mac and Gab</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar-container {
            background-color: #007bff;
            padding: 10px 0;
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar .navbar-brand {
            color: #fff;
        }
        .navbar .navbar-nav .nav-link {
            color: #fff;
        }
        .navbar .navbar-nav .nav-link:hover {
            color: #ccc;
        }
        .container {
            display: flex;
            margin: 0 auto;
            padding: 20px;
        }
        .sidebar {
            width: 20%;
            background-color: #f8f9fa;
            padding: 15px;
            border-right: 1px solid #ddd;
            height: calc(100vh - 60px);
            position: fixed;
        }
        .sidebar h4 {
            margin-top: 0;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin-bottom: 10px;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: #007bff;
        }
        .sidebar ul li a:hover {
            text-decoration: underline;
        }
        .main-content {
            margin-left: 22%;
            padding: 15px;
            width: 60%;
        }
        .order-form {
            width: 18%;
            padding: 15px;
            background-color: #f8f9fa;
            border-left: 1px solid #ddd;
            position: fixed;
            right: 0;
            top: 60px;
            height: calc(100vh - 60px);
            overflow-y: auto;
        }
        .order-form h4 {
            margin-top: 0;
        }
        .form-group {
            margin-bottom: 15px;
        }
        select, input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar-container">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Mac and Gab</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="sidebar">
            <h4>Categories</h4>
            <ul>
                @foreach($categories as $category)
                    <li>
                        <a href="{{ route('home', ['category_id' => $category->id]) }}">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="main-content">
            @yield('content')
        </div>

        <div class="order-form">
            <h4>Place Your Order</h4>
            <form action="{{ route('order.place') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="item">Select Item:</label>
                    <select id="item" name="item" required>
                        @foreach($menuItems as $item)
                            <option value="{{ $item->id }}">{{ $item->name }} - ${{ number_format($item->price, 2) }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
            </form>
        </div>
    </div>
</body>
</html>

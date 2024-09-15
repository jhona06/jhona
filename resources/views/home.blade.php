@extends('Components.Layout')

@section('title', 'Home')

@section('content')
    <div class="container">
        <h1 class="text-center">Welcome to Our Restaurant!</h1>
        <p class="text-center">Explore our menu and place your order.</p>

        <!-- Search Bar and Categories Dropdown -->
        <div class="search-bar">
            <form action="{{ route('home') }}" method="GET">
                <input type="text" name="search" placeholder="Search menu items..." value="{{ request('search') }}">
                <select name="category_id">
                    <option value="">All Categories</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        <!-- Menu Items Display -->
        <div class="menu-section">
            <h2>Our Menu</h2>
            <div class="menu-items">
                @forelse($menuItems as $item)
                    <div class="menu-item">
                        <h3>{{ $item->name }}</h3>
                        <p>Price: ${{ number_format($item->price, 2) }}</p>
                    </div>
                @empty
                    <p>No menu items found.</p>
                @endforelse
            </div>
        </div>

        <!-- Order Form -->
        <div class="order-form">
            <h2>Place Your Order</h2>
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

    <!-- Styles -->
    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .text-center {
            text-align: center;
        }
        .search-bar {
            margin-bottom: 20px;
            text-align: center;
        }
        .search-bar input,
        .search-bar select {
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .search-bar button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        .search-bar button:hover {
            background-color: #0056b3;
        }
        .menu-section {
            margin-bottom: 30px;
        }
        .menu-items {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        .menu-item {
            flex: 1 1 calc(33% - 30px);
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .order-form {
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        select {
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
@endsection

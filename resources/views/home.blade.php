@extends('Components.Layout')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Sidebar for Categories -->
            <div class="col-md-3 sidebar">
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

            <!-- Main Content Area -->
            <div class="col-md-6 main-content">
                <!-- Search Bar -->
                <div class="search-bar">
                    <form action="{{ route('home') }}" method="GET">
                        <input type="text" name="search" placeholder="Search menu items..." value="{{ request('search') }}">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>

                <!-- Menu Items Display -->
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

            <!-- Ordering Form -->
            <div class="col-md-3 order-form">
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
    </div>

    <!-- Styles -->
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
        }
        .sidebar {
            background-color: #f8f9fa;
            padding: 15px;
            border-right: 1px solid #ddd;
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
            padding: 15px;
        }
        .search-bar {
            margin-bottom: 20px;
            text-align: right;
        }
        .search-bar input,
        .search-bar button {
            padding: 10px;
            margin-left: 10px;
        }
        .menu-items {
            margin-top: 20px;
        }
        .menu-item {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .order-form {
            background-color: #f8f9fa;
            padding: 15px;
            border: 1px solid #ddd;
        }
        .order-form h4 {
            margin-top: 0;
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

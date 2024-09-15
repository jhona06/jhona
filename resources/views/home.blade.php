@extends('Components.Layout')

@section('title', 'Home')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Welcome to Our Store!</h1>
    <p class="text-center">Browse our menu and place your order below.</p>

    <!-- Menu Section -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2 class="text-center">Menu</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Item 1: $10</li>
                        <li class="list-group-item">Item 2: $15</li>
                        <li class="list-group-item">Item 3: $20</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Order Form -->
    <div class="row justify-content-center mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h2 class="text-center">Place Your Order</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('order.place') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="item">Select Item:</label>
                            <select id="item" name="item" class="form-control" required>
                                <option value="item1">Item 1 - $10</option>
                                <option value="item2">Item 2 - $15</option>
                                <option value="item3">Item 3 - $20</option>
                            </select>
                        </div>

                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary btn-lg">Order Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

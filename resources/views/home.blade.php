@extends('Components.Layout')

@section('title', 'Home')

@section('content')
    <h1>Welcome to Our Store!</h1>
    <p>View our menu and place your order.</p>
    <!-- Add your menu and ordering functionality here -->
    <ul>
        <li>Item 1: $10</li>
        <li>Item 2: $15</li>
        <li>Item 3: $20</li>
    </ul>
    <form action="{{ route('order.place') }}" method="POST">
        @csrf
        <label for="item">Select Item:</label>
        <select id="item" name="item" required>
            <option value="item1">Item 1</option>
            <option value="item2">Item 2</option>
            <option value="item3">Item 3</option>
        </select>
        <button type="submit">Order Now</button>
    </form>
@endsection

@extends('Components.Layout')

@section('title', 'Home')

@section('content')
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
@endsection

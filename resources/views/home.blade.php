@extends('Components.Layout')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Messages Section -->
            <div class="col-md-12">
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if(session('order_placed'))
                    <div class="alert alert-success">
                        Your order has been placed successfully!
                    </div>
                @endif
            </div>

            <!-- Main Content Area -->
            <div class="col-md-9">
                <!-- Search Bar -->
                <div class="search-bar mb-3">
                    <form action="{{ route('home') }}" method="GET" class="d-flex align-items-center">
                        <input type="text" name="search" placeholder="Search menu items..." class="form-control me-2" />
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
                @php
                // Define a mapping of category names to icon filenames
                $iconMapping = [
                    'Silog meals' => 'silog.png',
                    'Rice bowls' => 'Rice bowls.png',
                    'Beverages' => 'beverages.png',
                    'Pasta' => 'pasta.png',
                    
                ];
            @endphp

                            <!-- Categories Tabs -->
                <ul class="nav nav-tabs mb-3" id="categoryTabs" role="tablist">
                    @foreach($categories as $index => $category)
                        <li class="nav-item" role="presentation">
                            <a class="nav-link{{ $index === 0 ? ' active' : '' }}" id="tab-{{ $category->id }}" data-bs-toggle="tab" href="#category-{{ $category->id }}" role="tab" aria-controls="category-{{ $category->id }}" aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                                <!-- Display icon for each category based on the mapping -->
                                @php
                                    $icon = $iconMapping[$category->name] ?? 'default.png'; // Use 'default.png' if no match is found
                                @endphp
                                <img src="{{ asset('icons/' . $icon) }}" alt="{{ $category->name }}" class="category-icon" />
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                @php
    $itemImageMapping = [
        'Tocilog' => 'Tocilog.png',
        'Liemposilog' => 'Liempo.png',
        'Sinigang' => 'Sinigang.png',
        'Lechon' => 'Lechon.png',
        // Add more mappings as needed
    ];
@endphp



                
                <div class="tab-content" id="categoryTabsContent">
                    @foreach($categories as $index => $category)
                        <div class="tab-pane fade{{ $index === 0 ? ' show active' : '' }}" id="category-{{ $category->id }}" role="tabpanel" aria-labelledby="tab-{{ $category->id }}">
                            <!-- Menu Items for the category -->
                            <div class="row">
                                @foreach($menuItems->where('category_id', $category->id) as $item)
                                    <div class="col-md-3 mb-4">
                                        <div class="menu-item">
                                            <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->name }}" class="menu-item-image" />
                                            <h4>{{ $item->name }}</h4>
                                            <p>${{ $item->price }}</p>
                                            <form action="{{ route('order.add') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="item_id" value="{{ $item->id }}" />
                                                <input type="number" name="quantity" min="1" value="1" class="form-control mb-2" />
                                                <button type="submit" class="btn btn-success">Add to Order</button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Ordering Section -->
            <div class="col-md-3 d-none d-md-block">
                <div class="ordering">
                    <h4>Your Order</h4>
                    @if(Session::has('order') && count(Session::get('order')) > 0)
                        <ul class="list-group mb-3">
                            @foreach(Session::get('order') as $item)
                                <li class="list-group-item">
                                    {{ $item['name'] }} - {{ $item['quantity'] }} x ${{ $item['price'] }} = ${{ $item['quantity'] * $item['price'] }}
                                </li>
                            @endforeach
                        </ul>
                        <p><strong>Total: ${{ Session::get('order_total') }}</strong></p>
                        <!-- View Order Details Button -->
                        <form action="{{ route('order.place') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-info mt-3">
                                Place Order
                            </button>
                        </form>
                    @else
                        <p>Your order is empty.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Order Confirmation -->
    <div class="modal fade" id="orderPlacedModal" tabindex="-1" aria-labelledby="orderPlacedModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderPlacedModalLabel">Order Placed</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Your order has been placed successfully! Thank you for ordering.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
<style>
    .category-icon {
        width: 10px;
        height: 10px;
        margin-right: 8px;
        object-fit: cover;
        vertical-align: middle;
    }

    .menu-item-image {
        width: 100%;
        height: 150px;
        object-fit: cover;
        margin-bottom: 10px;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    @if(session('order_placed'))
        // Automatically show the modal after placing the order
        var myModal = new bootstrap.Modal(document.getElementById('orderPlacedModal'));
        myModal.show();
    @endif
</script>
@endpush

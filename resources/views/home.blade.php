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
            @if(session('order_canceled'))
                <div class="alert alert-info">
                    {{ session('order_canceled') }}
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

            <!-- Tab Content -->
<div class="tab-content" id="categoryTabsContent">
    @foreach($categories as $index => $category)
        <div class="tab-pane fade{{ $index === 0 ? ' show active' : '' }}" id="category-{{ $category->id }}" role="tabpanel" aria-labelledby="tab-{{ $category->id }}">
            <!-- Menu Items for the category -->
            <div class="row">
                @foreach($menuItems->where('category_id', $category->id) as $item)
                    <div class="col-md-3 mb-4">
                        <div class="menu-item" style="border-radius: 8px; overflow: hidden; border: 1px solid #ddd; padding: 20px;">
                            <!-- Display the image using its path stored in the database -->
                            <img src="{{ asset('icons/' . $item->image) }}" alt="{{ $item->name }}" class="menu-item-image" style="border-radius: 8px; width: 100%; height: 150px; object-fit: cover;" />
                            <h5>{{ $item->name }}</h5>
                            <p>${{ $item->price }}</p>
                            <form action="{{ route('order.add') }}" method="POST">
                                @csrf
                                <input type="hidden" name="item_id" value="{{ $item->id }}" />
                                <input type="number" name="quantity" min="1" value="1" class="form-control mb-2" style="width: 100%;" />
                                <button type="submit" class="btn btn-success" style="width: 100%;">Add to Order</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Ordering Section -->
<div class="col-md-3 d-none d-md-block">
    <div class="ordering text-center" style="height: 720px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); border-radius: 10px; padding: 20px; display: flex; flex-direction: column;">
        <h4>Your Order</h4>
        @if(Session::has('order') && count(Session::get('order')) > 0)
            <!-- List of Items -->
            <form action="{{ route('order.cancel') }}" method="POST">
                @csrf
                <div style="flex: 1; overflow-y: auto; padding-left: 10px; padding-right: 10px;">
                    <ul class="list-group mb-4" style="margin: 0; list-style: none; padding: 0;">
                        @foreach(Session::get('order') as $key => $item)
                            <li class="list-group-item d-flex justify-content-between align-items-center" style="margin-left: 0; margin-right: 0; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                                <div>
                                    <input type="checkbox" name="items_to_cancel[]" value="{{ $key }}" /> {{ $item['name'] }}
                                </div>
                                <div class="text-end">
                                    <span>{{ $item['quantity'] }} x ${{ $item['price'] }}</span><br />
                                    <strong>${{ $item['quantity'] * $item['price'] }}</strong>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Total and Buttons -->
                <div style="margin-top: auto; padding: 10px;">
                    <p><strong>Total: ${{ Session::get('order_total') }}</strong></p>
                    <div class="d-flex justify-content-between">
                        <!-- Place Order Button -->
                        <form action="{{ route('order.place') }}" method="POST" style="flex: 1; margin-right: 5px;">
                            @csrf
                            <button type="submit" class="btn btn-success" style="width: 100%;">
                                Place Order
                            </button>
                        </form>
                        <!-- Cancel Selected Items Button -->
                        <button type="submit" class="btn btn-secondary" style="flex: 1; margin-left: 5px;">
                            Cancel
                        </button>
                    </div>
                </div>
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
        width: 24px; /* Adjust width and height as needed */
        height: 24px;
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
    document.addEventListener("DOMContentLoaded", function() {
        var myModal = new bootstrap.Modal(document.getElementById('orderPlacedModal'));
        myModal.show();
    });
    @endif
</script>
@endpush

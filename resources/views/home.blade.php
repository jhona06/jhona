@extends('Components.Layout')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Main Content Area -->
            <div class="col-md-9">
                <!-- Search Bar -->
                <div class="search-bar mb-3">
                    <form action="{{ route('home') }}" method="GET" class="d-flex align-items-center">
                        <input type="text" name="search" placeholder="Search menu items..." class="form-control me-2" />
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>

                <!-- Categories Tabs -->
                <ul class="nav nav-tabs mb-3" id="categoryTabs" role="tablist">
                    @foreach($categories as $index => $category)
                        <li class="nav-item" role="presentation">
                            <a class="nav-link{{ $index === 0 ? ' active' : '' }}" id="tab-{{ $category->id }}" data-bs-toggle="tab" href="#category-{{ $category->id }}" role="tab" aria-controls="category-{{ $category->id }}" aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                                <img src="{{ asset('icons/' . $category->icon) }}" alt="{{ $category->name }}" class="category-icon" />
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                
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
                    <h4>Place Your Order</h4>
                    @if(Session::has('order'))
                        <ul class="list-group mb-3">
                            @foreach(Session::get('order') as $item)
                                <li class="list-group-item">
                                    {{ $item['name'] }} - {{ $item['quantity'] }} x ${{ $item['price'] }} = ${{ $item['quantity'] * $item['price'] }}
                                </li>
                            @endforeach
                        </ul>
                        <p><strong>Total: ${{ Session::get('order_total') }}</strong></p>
                        <form action="{{ route('order.submit') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success">Place Order</button>
                        </form>
                        @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if(session('order_status'))
    <div class="alert alert-success">
        {{ session('order_status') }}
    </div>
@endif

                    @else
                        <p>Your order is empty.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
<style>
    .category-icon {
        width: 24px;
        height: 24px;
        margin-right: 8px;
    }

    .search-bar {
        margin-bottom: 20px;
    }

    .nav-tabs .nav-link {
        border-radius: 0;
        padding: 10px;
        font-size: 16px;
    }

    .nav-tabs .nav-link.active {
        background-color: #f8f9fa;
        border-color: #dee2e6 #dee2e6 #fff;
    }

    .menu-item {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .menu-item-image {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-bottom: 1px solid #ddd;
        margin-bottom: 10px;
    }

    .ordering {
        border: 1px solid #ddd;
        padding: 15px;
        margin-top: 15px;
    }
</style>
@endpush

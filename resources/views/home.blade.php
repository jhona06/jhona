@extends('layouts.app')

@section('title', 'Menu')

@section('content')
    <section id="menu" class="py-5">
        <div class="container">
            <h2 class="text-center">Menu</h2>
            <div class="row">
                @foreach($menuItems as $item)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                                <p class="card-text"><strong>${{ number_format($item->price, 2) }}</strong></p>
                                <a href="{{ route('menu.show', $item->id) }}" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

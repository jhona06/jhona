@extends('layouts.app')

@section('title', $menuItem->name)

@section('content')
    <section id="menu-item" class="py-5">
        <div class="container">
            <h2 class="text-center">{{ $menuItem->name }}</h2>
            <div class="row">
                <div class="col-md-8">
                    <p>{{ $menuItem->description }}</p>
                    <p><strong>Price: ${{ number_format($menuItem->price, 2) }}</strong></p>
                </div>
            </div>
        </div>
    </section>
@endsection

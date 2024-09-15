@extends('Components.Layout')

@section('title', 'About Us')

@section('content')
    <!-- About Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="display-4 mb-4">About Our Restaurant</h2>
                    <p class="lead mb-4">
                        Welcome to Mac and Gab! We are committed to serving delicious, fresh, and healthy food
                        made from the finest ingredients. Our passion for food is reflected in every dish we create,
                        ensuring a memorable dining experience for our customers.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <img src="{{ asset('images/landscapepic.jpg') }}" class="img-fluid rounded shadow" alt="Restaurant">
                </div>
            </div>
        </div>
    </section>
@endsection

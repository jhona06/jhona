@extends('Components.Layout')

@section('title', 'Contact Us')

@section('content')
<style>
    .fit-image {
        margin-left: 10%;
        width: 100%; /* Ensure the image fits the column width */
        height: auto; /* Maintain aspect ratio */
        max-height: 100%; /* Constrain the image height to the container */
        object-fit: cover; /* Crop the image to fit the container */
    }
</style>

    <section id="contact">
        <div class="container">
            <h2 class="text-left mb-4">Contact Us</h2>
            <div class="row">
                <!-- Contact Form Column -->
                <div class="col-md-6">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="username">Name</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-4">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" name="message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                
                <!-- Image Column -->
                <div class="col-md-6 d-flex align-items-end">
                    <img src="{{ asset('images/about photo.jpg') }}" alt="Contact Image" class="img-fluid fit-image">
                </div>
            </div>
        </div>
    </section>
@endsection

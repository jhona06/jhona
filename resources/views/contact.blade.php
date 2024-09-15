@extends('Components.Layout')

@section('title', 'Contact Us')

@section('content')
    <section id="contact">
        <div class="container">
            <h2 class="text-left">Contact Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('user.submit') }}" method="POST">
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
                <div class="col-md-6">
                    <img src="{{ asset('images/l_cs.png') }}" alt="Contact Image" class="contact-image">
                </div>
            </div>
        </div>
    </section>
@endsection

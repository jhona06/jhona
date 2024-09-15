@extends('Components.Layout')

@section('title', 'Home Page')

@section('content')
    <section id="home">
        <div class="container">
            <h1 class="display-3">Welcome to Mac and Gab Restaurant</h1>
            <p class="lead">Experience the best dining with a variety of dishes prepared with the freshest ingredients. Our welcoming atmosphere and exceptional service make every visit memorable.</p>
            <a href="#contact" class="btn btn-primary">Contact Us</a>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2 class="text-center">Get in Touch</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

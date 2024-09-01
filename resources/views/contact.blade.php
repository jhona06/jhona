<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
         .navbar-container {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 9999;
        }

        .navbar {
            background-color: #ECDFCC;
        }

        .navbar-brand {
            font-size: 28px;
            text-transform: uppercase;
            margin-right: 50px;
            font-family: 'Playfair Display', serif;
        }

        .navbar .navbar-nav .nav-link {
            text-transform: uppercase;
            font-size: 14px;
        }
        body {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
        }
        #contact {
            background-color: #f5f5f5;
            padding: 100px 0;
        }

        #contact h2 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            
        }

        #contact .form-control {
            margin-top: 10px;
            border-radius: 5px;
        }

        .contact-image {
            max-width: 100%;
            margin-left: 80px;
        }

        .btn-primary {
            background-color: #41B06E; 
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            color: #ffffff; 
        }

        .btn-primary:hover {
            background-color: #0056b3; 
            color: #ffffff; 
        }
    </style>
</head>
<body>
    <div class="navbar-container">
                    <!-- Navbar -->
                    <nav class="navbar navbar-expand-lg">
                        <div class="container">
                            <a class="navbar-brand" href="homepage">Homepage</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('about1') }}">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <section id="contact">
                    <div class="container">
                        <h2 class="text-left" >Contact Us</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="{{ route('user.submit') }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="username">Name </label>
                                        <input type="text" class="form-control" id="username" name="username">
                                    </div>
                                    <div class="mb-4">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id=email name="email">
                                    </div>
                                    <div class="mb-4">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="phone" class="form-control" id=phone name="phone">
                                    </div>
                                    <div class="mb-4">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" rows="4" name="message"></textarea>
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
                <!-- Bootstrap JS -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

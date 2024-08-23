<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mac and Gab Restaurant</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        /* Navbar */
        .navbar-container {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 9999;
        }

        .navbar {
            background-color: #f8f9fa;
            padding-top: 16px;
            padding-bottom: 16px;
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

        /* Section Padding */
        .content-container {
            padding-top: 250px; 
            padding-bottom: 60px;
        }

        /* Menu (Content Section) */
        #content h2 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            margin-bottom: 40px;
        }

        #content p.lead {
            font-size: 1.25rem;
            font-weight: 300;
            color: #555;
        }

        .card {
            border-radius: 10px;
        }

        .card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 200px;
            object-fit: cover;
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .card-text {
            font-size: 1rem;
            color: #666;
        }
    </style>
</head>
<body>

    <!-- Navbar Container -->
    <div class="navbar-container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="macandgab">Mac and Gab</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="content">Content</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Content Container -->
    <div class="content-container">
        <!-- Menu Section (Content Section) -->
        <section id="content" class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="display-4 mb-4">Our Menu</h2>
                        <p class="lead mb-4">
                            Explore our wide variety of delicious dishes, made from the freshest ingredients!
                        </p>
                    </div>
                </div>
                <div class="row">
                    <!-- Menu Item 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/carbonara.jpg') }}" class="card-img-top" alt="Dish 1">
                            <div class="card-body">
                                <h5 class="card-title">Carbonara</h5>
                                <p class="card-text">Creamy Sauce with spam and bread</p>
                                <p class="card-text"><strong>150 Pesos</strong></p>
                            </div>
                        </div>
                    </div>
                    <!-- Menu Item 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/chick.jpg') }}" class="card-img-top" alt="Dish 2">
                            <div class="card-body">
                                <h5 class="card-title">Buffalo Platter Chicken</h5>
                                <p class="card-text">Crispy flavor of Sweet and chili Sauce</p>
                                <p class="card-text"><strong>299 pesos</strong></p>
                            </div>
                        </div>
                    </div>
                    <!-- Menu Item 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/tap.jpg') }}" class="card-img-top" alt="Dish 3">
                            <div class="card-body">
                                <h5 class="card-title">Tap Silog</h5>
                                <p class="card-text">Unli Rice and Free Soup</p>
                                <p class="card-text"><strong>109 pesos</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Menu Item 4 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/toci.jpg') }}" class="card-img-top" alt="Dish 4">
                            <div class="card-body">
                                <h5 class="card-title">Tocilog</h5>
                                <p class="card-text">Unli Rice and Free Soup</p>
                                <p class="card-text"><strong>109 pesos</strong></p>
                            </div>
                        </div>
                    </div>
                    <!-- Menu Item 5 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/chicken.jpg') }}" class="card-img-top" alt="Dish 5">
                            <div class="card-body">
                                <h5 class="card-title">Chicken wing Platter</h5>
                                <p class="card-text">Different Flavor of Chicken Platter</p>
                                <p class="card-text"><strong>299 pesos</strong></p>
                            </div>
                        </div>
                    </div>
                    <!-- Menu Item 6 -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('images/juice.jpg') }}" class="card-img-top" alt="Dish 6">
                            <div class="card-body">
                                <h5 class="card-title">Juice</h5>
                                <p class="card-text">Will refresh you while in hot weather</p>
                                <p class="card-text"><strong>49 pesos</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

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
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            padding-top: 16px;
            padding-bottom: 16px;
            z-index: 9999;
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-size: 28px;
            text-transform: uppercase;
            margin-right: 50px;
        }

        .navbar .navbar-nav .nav-link {
            text-transform: uppercase;
            font-size: 14px;
        }

        /* Section Padding */
        section {
            padding-top: 170px;
            padding-bottom: 60px;
        }

        /* About Section */
        #about {
            background-color: #f8f9fa;
            padding: 60px 0;
            margin-top: 100px;
        }

        #about h2 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            margin-bottom: 40px;
        }

        #about p {
            font-size: 1.25rem;
            font-weight: 300;
            color: #555;
        }

        #about img {
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
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

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
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
                        <img src="{{ asset('images/dish1.jpg') }}" class="card-img-top" alt="Dish 1">
                        <div class="card-body">
                            <h5 class="card-title">Dish Name 1</h5>
                            <p class="card-text">A brief description of the dish. Made with the finest ingredients and full of flavor.</p>
                            <p class="card-text"><strong>$12.99</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Menu Item 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/dish2.jpg') }}" class="card-img-top" alt="Dish 2">
                        <div class="card-body">
                            <h5 class="card-title">Dish Name 2</h5>
                            <p class="card-text">A brief description of the dish. A perfect blend of taste and tradition.</p>
                            <p class="card-text"><strong>$14.99</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Menu Item 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/dish3.jpg') }}" class="card-img-top" alt="Dish 3">
                        <div class="card-body">
                            <h5 class="card-title">Dish Name 3</h5>
                            <p class="card-text">A delicious dish perfect for any occasion, cooked to perfection.</p>
                            <p class="card-text"><strong>$16.99</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- More Menu Items (repeat structure for more dishes) -->
                <!-- Menu Item 4 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/dish4.jpg') }}" class="card-img-top" alt="Dish 4">
                        <div class="card-body">
                            <h5 class="card-title">Dish Name 4</h5>
                            <p class="card-text">A wonderful dish, prepared with love and the finest ingredients.</p>
                            <p class="card-text"><strong>$10.99</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Menu Item 5 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/dish5.jpg') }}" class="card-img-top" alt="Dish 5">
                        <div class="card-body">
                            <h5 class="card-title">Dish Name 5</h5>
                            <p class="card-text">An exquisite dish that captures the essence of our culinary expertise.</p>
                            <p class="card-text"><strong>$18.99</strong></p>
                        </div>
                    </div>
                </div>
                <!-- Menu Item 6 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/dish6.jpg') }}" class="card-img-top" alt="Dish 6">
                        <div class="card-body">
                            <h5 class="card-title">Dish Name 6</h5>
                            <p class="card-text">A dish to satisfy your taste buds, crafted with care and quality.</p>
                            <p class="card-text"><strong>$15.99</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

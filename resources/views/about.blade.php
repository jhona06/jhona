<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mac and Gab Restaurant</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles -->
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

        /* Section */
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


    <!-- About Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="display-4 mb-4">About Our Restaurant</h2>
                    <p class="lead mb-4">
                        Welcome to [Restaurant Name]! We are committed to serving delicious, fresh, and healthy food
                        made from the finest ingredients. Our passion for food is reflected in every dish we create,
                        ensuring a memorable dining experience for our customers.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <img src="{{ asset('images/restaurant.jpg') }}" class="img-fluid rounded shadow" alt="Restaurant">
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

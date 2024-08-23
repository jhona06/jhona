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
        }

        .navbar .navbar-nav .nav-link {
            text-transform: uppercase;
            font-size: 14px;
        }

        /* Section Padding */
        .content-container {
            padding-top: 250px; /* Adjusted padding to account for fixed navbar */
            padding-bottom: 60px;
        }

        /* Home Section */
        #home {
            background-color: #f8f9fa;
            padding: 100px 0;
            text-align: center;
        }

        #home h1 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            margin-bottom: 20px;
        }

        #home p {
            font-size: 1.25rem;
            color: #555;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Contact Section */
        #contact {
            background-color: #ffffff;
            padding: 80px 0;
        }

        #contact h2 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            margin-bottom: 40px;
        }

        #contact .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
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

    <!-- Home Section -->
    <section id="home">
        <div class="container">
            <h1 class="display-3">Welcome to Mac and Gab Restaurant</h1>
            <p class="lead">
                Experience the best dining with a variety of dishes prepared with the freshest ingredients. Our welcoming atmosphere and exceptional service make every visit memorable.
            </p>
            <a href="#contact" class="btn btn-primary">Contact Us</a>
        </div>
    </section>

    <!-- Contact Section -->
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

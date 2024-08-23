<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- link -->
         <link href="/bootstrap-5.3.3-dist/css/bootstrap.css"rel="stylesheet">
        
        
        

        <!-- Styles -->
        <style>
            /* navbar */
            .navbar{
                position: absolute;
                width: 100%;
                padding-top: 16px;
                padding-bottom: 16px;
                z-index: 9999;
                margin-right: 20px;
                
            }
            .navbar-brand{
                font-size: 28px;
                text-transform: uppercase;
                margin-right: 50px;
            }
            .navbar .navbar-nav .nav-link{
                text-transform: uppercase;
                font-size: 14px;
            }
            section{
                padding-top: 170px;
                padding: 170px;
            }

        
        </style>
    <body>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="nav justify-content-end">
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
            </ul>
            </div>
        </div>
        </nav>
        <section id="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                    <img src="landscape food.jpg" class="img-fluid" alt="Responsive image">
                        <h1 class="display-5" data-aos="fade-up">JHONA CESTINA</h1>
                        <p data-aos="fade-up" data-aos-delay="300">Join me in exploring our shared  passion for technology as we delve into the depths of the tech world. Get to know more about me and my journey in the ever evolving realm of IT</p>
                        <a href="#aboutme" class="btn btn-outline-light" data-aos="fade-up" data-aos-delay="500"> Know me more</a>
                    </div>
                </div>
            </div>

      </section>

        <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>
    
   

</html>
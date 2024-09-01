<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <style>
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
        </style>
    <section id="contact">
        <div class="container">
            <h2 class="text-center">Contact Us</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="{{ route('user.submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="username">Name:</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" ></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
            </div>
        </div>
        </section>
        <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>

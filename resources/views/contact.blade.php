<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #contact {
            background-color: #f8f9fa;
            padding: 60px 0;
            border-top: 5px solid #007bff;
        }

        #contact h2 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: #343a40;
            margin-bottom: 40px;
        }

        #contact .form-control {
            border-radius: 10px;
            border: 1px solid #ced4da;
            padding: 10px;
        }

        #contact .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
        }

        #contact .btn-primary:hover {
            background-color: #0056b3;
        }

        .contact-image {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-weight: 500;
            color: #495057;
        }
    </style>
</head>
<body>
    <section id="contact">
        <div class="container">
            <h2 class="text-center">Contact Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('user.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="username" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Phone:</label>
                            <input type="email" class="form-control" id="phone" name="email">
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Message:</label>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

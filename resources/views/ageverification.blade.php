<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa; /* Light cyan background */
            color: #004d40; /* Dark teal text color */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }
        .container {
            background-color: #b2dfdb; /* Light teal background for card */
            color: #004d40;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }
        h1 {
            margin-bottom: 10px;
            font-size: 2rem;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 15px 0;
            border: 2px solid #004d40;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #00796b; /* Teal button background */
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 1.1rem;
            border-radius: 5px;
            width: 100%;
        }
        button:hover {
            background-color: #004d40; /* Darker teal on hover */
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to Mac and Gab!</h1>
    <p>You want to order? Verify your age first.</p>
    <form action="{{ url('/welcome') }}" method="GET">
        <label for="age" class="form-label">Enter your age:</label>
        <input type="number" name="age" id="age" required min="0" max="120" placeholder="Enter your age">
        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>

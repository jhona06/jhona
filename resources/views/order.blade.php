<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
</head>
<body>
    <h1>Do you want to order?</h1>
    <form action="/order" method="POST">
        @csrf
        <label for="age">Please enter your age:</label>
        <input type="number" id="age" name="age" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

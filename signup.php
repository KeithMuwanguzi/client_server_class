<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="form">
        <h1>Registration Form</h1>
        <form method="post" action="authenticate.php" onsubmit="return validateForm()">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone"><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br>

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword"><br>

            <label for="dob">Date of Birth:</label>
            <input type="text" id="dob" name="dob" placeholder="MM/DD/YYYY"><br>
            
            <input type="checkbox" id="terms" name="terms">
            I agree to the terms and conditions <br>

            <input type="submit" value="Submit">
        </form>
        <p><a href="index.php">Login Here</a></p>
    </div>
</body>
</html>

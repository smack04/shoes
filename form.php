<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="style2.css">
    <script src="java.js"></script>

</head>
<body>
    <nav class="navbar">
        <div class="nav-left">
            <a href="index.html"><img src="sneaker_logo.png" alt="Home" class="logo"></a>
        </div>
        <div class="nav-right">
            <ul class="nav-bar">
                <li><a href="start_of_shoes.html">The Start of Shoes</a></li>
                <li><a href="evolution_fashion.html">Evolution of Shoes in Fashion</a></li>
                <li><a href="evolution_sneaker_culture.html">Evolution of Sneaker Culture</a></li>
                <li><a href="form.php">Sign Up</a></li>
            </ul>
        </div>
    </nav>

    <h1>Sign Up</h1>

    <div class="form-section" style="display: flex; align-items: center; gap: 30px;">
        <div class="form-image">
            <img src="signup_image.jpg" alt="Sign Up Image" style="max-width: 300px;">
        </div>

        <div class="form-info">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Simple form handling
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $message = htmlspecialchars($_POST['message']);

                echo "<h2>Thank you for signing up, $name!</h2>";
                echo "<p>We will contact you at: $email</p>";
                echo "<p>Your message: $message</p>";
            } else {
            ?>
            <form action="form.php" method="POST" style="display: flex; flex-direction: column; gap: 10px;">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">Submit</button>
            </form>
            <?php
            }
            ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Evolution of Shoes. All rights reserved.</p>
        <p>Contact: <a href="mailto:sdmack@sc.edu">sdmack@sc.edu</a></p>
        <p>Follow us on: 
            <a href="https://facebook.com" target="_blank">Facebook</a> | 
            <a href="https://instagram.com" target="_blank">Instagram</a> | 
            <a href="https://twitter.com" target="_blank">Twitter</a>
        </p>
    </footer>
</body>
</html>

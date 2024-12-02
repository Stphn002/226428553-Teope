<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simple hardcoded validation for demo purposes (replace with a database query)
    $valid_users = [
        "user1" => "Password123!",
        "user2" => "AnotherPassword456@"
    ];

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($valid_users[$username]) && $valid_users[$username] === $password) {
        header("Location: welcome.php"); // Redirect to a welcome page after login
        exit();
    } else {
        $error_message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h1>Log In</h1>
        <form method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <?php if (isset($error_message)): ?>
                <p class="error"><?php echo $error_message; ?></p>
            <?php endif; ?>

            <button type="submit" class="btn">Log In</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
    </div>
    <script src="script.js"></script>
</body>
</html>

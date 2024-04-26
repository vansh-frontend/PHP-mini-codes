<?php
// Start session
session_start();

// Dummy user credentials (replace with your authentication logic)
$valid_username = "vansh";
$valid_password = "vansh@2002";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Dummy authentication logic (replace with actual authentication logic)
    if ($username === $valid_username && $password === $valid_password) {
        // Set session variables
        $_SESSION["username"] = $username;

        // Redirect to secure page
        header("Location: secure_page.php");
        exit();
    } else {
        // Display error message if authentication fails
        $error_message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login session form</title>
  <link rel="stylesheet" href="form.css">
</head>

<body>

  <?php if (isset($error_message)) echo "<p>$error_message</p>"; ?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h2>Login</h2>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" placeholder=" Username" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="  password.." required><br><br>
    <button type="submit" value="Login">Login</button>
  </form>
</body>

</html>
<?php
include('includes/db_connect.php');
include('includes/functions.php');

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username;
    echo '</br>';
    echo $password;

    if (authenticate($username, $password, $conn)) {
        if (is_user()) {
            header("Location: user_dashboard.php");
        } else {
            header("Location: admin_dashboard.php");
        }
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <h1>Register</h1>
    
    <form method="POST" action="">
        <label for="email">First Name:</label>
        <input type="email" id="email" name="email" required>

        <label for="email">Last Name:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Register</button>

        <p> Have an account? <a href="login.php">Click here to login</a> </p>
        
        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
    </form>
</body>
</html>

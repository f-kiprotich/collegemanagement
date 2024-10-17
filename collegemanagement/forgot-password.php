<?php
include('db_connect.php');
include('functions.php');

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
    <title>Reset Password</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <h1>Reset Password</h1>
    
    <form method="POST" action="">
        <p>Enter your email below to receive a password reset link </p>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
       
        <button type="submit">Reset password</button>

        <p><a href="login.php">Go back to login</a> </p>
        
        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
    </form>
</body>
</html>

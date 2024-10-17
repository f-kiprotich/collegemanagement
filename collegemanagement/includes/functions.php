<?php
session_start();

// Function to authenticate users
function authenticate($username, $password, $conn)
{
    $username = mysqli_real_escape_string($conn, $username);
     //$password = md5($password);  Hash the password
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    var_dump($result);
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        var_dump($user);
        
        $_SESSION['user'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        return true;
    }
    return false;
}

// Function to check if user is admin
function is_admin()
{
    return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
}

//Function to check if user is user
function is_user()
{
    return isset($_SESSION['role']) && $_SESSION['role'] === 'user';
}

// Function to check if user is logged in
function is_logged_in() {
    return isset($_SESSION['user']);
}

// Function to sanitize input
function sanitize($data, $conn) {
    return mysqli_real_escape_string($conn, trim($data));
}

function get_student($conn)
{
    $query = 'SELECT * FROM `students` WHERE `status` = "Undergraduate"';
    return $result = $conn->query($query);
}

// Logout function
function logout() {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

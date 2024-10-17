<?php
include('includes/db_connect.php');
include('includes/functions.php');

if (!is_logged_in() || (!is_user() && !is_admin()))
{
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Management - User Dashboard</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <h1>User Dashboard</h1>

    <?php echo "Logged in user role is: " . $_SESSION['role']; ?>
    
    <h2>View Curriculum</h2>
    <table>
        <tr>
            <th>Cource Code</th>
            <th>Course Name</th>
            <th>Units</th>
            <th>Hours</th>
            <th>Lecturer</th>
        </tr>
        <tr>
            <td>COM 225</td>
            <td>Software Engineering</td>
            <td>36</td>
            <td>39</td>
            <td>Dr Kiprotich</td>
        </tr>
    </table>

    <a href="logout.php">Logout</a>
</body>
</html>

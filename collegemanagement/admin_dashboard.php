<?php
include('includes/db_connect.php');
include('includes/functions.php');



if (!is_logged_in() || !is_admin()) {
    header("Location: index.php");
    exit();
}

/* Fetch data for viewing only */
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Management - Admin Dashboard</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    
    <h2>Admin Dashboard</h2>

    <!-- Search form -->
    <div class="search-box">
        <form action="search_student.php" method="POST">
            <input type="text" placeholder="search student"  name="registration_number"required>
            <button type="submit" class="btn">Search</button>
        </form>
        <div class="container">
            <table  class="table">
    </div>

    <!-- Display logged in user role -->
    <?php 
    if (isset($_SESSION['role'])) {
        echo "Logged in user role is: " . htmlspecialchars($_SESSION['role']);
    } else {
        echo "Role information not available.";
    }
    ?>

    <table border="1" cellspacing="0" cellpadding="10" style="width: 100%; text-align: left;">
        <tr style='background-color: #f2f2f2;'>
            <th>ID</th>
            <th>Registration_number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>course</th>
            <th>Enrolment_date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php
        // Check if there are results from the query
        if ($result && $result->num_rows > 0) {
            // Loop through the result set
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['student_id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['registration_number']) . "</td>";
                echo "<td>" . htmlspecialchars($row['first_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['last_name']) . "</td>";
                echo "<td>" . (isset($row['course']) ? htmlspecialchars($row['course']) : 'N/A') . "</td>";
                echo "<td>" . (isset($row['enrollment_date']) ? htmlspecialchars($row['enrollment_date']) : 'N/A') . "</td>";
                echo "<td>" . (isset($row['status']) ? htmlspecialchars($row['status']) : 'N/A') . "</td>";
                echo "<td><a href='delete_student.php?id=" . htmlspecialchars($row['student_id']) . "' onclick='return confirm(\"Are you sure you want to delete this record?\");'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No students found</td></tr>";
        }
        ?>
    </table>

    <a href="logout.php">Logout</a>

</body>
</html>

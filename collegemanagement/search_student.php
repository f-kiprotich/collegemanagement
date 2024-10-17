<?php
// Handle search
include('includes/db_connect.php'); // Assuming this connects to the database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $search_query = $_POST['registration_number'];

    // Query to search students by registration number (or adjust this to use name, email, etc.)2
    $query = "SELECT * FROM students WHERE registration_number LIKE '%$search_query%'"; 
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "<table border='1' cellspacing='0' cellpadding='10'>";
        echo "<tr style='background-color: #f2f2f2;'><th>ID</th><th>First Name</th><th>Last Name</th><th>Course</th><th>Enrollment_date</th><th>Status</th><th>Action</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['student_id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['first_name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['last_name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['course']) . "</td>";
            echo "<td>" . htmlspecialchars($row['enrollment_date']) . "</td>";
            echo "<td>" . htmlspecialchars($row['status']) . "</td>";
            echo "<td><a href='delete_student.php?id=" . htmlspecialchars($row['student_id']) . "' onclick='return confirm(\"Are you sure you want to delete this student?\");'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No students found matching the search query.";
    }
}
?>


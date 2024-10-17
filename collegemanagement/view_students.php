<?php
echo"<table border='1'cellspacing='0'cellpadding='10'>";
echo"<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Program</th>
<th>Status</th>
</tr";

//Loop through the data array, assuming it's an array of associative arrays
while($raw=$result->fetch_assoc())
{
    echo"<tr>";
    echo"td>".$row['student_id']."</td>";
    echo"td>".$row['first_name']."</td>";
    echo"td>".$row['last_name']."</td>";
    echo"td>".$row['email']."</td>";
    echo"td>".$row['program']."</td>";
    echo"td>".$row['status']."</td>";
    echo"</tr>";
}
echo"</table>";
?>


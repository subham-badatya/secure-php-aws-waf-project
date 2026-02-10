<?php
include "db.php";

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

echo "<h2>Students List</h2>";

if ($result->num_rows > 0) {

    echo "<table border='1' cellpadding='10' cellspacing='0'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['age']."</td>
              </tr>";
    }

    echo "</table>";

} else {
    echo "No students data found";
}

$conn->close();
?>

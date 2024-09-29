<?php
// Database connection
$servername = "localhost";
$username = "root";  // Update with your MySQL username
$password = "";      // Update with your MySQL password
$dbname = "project"; // Update with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch employees from the database
$sql = "SELECT Title, firstName, lastName, email, date, NIC, language, phoneNumber FROM register";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Output data for each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row['Title']) . "</td>
                <td>" . htmlspecialchars($row['firstName']) . "</td>
                <td>" . htmlspecialchars($row['lastName']) . "</td>
                <td>" . htmlspecialchars($row['email']) . "</td>
                <td>" . htmlspecialchars($row['date']) . "</td>
                <td>" . htmlspecialchars($row['NIC']) . "</td>
                <td>" . htmlspecialchars($row['language']) . "</td>
                <td>" . htmlspecialchars($row['phoneNumber']) . "</td>
                <td>
                    <form method='post' action='delete_employee.php' onsubmit='return confirmDelete();'>
                        <input type='hidden' name='employee_id' value='" . htmlspecialchars($row['NIC']) . "'>
                        <button type='submit'>Delete</button>
                    </form>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='9'>No employees found</td></tr>";
}

// Close the connection
$conn->close();
?>

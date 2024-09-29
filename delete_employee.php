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

// Check if the employee ID is set and is not empty
if (isset($_POST['employee_id']) && !empty($_POST['employee_id'])) {
    $employee_id = $_POST['employee_id'];

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM register WHERE NIC = ?");
    $stmt->bind_param("s", $employee_id); // Assuming NIC is a string

    // Execute the statement and check for success
    if ($stmt->execute()) {
        // Optionally add a success message
        // echo "Employee deleted successfully.";
    } else {
        // Optionally add an error message
        // echo "Error deleting employee: " . $conn->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();

// Redirect back to admin page after deletion
header("Location: admin.php");
exit();
?>
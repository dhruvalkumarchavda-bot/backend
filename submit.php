<?php
// Database connection
$host = "localhost";
$user = "root";   // XAMPP default username
$pass = "";       // XAMPP default password
$db = "college_form"; // Tumhara database ka naam

$conn = new mysqli($host, $user, $pass, $db);

// Connection check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = $_POST['name'];
$enrollment = $_POST['enrollment'];
$course = $_POST['course'];
$department = $_POST['department'];
$year = $_POST['year'];
$email = $_POST['email'];
$contact = $_POST['contact'];

// Insert into database
$sql = "INSERT INTO students (name, enrollment, course, department, year, email, contact)
        VALUES ('$name', '$enrollment', '$course', '$department', '$year', '$email', '$contact')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully. <a href='index.html'>Go Back</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

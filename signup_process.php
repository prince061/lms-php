<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $rollNumber = $_POST['roll_number'];
    $department = $_POST['department'];
    $dob = $_POST['dob'];
    
    // Here you should insert the data into your database
    // Example MySQLi code:
    $mysqli = new mysqli("localhost", "username", "password", "database");
    $query = "INSERT INTO your_table (first_name, last_name, roll_number, department, dob) VALUES ('$firstName', '$lastName', '$rollNumber', '$department', '$dob')";
    $result = $mysqli->query($query);
    
    // Send success response
    echo json_encode(array("status" => "success"));
} else {
    // Send error response
    echo json_encode(array("status" => "error", "message" => "Invalid request method"));
}
?>

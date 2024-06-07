<?php
include('dbganeshconn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $studentname = $_POST['studentname'];
    $fathername = $_POST['fname'];
    $email = $_POST['email'];
    $rollnumber = $_POST['roll'];
    $password = $_POST['password'];
    $department = $_POST['sellist1'];
    $dob = $_POST['dateob'];
    $courses = $_POST['cou'];
    $gender = $_POST['gender'];

    // Handle file upload
    $image = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $targetDir = "img/";
        $image = $targetDir . basename($_FILES["image"]["name"]);
        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $image)) {
            echo "Sorry, there was an error uploading your file.";
            exit;
        }
    }
    $stmt = $conn->prepare("SELECT roll_number FROM user WHERE roll_number = ?");
    $stmt->bind_param("s", $rollnumber);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        echo "Error: Roll number already exists.";
        $stmt->close();
        $conn->close();
        exit;
    }
    $stmt->close();
    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO user (s_name, f_name, email, roll_number, password,  department, dob, courses, image, gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $studentname, $fathername, $email, $rollnumber, $password, $department, $dob, $courses, $image, $gender);

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>

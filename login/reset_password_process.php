<?php
include('dbganeshconn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the token and password are set in the POST request
    if (isset($_POST['token']) && isset($_POST['password'])) {
        // Get the token and new password from the POST request
        $token = $_POST['token'];
        $new_password = $_POST['password'];

        // Validate input
        if (empty($token) || empty($new_password)) {
            echo "Invalid input.";
            exit;
        }

        // Hash the new password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Validate the token
        $stmt = $conn->prepare("SELECT * FROM user WHERE reset_token = ? AND token_expiry > NOW()");
        if ($stmt === false) {
            echo "Failed to prepare statement.";
            exit;
        }

        $stmt->bind_param("s", $token);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // Update the password
            $stmt = $conn->prepare("UPDATE user SET password = ?, reset_token = NULL, token_expiry = NULL WHERE reset_token = ?");
            if ($stmt === false) {
                echo "Failed to prepare statement.";
                exit;
            }

            $stmt->bind_param("ss", $hashed_password, $token);
            if ($stmt->execute()) {
                echo "Password has been reset successfully.";
            } else {
                echo "Failed to reset password.";
            }
        } else {
            echo "Invalid or expired token.";
        }

        // Close the statement and the connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Invalid input.";
    }
} else {
    echo "Invalid request method.";
}
?>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid input',
                    text: 'Please provide both token and password.'
                });
            </script>";
            exit;
        }

        // Hash the new password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Validate the token
        $stmt = $conn->prepare("SELECT * FROM user WHERE reset_token = ? AND token_expiry > NOW()");
        if ($stmt === false) {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Failed to prepare statement.'
                });
            </script>";
            exit;
        }

        $stmt->bind_param("s", $token);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // Update the password
            $stmt = $conn->prepare("UPDATE user SET password = ?, reset_token = NULL, token_expiry = NULL WHERE reset_token = ?");
            if ($stmt === false) {
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Failed to prepare statement.'
                    });
                </script>";
                exit;
            }

            $stmt->bind_param("ss", $hashed_password, $token);
            if ($stmt->execute()) {
                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Password has been reset successfully.'
                    });
                </script>";
            } else {
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Failed to reset password.'
                    });
                </script>";
            }
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Invalid or expired token.'
                });
            </script>";
        }

        // Close the statement and the connection
        $stmt->close();
        $conn->close();
    } else {
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Invalid input',
                text: 'Please provide both token and password.'
            });
        </script>";
    }
} else {
    echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Invalid request method',
            text: 'Please use POST method to reset password.'
        });
    </script>";
}
?>

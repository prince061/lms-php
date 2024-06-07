<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php'; // Ensure the correct path to autoload.php
include('dbganeshconn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];

    // Check if the email exists in the database
    $stmt = $conn->prepare("SELECT * FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Generate a unique token
        $token = bin2hex(random_bytes(50));
       
        $expiry = date("Y-m-d H:i:s", strtotime('+1 hour'));

        // Store the token in the database
        $stmt = $conn->prepare("UPDATE user SET reset_token = ?, token_expiry = ? WHERE email = ?");
        $stmt->bind_param("sss", $token, $expiry, $email);
        $stmt->execute();

        // Send email with the token
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'p51954991@gmail.com'; // Your Gmail address
            // Use an app-specific password if 2FA is enabled
            $mail->Password = 'zqbf jjqo muco siuj';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            //Recipients
            $mail->setFrom('p51954991@gmail.com', 'Mailer');
            $mail->addAddress($email);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Password Reset Request';
            $reset_link = "http://localhost/shivji/demo.creativeitem.com/academy/reset_password.php?token=" . $token;
            $mail->Body = "Click on the following link to reset your password: <a href='" . $reset_link . "'>" . $reset_link . "</a>";

            $mail->send();
            echo "An email has been sent to your email address with instructions to reset your password.";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Email address not found.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>

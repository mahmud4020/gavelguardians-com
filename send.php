<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path to autoload.php according to your setup

// Function to validate input data
function validateInput($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}

// Define variables and initialize with empty values
$fullName  = $email = $phone = $leadId = "";
$fullName_err = $email_err = $phone_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Lead id
    $leadId = $_POST['universal_leadid'];

    // Validate First Name
    if (empty($_POST["fullName"])) {
        $fullName_err = "Please type Full Name.";
    } else {
        $fullName = validateInput($_POST["fullName"]);
    }


    // Validate customer email
    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_err = "Please enter a valid email address.";
    } else {
        $email = validateInput($_POST["email"]);
    }


    // Validate customer phone
    if (empty($_POST["phone"])) {
        $phone_err = "Please enter a valid phone number.";
    } else {
        $phone = validateInput($_POST["phone"]);
    }


    try {
        $mail = new PHPMailer(true);
        try {
            // SMTP configuration
            $mail->isSMTP();
            $mail->Host = 'live.smtp.mailtrap.io'; // Replace with your SMTP host
            $mail->SMTPAuth = true;
            $mail->Username = 'smtp@mailtrap.io'; // Replace with your SMTP username
            $mail->Password = 'e3ae1b00e21efe60f772c8c1977579fe'; // Replace with your SMTP password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Sender and recipient details
            $mail->setFrom('noreply@callnow247.com', 'Lead - Gavel Guardians'); // Replace with your email and name
            $mail->addAddress('yunus@getcallednow.com', 'Josh'); // Replace with recipient's email and name

            // Email content
            $mail->isHTML(false);
            $mail->Subject = 'Lead - Gavel Guardians';
            $mail->Body = "Lead Id: $leadId\n----- Here is lead from Gavel Guardians ----- \nFull Name: $fullName\nEmail: $email\nPhone: $phone";


            // Send email
            $mail->send();
            // Set a success message in a session variable
            session_start();
            $_SESSION['success_message'] = 'Your details sent successfully, Our team will contact you soon!';


            // HashedData
            $fullName = hash('sha256', $fullName);
            $email_hash = hash('sha256', $email);
            $phone_hash = hash('sha256', $phone);

            // Redirect back to the index page
            header('Location: thank-you.php?n=' . urlencode($fullName) . '&e=' . urlencode($email_hash) . '&p=' . urlencode($phone_hash));


            exit();
        } catch (Exception $e) {
            echo "Oops! Something went wrong: {$mail->ErrorInfo}";
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    } catch (\Throwable $th) {
        echo "An error occurred: {$th->getMessage()}";
    }

    // If there are no errors, proceed to send email

}

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $whatsapp = $_POST['whatsapp'];
    $complaint = $_POST['complaint'];

    // Compose the email message
    $to = 'empower404@gmail.com'; // Replace with the desired recipient email address
    $subject = 'New Complaint Submitted';
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Mobile Number: $mobile\n";
    $message .= "WhatsApp Number: $whatsapp\n";
    $message .= "Complaint: $complaint";

    // Set additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for submitting your complaint, $name! We have received your message.";
    } else {
        echo "Error: Failed to send the email. Please try again later.";
    }
} else {
    // If someone tries to directly access the PHP file without submitting the form
    echo "Error: Invalid request";
}
?>

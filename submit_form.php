<?php
// Check if the form data has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST["fname"];
    $companyName = $_POST["cname"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["ynumber"];
    $budget = $_POST["budget"];
    $hearAboutUs = $_POST["hear-us"];
    $services = implode(", ", $_POST["services"]);
    $projectText = $_POST["project-text"];

    // Email recipient (company email should go here)
    $recipientEmail = "info@buysmanagement.co.za";

    // Email subject
    $subject = "New Contact Form Submission";

    // Email message
    $message = "Name: $name\n";
    $message .= "Company Name: $companyName\n";
    $message .= "Email: $email\n";
    $message .= "Phone Number: $phoneNumber\n";
    $message .= "Budget: $budget\n";
    $message .= "Heard About Us: $hearAboutUs\n";
    $message .= "Services Needed: $services\n";
    $message .= "Project Details:\n$projectText";

    // Send the email
    $success = mail($recipientEmail, $subject, $message);

    if ($success) {
        // Email sent successfully
        echo "Thank you! Your message has been sent.";
    } else {
        // Email sending failed
        echo "Failed to send the email.";
    }
} else {
    // If the form data was not submitted via POST
    echo "Form submission is not allowed.";
}
?>

<?php
// Database connection parameters
$servername = "localhost"; // Change if needed
$username = "springernature_user"; // Your database username
$password = "qkpUD*qh(NDf"; // Your database password
$dbname = "springernature_db"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO popup_form(name, email, phone, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $phone, $message);

// Get the values from POST
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Execute the statement
if ($stmt->execute()) {
    // Prepare email
    $to = "info@springernaturepublications.com"; // Replace with your email address
    $subject = "New Form Submission";
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone: $phone\n";
    $email_body .= "Message: $message\n";

    // Set the headers
    $from_email = "admin@springernaturepublications.com";
    $headers = "From: Springer Nature Publications <$from_email>\r\n";
    $headers .= "Reply-To: $email\r\n"; // Optional: reply-to header

    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Thank you for your submission!";
    } else {
        echo "Error sending email.";
    }
} else {
    echo "Error: " . $stmt->error;
}

// Close the connections
$stmt->close();
$conn->close();
?>

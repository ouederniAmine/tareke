<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["NAME"];
    $email = $_POST["EMAIL"];
    $message = $_POST["Message"];
    $to = "wassimnefzi120@gmail.com";  // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    mail($to, $subject, $message, $headers);
    // Optionally, you can redirect the user to a thank you page
    header("Location: thank-you.html");
} else {
    // Handle the form submission error
    echo "Oops! Something went wrong.";
}
?>
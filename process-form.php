<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $company = $_POST["company"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "al.dorobalo@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    $messageBody = "First Name: $firstName\n"
                 . "Last Name: $lastName\n"
                 . "Company/Organization: $company\n"
                 . "Email: $email\n"
                 . "Phone: $phone\n"
                 . "Message: $message";

    // Отправка письма
    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Form submitted successfully!";
    } else {
        echo "Form submission failed.";
    }

    // Очистка формы
    $firstName = $lastName = $company = $email = $phone = $message = "";
}
?>

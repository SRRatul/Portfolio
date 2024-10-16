<?php

include('includes/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $conn->real_escape_string(trim($_POST['name']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $message = $conn->real_escape_string(trim($_POST['message']));
    if (!empty($name) && !empty($email) && !empty($message)) {
       
        $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Message sent successfully!</p>";
            echo "<a href='contact.php'>Back to Contact Form</a>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "<p>All fields are required!</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
}
$conn->close();
?>

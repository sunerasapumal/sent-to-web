<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "Gym1";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO customer_details(full_name, email, message) VALUES ('$full_name', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Form submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

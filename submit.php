<?php


$servername = "localhost"; // Change this if your database server is different
$username = "root"; // Change this with your database username
$password = "root"; // Change this with your database password
$dbname = "portfolio"; // Change this with your database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if there is any error in the connection
if ($conn->connect_error) {
  die("Error in the connection: " . $conn->connect_error);
}

// Get the data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$company = $_POST['company'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Prepare the SQL query
$sql = "INSERT INTO messages (name, email, company, subject, message)
VALUES ('$name', '$email', '$company', '$subject', '$message')";

// Execute the SQL query
if ($conn->query($sql) === TRUE) {
  echo "Message sent successfully.";
} else {
  echo "Error sending message: " . $conn->error;
}

// Close the database connection
$conn->close();


?>
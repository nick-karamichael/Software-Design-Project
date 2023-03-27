<?php
// Retrieve the email and password values from the form submission
$email = $_POST['email'];
$password = $_POST['password'];

// Connect to the MySQL database
$servername = "localhost";
$username = "myuser";
$password = "mypassword";
$dbname = "sd_project";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Insert the email and password values into the 'users' table in your database
$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
if ($conn->query($sql) === FALSE) {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

// Redirect the user to a confirmation page - change to the users GUI when that page is ready
header('Location: confirmation.html');
exit();
?>
<?php
$servername = "localhost"; // Change to your database server
$username = "username"; // Change to your database username
$password = "password"; // Change to your database password
$dbname = "database_name"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$birthday = $_POST['birthday'];
$country = $_POST['country'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security

$sql = "INSERT INTO users (first_name, last_name, birthday, country, email, password)
VALUES ('$first_name', '$last_name', '$birthday', '$country', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Inscription réussie !";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

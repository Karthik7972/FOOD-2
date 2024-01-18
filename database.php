<?php
$servername = '127.0.0.1';
$username = 'root'; // Change this to your MySQL username
$password = ''; // Change this to your MySQL password
$dbname = 'online_food_porta'; // Change this to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}
?>

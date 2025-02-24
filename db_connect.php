<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "campus360";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "library";

$conn = new mysqli($server, $user, $password, $db);

if ($conn->connect_error) {
echo "Failed to connect to MySQL: " . $conn -> connect_error;
exit();
}

?>

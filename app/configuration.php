
<?php
$servername = "mysql";
$username = "app_user";
$password = "password";
$db_name = "mysqldb";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

// links

$home_url = "index.php";
$insert_url = "insert.php";



?>

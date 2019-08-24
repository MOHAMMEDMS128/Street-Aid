<?php
$servername = "localhost";
$name = 'root';
$password = "";
$dbname = "streetaid";

$conn = new mysqli($servername, $name, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	
	$name = $_POST['name']; 
	$email = $_POST['email']; 
	$password = $_POST['password']; 
$sql = "INSERT INTO users (name, email, password) 
VALUES ('$name','$email','$password')";

if (mysqli_query($conn, $sql)) {
   header('location: profile.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
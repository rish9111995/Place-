
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";
$name=$_GET['name'];
$age=$_GET['age'];
$gender = $_GET['gender'];
$conn = mysqli_connect($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
echo "connected";
$sql = "INSERT INTO sample values ('$name',$age,'$gender')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

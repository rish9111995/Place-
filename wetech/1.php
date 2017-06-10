
<?php
$name=$_GET['name'];
$age=$_GET['age'];
$gender = $_GET['gender'];
$conn = mysqli_connect("localhost","root","","test1");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
echo "connected";
$sql = "INSERT INTO demo('$name',$age,'$gender')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

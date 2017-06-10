<?php
$con=mysqli_connect("localhost","root","","test1");
if($con)
{
	
	
}
else
{
	echo"not connected";
}
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO contactus(name,email,phone,comment) 
VALUES('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[comment]')";

if (mysqli_query($con,$sql))
 {
 header('Refresh: 0; URL =index.html');
  }
 
mysqli_close($con);
?> 
<?php
$con=mysqli_connect("localhost","root","","test1");
if($con)
{
	echo"connected";
}
else
{
	echo"not connected";
}
// Check connection
//if (mysqli_connect_errno())
  //{
  //echo "Failed to connect to MySQL: " . mysqli_connect_error();
  //}

$sql="INSERT INTO contactus(name,email,phone,comment) 
VALUES('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[comment]')";

if (mysqli_query($con,$sql))
  {
	  echo "1 record added";
  }
 


mysqli_close($con);
?> 
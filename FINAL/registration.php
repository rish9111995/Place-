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

$sql="INSERT INTO registration(name,highschool,intermediate,graduation,postgraduation,interest,email,number) 
VALUES('$_POST[name]','$_POST[highschool]','$_POST[intermediate]','$_POST[graduation]','$_POST[postgraduation]','$_POST[interest]','$_POST[email]','$_POST[number]')";

if (mysqli_query($con,$sql))
  {
	  echo "1 record added";
  }
 


mysqli_close($con);
?> 
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
//if (mysqli_connect_errno())
  //{
  //echo "Failed to connect to MySQL: " . mysqli_connect_error();
  //}

$sql="INSERT INTO tpo_info(name,department,email,number) 
VALUES('$_POST[name]','$_POST[department]','$_POST[email]','$_POST[number]')";

if (mysqli_query($con,$sql))
  {
	 header('Refresh:0 ; URL = tpo_account.html');
  }
 


mysqli_close($con);
?> 
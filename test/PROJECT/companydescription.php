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

$sql="INSERT INTO company(cname,venue,arrival,rounds,criteria,description,package) 
VALUES('$_POST[cname]','$_POST[venue]','$_POST[arrival]','$_POST[rounds]','$_POST[criteria]','$_POST[description]','$_POST[package]')";

if (mysqli_query($con,$sql))
  {
	  echo "1 record added";
  }
 


mysqli_close($con);
?> 
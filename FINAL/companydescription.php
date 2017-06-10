<?php
$con=mysqli_connect("localhost","root","","test1");
if($con)
{
}
else
{
	echo"not connected";
}

$sql="INSERT INTO company(cname,venue,arrival,rounds,criteria,description,package) 
VALUES('$_POST[cname]','$_POST[venue]','$_POST[arrival]','$_POST[rounds]','$_POST[criteria]','$_POST[description]','$_POST[package]')";

if (mysqli_query($con,$sql))
  {
	 header('Refresh:0 ; URL = tpo_account.html');
  }
 


mysqli_close($con);
?> 
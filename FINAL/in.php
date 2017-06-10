<html>
<head>

</head>
<?php
  

$conn = mysqli_connect("localhost","root","","test1");

session_start();


if (isset($_POST['uname']) and isset($_POST['psw']))
{

$username = $_POST['uname'];
$password = $_POST['psw'];
$_SESSION['username']=$username;
$query = "SELECT * FROM log WHERE username='$username' and password='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

    if ($count == 1)
        {
         $_SESSION['username'] = $username;
        }
     else
        {
	header("location:login2.html");
         }
}
if (isset($_SESSION['username']))
{
$username = $_SESSION['username'];

       if( $username=='tpo' && $password=='tpo')
        {
	 header('Refresh: 0; URL = tpo_account.html');
         }
       else
        {
	 header('Refresh: 0; URL = student_account.php');
         }
}

?>
</html>
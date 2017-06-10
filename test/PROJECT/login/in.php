<html>
<?php
  

$conn = mysqli_connect("localhost","root","","test");

session_start();


if (isset($_POST['uname']) and isset($_POST['psw']))
{

$username = $_POST['uname'];
$password = $_POST['psw'];

$query = "SELECT * FROM log WHERE username='$username' and password='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

    if ($count == 1)
        {
         $_SESSION['username'] = $username;
        }
     else
        {
        $fmsg = "Invalid Login Credentials.";
         }
}
if (isset($_SESSION['username']))
{
$username = $_SESSION['username'];
echo "welcome  ". $username;
echo "This is the Members Area";
  header('Refresh: 2; URL = logout.html');
}

?>
</html>
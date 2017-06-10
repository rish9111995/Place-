<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="acc.css" />
<div class="topnav" id="myTopnav">
<div class="text_logo">Place@</div>
<a href="feedback.html">Feedback</a>
 <a href="index.html">Contact Us</a>
        <a href="index.html">Practise</a>
 
   <a href="student_account.html">My Account</a>
  <a href="index.html">About Us</a>
   <a href="index.html"> Home</a>
  
 </div>
 <div class="content">
       <div class="vertical-menu">
  <h4><b><a href="update_profile.html">Update Profile</a><br />
  <a href="upload_cv.html">Upload CV</a><br />
  <a href="upload_photo.html">Upload Photo</a><br />
  <a href="change_password.html">Change Password</a><br />
  <a href="view-paginated.php">Upcoming Companies</a><br />
  <a href="logout.php">LOGOUT</a></b></h4><br />
       </div>
       
       <div class="data">
       <center>list of upcoming companies are shown here
       <title>Upcoming companies</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<h1><center>View List of companies</center></h1>

<?php
// connect to the database
include('../test/connect-db.php');

// number of results to show per page
$per_page = 5;

// figure out the total pages in the database
if ($result = $mysqli->query("SELECT * FROM company"))
{
if ($result->num_rows != 0)
{
$total_results = $result->num_rows;
// ceil() returns the next highest integer value by rounding up value if necessary
$total_pages = ceil($total_results / $per_page);

// check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
if (isset($_GET['page']) && is_numeric($_GET['page']))
{
$show_page = $_GET['page'];

// make sure the $show_page value is valid
if ($show_page > 0 && $show_page <= $total_pages)
{
$start = ($show_page -1) * $per_page;
$end = $start + $per_page;
}
else
{
// error - show first set of results
$start = 0;
$end = $per_page;
}
}
else
{
// if page isn't set, show first set of results
$start = 0;
$end = $per_page;
}

// display pagination

for ($i = 1; $i <= $total_pages; $i++)
{
if (isset($_GET['page']) && $_GET['page'] == $i)
{
echo $i . " ";
}
else
{
echo "<a href='view-paginated.php?page=$i'>$i</a> ";
}
}
echo "</p>";

// display data in table
echo "<table border='1' cellpadding='10'>";
echo "<tr> <th>ID</th> <th>Company's Name</th> <th>Venue</th> <th>Arrival Date</th> <th>Rounds</th><th>Criteria</th><th>Description</th><th>Package</th></tr>";

// loop through results of database query, displaying them in the table
for ($i = $start; $i < $end; $i++)
{
// make sure that PHP doesn't try to show results that don't exist
if ($i == $total_results) { break; }

// find specific row
$result->data_seek($i);
$row = $result->fetch_row();

// echo out the contents of each row into a table
echo "<tr>";
echo '<td>' . $row[0] . '</td>';
echo '<td>' . $row[1] . '</td>';
echo '<td>' . $row[2] . '</td>';
echo '<td>' . $row[3] . '</td>';
echo '<td>' . $row[4] . '</td>';
echo '<td>' . $row[5] . '</td>';
echo '<td>' . $row[6] . '</td>';
echo '<td>' . $row[7] . '</td>';
echo "</tr>";
}

// close table>
echo "</table>";
}
else
{
echo "No results to display!";
}
}
// error with the query
else
{
echo "Error: " . $mysqli->error;
}

// close database connection
$mysqli->close();

?>


</body>

       </center>
       </div>
</div>
</body>
</html>

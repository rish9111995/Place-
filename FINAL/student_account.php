<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

</head>
<?php session_start(); ?>
<body>
<link rel="stylesheet" type="text/css" href="acc.css" />
<div class="topnav" id="myTopnav">
<div class="text_logo"><?php echo $_SESSION['username'];?></div>
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
  <a href="change_password.html#">Change Password</a><br />
  <a href="view-paginated.php">Upcoming Companies</a><br />
  <a href="logout.php">LOGOUT</a></b></h4><br />
  
       </div>
      <div class="data" style="background-image:url(img5.jpg)">
            <style>
/* Full-width input fields */
input[type=text],input[type=checkbox],input[type=date],input[type=email],input[type=integer], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>

  <form class="modal-content animate" >
    <div class="imgcontainer">
       <div class="container">
     
      <label><b><h3>This is your playground for the placements. Do keep a watch on it regularly.</h3></b></label><br />
      
  </form>


       </div>
</div>


       </div>
</div>
</body>  
</html>
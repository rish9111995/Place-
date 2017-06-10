
<form action=”” method=”post”>
<input type=”radio” name=”radio” value=”Car”>Radio 1
<input type=”radio” name=”radio” value=”Bike”>Radio 2
<input type=”radio” name=”radio” value=”Truck”>Radio 3
<input type=”submit” name=”submit” value=”Your Mode” />
</form>
<?php
if (isset($_POST[‘submit’])) {
if(isset($_POST[‘radio’]))
{
echo “Your mode of transportation is :”.$_POST[‘radio’];  
}}
?>

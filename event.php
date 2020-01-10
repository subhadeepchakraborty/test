<?php
$servername="localhost";
$username="root";
$password="admin";
$dbname="event";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
echo("sdsacx");

}
error_reporting(0);

$title = $_POST['title_of_event'];
$description=$_POST['description_of_event'];
$artist=$_POST['artists_of_event'];
$sd=$_POST['startdate'];
$ed=$_POST['enddate'];
$time = $_POST['time1'] . ':' . $_POST['time2'];
$place=$_POST['place'];


$type=$_POST['type'];
$query="INSERT INTO EVENT VALUES ('$title','$description','$artist','$sd','$ed','$time','$type','$place')";
mysqli_query($conn,$query);



?>

<!DOCTYPE html>
<html>
<link href="event.css" rel="stylesheet">
<head><script src="jquery-3.4.1.js"></script>

</head>

<center>

<h1>
  ADMIN PANEL
</h1>
</center>
<br><br><br><br>
<center>
<div id="block">

<form name="form" action="event.php" method="post">
<input type="text" placeholder="TITLE OF EVENT" name="title_of_event"><br><br><br><br><br>
<input type="text" placeholder="DESCRIPTION OF EVENT" name="description_of_event"><br><br><br><br><br>
<input type="text" placeholder="ARTIST(s) OF EVENT" name="artists_of_event"><br><br><br><br><br>
<div id="lc">
<label >&nbsp<font size="25px">Start Date:</label></font><input name="startdate" type="date" id="calender1" name="calender1">
<img width="60px" height"60px" name="im1" src="ca.jpg" onclick="display()"></div>
<div id="rc">
<label  >&nbsp<font size="25px">End Date:</label></font><input name="enddate" type="date" id="calender2" name="calender2">
<img width="60px" height"60px" name="im2" src="ca.jpg" onclick="display1()"></div>
<br><br><br><br>

<div id="timeblock"><font>TIME FOR EVENT:&nbsp&nbsp</font><input name="time1" id="time"  type="number" placeholder="00" max="24">
  <input name="time2" id="time" placeholder="00" max="60" type="number" max="60"><small>(TIME WILL BE IN 24hr FORMAT)</small><br></div>
<select name="type">
  <b><option value="FREE"><b>FREE</b></option>
  <option value="RSVP"><b>RSVP</b></option>
  <option value="CURRENCY(amount)"><b>CURRENCY(amount)</b></option>

</select>
<input type="text" name="place">
<br><br><br>
<button id="button1" >ADD</button>
<button id="button2" >ADD Another</button>
</form>
</div>






</center>


<script>
function display()
{
  document.form.calender1.style.display="block";
  document.im1.style.display="none";
}
function display1()
{
  document.form.calender2.style.display="block";
  document.im2.style.display="none";
}
</script>

</html>

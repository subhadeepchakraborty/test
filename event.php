

<!DOCTYPE html>
<html>
<link href="event.css" rel="stylesheet">

</head>

<center>

<h1>
<b> ADMIN PANEL</b>
</h1>
</center>
<body bgcolor="#ff5e6c">
<br><br><br><br>
<center>
<div id="block">

<form name="form" action="event.php" method="post">

<input type="text" placeholder="TITLE OF EVENT" name="title_of_event"><br><br><br><br><br>
<input type="text" placeholder="DESCRIPTION OF EVENT" name="description_of_event"><br><br><br><br><br>
<input type="text" placeholder="ARTIST(s) OF EVENT" name="artists_of_event"><br><br><br><br><br>
<div id="lc">
<label >&nbspStart Date:&nbsp&nbsp</label></font><input name="startdate" type="date" id="calender1" name="calender1">


<label  >&nbspEnd Date:&nbsp&nbsp</label></font><input name="enddate" type="date" id="calender2" name="calender2">
</div>
<br><br><br><br>
<br><br>
<div id="timeblock"><font>TIME FOR EVENT:&nbsp&nbsp</font><input name="time1" id="time"  type="number" placeholder="00" min="0" max="24">
  <input name="time2" id="time" placeholder="00" min="0"  type="number" max="60"><small>(TIME WILL BE IN 24hr FORMAT)</small><br></div>
<br><br><br><br>
<select name="type">
  <b><option value="FREE"><b>FREE</b></option>
  <option value="RSVP"><b>RSVP</b></option>
  <option value="CURRENCY(amount)"><b>CURRENCY(amount)</b></option>

</select><br><br>
<input type="text" placeholder="PLACE/CITY of event" name="place">
<br><br><br>
<input id="button1"  value="ADD" type="submit" />
<input type="submit"  id="submit" name="submit" value="Click" />
</form>
</div>






</center>

</body>

</html>
<?php
$servername="remotemysql.com";
$username="qsMyHkfpFx";
$password="AtMdtojawW";
$dbname="qsMyHkfpFx";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
echo "s";
error_reporting(0);
}
$title = $_POST['title_of_event'];
$description=$_POST['description_of_event'];
$artist=$_POST['artists_of_event'];
$sd=$_POST['startdate'];
$ed=$_POST['enddate'];
$time = $_POST['time1'] . ':' . $_POST['time2'];
$type=$_POST['type'];
$place=$_POST['place'];


$query="INSERT INTO event(TITLE_OF_EVENT,DESCRIPTION,ARTISTS,START_DATE,END_DATE,TIME_OF_EVENT,ENTRY_TYPE_OF_EVENT,PLACE) VALUES ('$title','$description','$artist','$sd','$ed','$time','$type','$place')";
mysqli_query($conn,$query);


?>

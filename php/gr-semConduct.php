<?php
$date = $_POST["date"];
$position = $_POST["position"];
$seminarName = $_POST["seminar_name"];
$sponsorOrganization = $_POST["sponsor_organization"];



$mysql_date_now = date("Y-m-d H:i:s");

$connect = mysql_connect("localhost:3306", "root", "root"); 
mysql_select_db("userdata", $connect);
$user_info = "INSERT INTO ResumeGeneratorSemConducted (create_date, date, position, seminar_name, sponsor_organization) VALUES ('$mysql_date_now' , '$date', '$position', '$seminarName', '$sponsorOrganization')"; 

mysql_query($user_info, $connect);

mysql_close($connect); 
?>
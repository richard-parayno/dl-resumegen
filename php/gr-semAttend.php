<?php
$date = $_POST["date"];
$seminarName = $_POST["seminar_name"];
$sponsorOrganization = $_POST["sponsor_organization"];



$mysql_date_now = date("Y-m-d H:i:s");

$connect = mysql_connect("localhost:3306", "root", "root"); 
mysql_select_db("userdata", $connect);
$user_info = "INSERT INTO ResumeGeneratorSemAttended (create_date, date, seminar_name, sponsor_organization) VALUES ('$mysql_date_now' ,'$date', '$seminarName','$sponsorOrganization')"; 

mysql_query($user_info, $connect);

mysql_close($connect); 
?>
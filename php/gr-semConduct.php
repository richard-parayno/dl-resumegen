<?php
$month = $_POST["month"];
$day = $_POST["day"];
$year = $_POST["year"];
$position = $_POST["position"];
$seminarName = $_POST["seminar_name"];
$sponsorOrganization = $_POST["sponsor_organization"];



$mysql_date_now = date("Y-m-d H:i:s");

$connect = mysql_connect("localhost:3306", "root", "root"); 
mysql_select_db("userdata", $connect);
$user_info = "INSERT INTO ResumeGenerator-SemConducted (create_date, month, day, year, position, seminarName, sponsorOrganization) VALUES ('$mysql_date_now' ,'$month', '$day','$year', '$position', '$seminarName', '$sponsorOrganization')"; 

mysql_query($user_info, $connect);

mysql_close($connect); 
?>
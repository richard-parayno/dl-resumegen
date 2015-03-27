<?php
$month = $_POST["month"];
$day = $_POST["day"];
$year = $_POST["year"];
$placeOfBirth = $_POST["place_of_birth"];
$extraInfo = $_POST["extra_info"];

$mysql_date_now = date("Y-m-d H:i:s");

$connect = mysql_connect("localhost:3306", "root", "root"); 
mysql_select_db("userdata", $connect);
$user_info = "INSERT INTO ResumeGenerator-PersBackground (create_date, month, day, year, place_of_birth, extra_info) VALUES ('$mysql_date_now' ,'$month', '$day','$year', '$placeOfBirth', '$extraInfo')"; 

mysql_query($user_info, $connect);

mysql_close($connect); 
?>
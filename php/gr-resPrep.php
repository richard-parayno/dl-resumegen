<?php
$month = $_POST["month"];
$year = $_POST["year"];
$title = $_POST["title"];
$description = $_POST["description"];

$mysql_date_now = date("Y-m-d H:i:s");

$connect = mysql_connect("localhost:3306", "root", "root"); 
mysql_select_db("userdata", $connect);
$user_info = "INSERT INTO ResumeGeneratorResPrep (create_date, month, year, title, description) VALUES ('$mysql_date_now' ,'$month', '$year','$title', '$description')"; 

mysql_query($user_info, $connect);

mysql_close($connect); 
?>
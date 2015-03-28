<?php
$yearOfGrad = $_POST["year_of_graduation"];
$school = $_POST["school"];
$awards = $_POST["awards"];

$mysql_date_now = date("Y-m-d H:i:s");

$connect = mysql_connect("localhost:3306", "root", "root"); 
mysql_select_db("userdata", $connect);
$user_info = "INSERT INTO ResumeGeneratorEducBG (create_date, year_of_graduation, school, awards) VALUES ('$mysql_date_now' ,'$yearOfGrad', '$school','$awards')"; 

mysql_query($user_info, $connect);

mysql_close($connect); 
?>
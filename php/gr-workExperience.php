<?php
$dateStarted = $_POST["date_started"];
$dateEnded = $_POST["date_ended"];
$position = $_POST["position"];
$company = $_POST["company"];
$workDescription = $_POST["work_description"];


$mysql_date_now = date("Y-m-d H:i:s");

$connect = mysql_connect("localhost:3306", "root", "root"); 
mysql_select_db("userdata", $connect);
$user_info = "INSERT INTO ResumeGenerator-WorkExp (create_date, date_started, date_ended, position, company, work_description) VALUES ('$mysql_date_now' ,'$dateStarted', '$dateEnded','$position', '$company', '$workDescription')"; 

mysql_query($user_info, $connect);

mysql_close($connect); 
?>
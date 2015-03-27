<?php
$name = $_POST["name"];
$position = $_POST["position"];
$contactDetails = $_POST["contact_details"];
$extraInfo = $_POST["extra_info"];

$mysql_date_now = date("Y-m-d H:i:s");

$connect = mysql_connect("localhost:3306", "root", "root"); 
mysql_select_db("userdata", $connect);
$user_info = "INSERT INTO ResumeGenerator-Refs (create_date, name, position, contact_details, extra_info) VALUES ('$mysql_date_now' ,'$name', '$position','$contactDetails', '$extraInfo')"; 

mysql_query($user_info, $connect);

mysql_close($connect); 
?>
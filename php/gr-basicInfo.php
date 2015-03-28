<?php
$address = $_POST["address"];
$telephoneNumber = $_POST["telephone_number"];
$mobileNumber = $_POST["mobile_number"];
$emailAdd = $_POST["email"];

$mysql_date_now = date("Y-m-d H:i:s");

$connect = mysql_connect("localhost:3306", "root", "root"); 
mysql_select_db("userdata", $connect);
$user_info = "INSERT INTO ResumeGeneratorBasicInfo (create_date, address, telephone_number, mobile_number) VALUES ('$mysql_date_now' ,'$address', '$telephone_number','$mobile_number')"; 

mysql_query($user_info, $connect);

mysql_close($connect); 
?>
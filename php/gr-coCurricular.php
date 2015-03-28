<?php
$year = $_POST["year"];
$position = $_POST["position"];
$organization = $_POST["organization"];



$mysql_date_now = date("Y-m-d H:i:s");

$connect = mysql_connect("localhost:3306", "root", "root"); 
mysql_select_db("userdata", $connect);
$user_info = "INSERT INTO ResumeGeneratorCoCurricularAct (create_date, year, position, organization) VALUES ('$mysql_date_now' ,'$year', '$position','$organization')"; 

mysql_query($user_info, $connect);

mysql_close($connect); 
?>
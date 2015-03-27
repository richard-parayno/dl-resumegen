<?php
$firstName = $_POST["first_name"];
$lastName = $_POST["last_name"];
$birthDay = $_POST["birth_day"];
$college = $_POST["college"];
$email = $_POST["email"];
$passWord = $_POST["password"];
$mysql_date_now = date("Y-m-d H:i:s");

$connect = mysql_connect("localhost:3306", "root", "root"); 
mysql_select_db("userdata", $connect);
$user_info = "INSERT INTO User (create_date, first_name, last_name, birth_day, college, email, password) VALUES ('$mysql_date_now' ,'$firstName', '$lastName','$birthDay', '$college', '$email', '$passWord')"; 

mysql_query($user_info, $connect);

mysql_close($connect); 
?>
<?php
session_start();
require_once 'ajax/db.php';
$email =  $_POST['phpro_username'];
$password = $_POST['phpro_password'];
//echo $email;
//echo $password;
if(isset($_POST['submit']))
{
$query = "select * from user where email like '$email'";
//$query="insert into user values('','$email','$password')";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$arr[] = $row;
										 }

						  }



}
?>
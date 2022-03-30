<?php

if(isset($_POST['btn'])) {
	$username = $_POST['userName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2>User Name is <?php if(isset($username)){
		echo $username;}
		?></h2>
	<h2>User email is<?php if(isset($email)){
		echo $email;}
		?></h2>
	<h2>User Password is<?php if(isset($password)){
		echo $password;}
		?></h2>
</body>
</html>

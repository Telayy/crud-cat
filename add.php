<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$category_name = $_POST['category_name'];
		$sql = "INSERT INTO `categories`(category_name)VALUES('$category_name');";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Category added successfully';
		}
		

		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>

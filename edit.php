<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$cat_id = $_POST['cat_id'];
		$category_name = $_POST['category_name'];
		$sql = "UPDATE categories SET category_name = '$category_name' WHERE cat_id = '$cat_id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Category updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating category';
		}
	}
	else{
		$_SESSION['error'] = 'Select category to edit first';
	}

	header('location: index.php');

?>
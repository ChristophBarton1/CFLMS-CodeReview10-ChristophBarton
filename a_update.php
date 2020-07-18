<?php
	require_once 'db_connect.php';

	if($_POST){
		$id = $_POST["id"];
		$first_name = $_POST["first_name"];
		$last_name = $_POST["last_name"];
		$dob =$_POST["dob"];

		$sql = "UPDATE `customer` SET `first_name`='$first_name',`last_name`='$last_name',`date_of_birth`='$dob'
			WHERE id= $id";

		if(mysqli_query($conn, $sql)){
			echo "success <br> <a href='../index.php'>Back to Home page</a>";
		}else {
			echo "error";
		}
	}


?>
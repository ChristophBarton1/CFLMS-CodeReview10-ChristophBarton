<?php
	require_once 'db_connect.php';

	if($_POST){
		$id = $_POST["id"];
		$title= $_POST["title"];
		$genre= $_POST["genre"];
		$author= $_POST["author"];
		$ISBN_Code=$_POST["ISBN_Code"];


		$sql = "UPDATE `media` SET `title`='$title',`genre`='$genre',`author`='$author',`ISBN_Code`='$ISBN_Code'
			WHERE id= $id";

		if(mysqli_query($conn, $sql)){
			echo "success <br> <a href='../index.php'>Back to Home page</a>";
		}else {
			echo "error";
		}
	}


?>
<?php
	require_once 'db_connect.php';

	if($_POST){
		$title= $_POST["title"];
		$genre= $_POST["genre"];
		$author= $_POST["author"];
		$ISBN_Code=$_POST["ISBN_Code"];

		$sql ="INSERT INTO `media`(`title`, `genre`,`author`, `ISBN_Code`) VALUES ('$title', '$genre', '$author','$ISBN_Code')";

		if(mysqli_query($conn, $sql)){
			echo "success <br>
				<a href='../index.php'>Back to the home page</a>
			";
		}else{
			echo "error";
		}
	}
?>
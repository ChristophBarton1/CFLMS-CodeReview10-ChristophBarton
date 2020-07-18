<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="actions/a_delete.php" method="Post">
		
	</form>

</head>
<body>

<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']){  
   $id = $_GET['id'];

   $sql = "SELECT * FROM customer WHERE id = $id" ;
   
   if(mysqli_query($conn, $sql)){
   		echo "success <br> <a href='index.php' >Back to home page</a>";
   } else { 
   		echo "error";
   }
   }

?>
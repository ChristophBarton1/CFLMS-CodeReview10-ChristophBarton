<?php
		require_once 'actions/db_connect.php';
		if($_GET["id"]){
		$id = $_GET["id"];

		 	 $sql = "SELECT * FROM media WHERE id = $id";
		$result = mysqli_query($conn, $sql);

		$row = $result->fetch_assoc();

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<form action="actions/a_update.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
		<input type="text" name="title" value="<?php echo $row['title'] ?>">
		<input type="text" name="genre" value="<?php echo $row['genre'] ?>">
		<input type="text" name="author" value="<?php echo $row['author'] ?>">
		<input type="number" name="ISBN_Code" value="<?php echo $row['ISBN_Code'] ?>"> 
		<input type="submit">
	</form>
</body>
</html>
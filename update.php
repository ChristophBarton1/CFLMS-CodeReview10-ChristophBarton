<?php
		require_once 'actions/db_connect.php';
		if($_GET["id"]){
		$id = $_GET["id"];

		 	 $sql = "SELECT * FROM customer WHERE id = $id";
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
		<input type="text" name="first_name" value="<?php echo $row['first_name'] ?>">
		<input type="text" name="last_name" value="<?php echo $row['last_name'] ?>">
		<input type="date" name="dob" value="<?php echo $row['date_of_birth'] ?>">
		<input type="submit">
	</form>
</body>
</html>
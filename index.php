<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<?php
		include ("actions/db_connect.php");

		$sql ="SELECT * FROM customer";
		$result = mysqli_query($conn, $sql);

		if($result->num_rows == 0){
			echo "No result";
		}elseif($result->num_rows == 1){
			$row = $result->fetch_assoc();
			echo $row["first_name"]." ". $row["last_name"]." ".$row["date_of_birth"]." ".$row["active"];
		}else {
			$rows = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($rows as $key => $value)   {
				echo $value["id"]. " ---- " .$value["first_name"]." ".$value["last_name"]."

					".$value["active"]." <a href='update.php?id=".$value["id"]."
					'>Update</a> <a href='delete.php?id=".$value["id"]."'>Delete</a><br>";
			}
		}
	?>

</body>
</html>
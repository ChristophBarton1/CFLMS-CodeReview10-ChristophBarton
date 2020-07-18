<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<?php
		include ("actions/db_connect.php");

		$sql ="SELECT * FROM media";
		$result = mysqli_query($conn, $sql);

		if($result->num_rows == 0){
			echo "No result";
		}elseif($result->num_rows == 1){
			$row = $result->fetch_assoc();
			echo $row["title"]." ". $row["genre"]." ".$row["author"]." ".$row["ISBN_Code"]." ". $row["active"];
		}else {
			$rows = $result->fetch_all(MYSQLI_ASSOC);
			foreach ($rows as $key => $value)   {
				echo $value["id"]. " ---- " .$value["title"]." ".$value["genre"]."

					".$value["author"]."".$value["ISBN_Code"]." <a href='update.php?id=".$value["id"]."
					'>Update</a> <a href='delete.php?id=".$value["id"]."'>Delete</a><br>";
			}
		}
	?>

</body>
</html>
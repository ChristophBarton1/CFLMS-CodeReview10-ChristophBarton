<?php 

require_once 'db_connect.php';

   if($_GET["id"] { $id = $_GET["id"];
   if($_GET["id"]) { $id = $_GET["id"];

   $sql = "DELETE FROM media WHERE id = $id";
    if($conn->query($sql) === TRUE) {
       echo "<p>Successfully deleted!!</p>" ;
       echo "<a href='../index.php'><button type='button'>Back</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $connect->close();
}

?>
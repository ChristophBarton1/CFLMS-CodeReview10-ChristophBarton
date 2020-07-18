<?php 

$hostName = "localhost";
$username = "root";
$password = "";
$dbname = "cr10_christophbarton_biglibrary";

 
$conn = mysqli_connect($hostName, $username, $password, $dbname);

     if(!$conn){ 
     		echo "error";
} else {
    // echo "Successfully Connected";
}

?>
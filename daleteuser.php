<?php

$namesurname=$_POST["namesurname"];
$Telephone=$_POST["Telephone"];
$Address=$_POST["Address"];
$Username=$_POST["Username"];
$password=$_POST["password"];
$position=$_POST["position"];
echo $namesurname, $Address,$Telephone,$Username,$password,$position;

			$hostname_connectDB = "localhost";
			$database_connectDB = "stock";
		    $username_connectDB = "root";
		    $password_connectDB = "";
		    // Create connection
			$conn = new mysqli($hostname_connectDB, $username_connectDB,$password_connectDB, $database_connectDB);
			mysqli_set_charset($conn,"utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM user (Name,Address,Telephone,Username,Password,Position)
VALUES ('".$namesurname."','".$Address."','".$Telephone."','".$Username."','".$password."','".$position."')" ;


if ($conn->query($sql) === TRUE){
	//echo "eieieieiei";
echo "<script>window.location='info_user.php';</script>";
}	
else
	echo "error" . $conn->error;

	
?>



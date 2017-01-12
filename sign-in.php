<?php

$username=$_POST["user"];
$password=$_POST["pass"];


			$hostname_connectDB = "localhost";
			$database_connectDB = "stock";
		    $username_connectDB = "root";
		    $password_connectDB = "";
		    // Create connection
			$conn = new mysqli($hostname_connectDB, $username_connectDB,$password_connectDB, $database_connectDB);
			mysqli_set_charset($conn,"utf8");

$sql = "SELECT Position, Username, Password FROM user" ;
$result = $conn->query($sql);

echo "<script>alert('".$username."')</script>";
echo "<script>alert('".$password."')</script>";

while($row = $result->fetch_assoc()){///////////////////////////////////error user

	if($row['Username']==$username && $row['Password']==$password){
		echo "<script>alert('".$row['Username']."')</script>";
		echo "<script>alert('".$row['Password']."')</script>";
		if($row['Position']==0){
			echo "<script> window.location='index_manager.html'; </script>";
		}
		else{
		 	echo "<script>window.location='index_employee.html';</script>";
		}
		
	}
	else{
		echo "<script>alert('The username or password that you have entered is incorrect.')</script>";
		echo "<script>window.location='pages/examples/sign-in.html';</script>";
	}
}




?>
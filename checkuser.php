<?php 

session_start();

include_once 'class/db.class.php';

$database = new DB();
 
$result =  $database->query("SELECT * From user WHERE Username ='".$_POST['user']."' && Password ='".$_POST['pass']."'")->find();

if(!empty($result->Name)){
	$_SESSION['UserID'] = $result->UserID;
	$_SESSION['Name'] = $result->Name;
	$_SESSION['Position'] = $result->Position;
	$_SESSION['Image'] = $result->Image;

	header( "Location: /stock/index.php" );
}
else{
	$message = "Username or Password Invalid Please check and enter again";
				echo "<script type='text/javascript'>alert('$message');</script>";
	
				echo "<script>window.location='sign-in.php';</script>";
}
?>
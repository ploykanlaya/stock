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
}
else{
	header( "Location: /stock/sign-in.php" );
}
?>
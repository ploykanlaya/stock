<?php
session_start();

$allPosts = $_POST['Product_ID'];
$countPosts = count($allPosts);


$time=strtotime(date('Y-m-d'));//;วันที่

include_once 'class/db.class.php';

$database = new DB();

$sql = "INSERT INTO returnoder (ReturnOder_ID,ReturnDate,UserID,Name,Status,Position,Wholesalers_ID) VALUES ('".$_POST["ReturnOder_ID"]."','".date('Y-m-d')."','".$_SESSION['UserID']."','".$_SESSION['Name']."','"."0"."','".$_SESSION['Position']."','".$_POST["Wholesalers_ID"]."')" ;

 print_r($sql); 

$database->query($sql);


for ($i=0; $i < $countPosts; $i++) { 
	$sql2="INSERT INTO returnorder_detail (TotalPay,Product_ID,NumberReturn,ReturnOder_ID,created_date,updated_date) VALUES ('".$_POST["TotalPay"][$i]."','".$_POST["Product_ID"][$i]."','".$_POST["NumberReturn"][$i]."','".$_POST["ReturnOder_ID"]."','"."0"."','"."0"."')" ;  
	$database->query($sql2);
}

	



header( "Location: ../stock/return_list.php" );
echo $sql2; exit;
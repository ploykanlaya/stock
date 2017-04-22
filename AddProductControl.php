<?php
session_start();

$allPosts = $_POST['Product_ID'];
$countPosts = count($allPosts);


$time=strtotime(date('Y-m-d'));//;วันที่

include_once 'class/db.class.php';

$database = new DB();

$sql = "INSERT INTO requisition (Requisition_ID,Requisition_Date,UserID,Name,DeliveryDate,Status) VALUES ('".$_POST["Requisition_ID"]."','".date('Y-m-d')."','".$_SESSION['UserID']."','".$_SESSION['Name']."','".""."','"."0"."')" ;

// print_r($sql);exit(); 

$database->query($sql);

for ($i=0; $i < $countPosts; $i++) { 
	$sql2="INSERT INTO requisition_detail (Number_Req,TotalPay,Product_ID,Requisition_ID,created_date,updated_date) VALUES ('".$_POST["Number_Req"][$i]."','".$_POST["TotalPay"][$i]."','".$_POST["Product_ID"][$i]."','".$_POST['Requisition_ID']."','"."0"."','"."0"."')" ;  
	$database->query($sql2);
}




	



header( "Location: /stock/requisition_list.php" );

echo $sql; exit;
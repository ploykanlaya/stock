<?php
session_start();
$allPosts = $_POST['Product_ID'];
$countPosts = count($allPosts);

//;วันที่
$time=strtotime(date('Y-m-d'));
// print_r(date('Y-m-d'));exit();
include_once 'class/db.class.php';

$database = new DB();

$sql = "INSERT INTO purchaseorder (PO_ID,PO_OutDate,UserID,Name,Status) VALUES ('".$_POST["PO_ID"]."','".date('Y-m-d')."','".$_SESSION['UserID']."','".$_SESSION['Name']."','"."0"."')" ;

 // print_r($sql);exit; 

$database->query($sql);

for ($i=0; $i < $countPosts; $i++) { 
	$sql2="INSERT INTO po_detail (TotalPay,Product_ID,Quantity,PO_ID,created_date,updated_date) VALUES ('".$_POST["TotalPay"][$i]."','".$_POST["Product_ID"][$i]."','".$_POST["Quantity"][$i]."','".$_POST["PO_ID"]."','"."0"."','"."0"."')" ;  
	$database->query($sql2);
}





	


header( "Location: /stock/po_list.php" );

echo $sql; exit;

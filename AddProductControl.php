<?php
include_once 'class/db.class.php';

$database = new DB();



$sql = "INSERT INTO requisition (Requisition_ID,Requisition_Date,UserID,Name,DeliveryDate,Status) VALUES ('".$_POST["Requisition_ID"]."','".$_POST["Requisition_Date"]."','".$_POST["UserID"]."','".$_POST["Name"]."','".""."','"."0"."')" ;

$sql2="INSERT INTO requisition_detail (Requisition_ID,Requisition_Date,TotalPay,Number_Req,Product_ID,) VALUES ('".$_POST["Requisition_ID"]."','".$_POST["Requisition_Date"]."','".$_POST["TotalPay"]."','".$_POST["Number_Req"]."','".$_POST["Product_ID"]."',)" ;  

// print_r($sql2); exit; //เอาไว้ดูว่ามันส่งค่าอะไรมา

$database->query($sql);
$database->query($sql2);
header( "Location: /stock/requisition_list.php" );

echo $sql; exit;
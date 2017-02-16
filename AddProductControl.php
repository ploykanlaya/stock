<?php

$time = strtotime($_POST["Requisition_Date"]);//;วันที่

include_once 'class/db.class.php';

$database = new DB();

$sql = "INSERT INTO requisition (Requisition_ID,Requisition_Date,UserID,Name,DeliveryDate,Status) VALUES ('".$_POST["Requisition_ID"]."','".date('Y-m-d', $time)."','".$_POST["UserID"]."','".$_POST["Name"]."','".""."','"."0"."')" ;
//print_r($sql); 

$sql2="INSERT INTO requisition_detail (Number_Req,TotalPay,Product_ID,Requisition_ID,created_date,updated_date) VALUES ('".$_POST["Number_Req"]."','".$_POST["TotalPay"]."','".$_POST["Product_ID"]."','".$_POST["Requisition_ID"]."','"."0"."','"."0"."')" ;  

//print_r($sql2); exit; //เอาไว้ดูว่ามันส่งค่าอะไรมา

$database->query($sql);
$database->query($sql2);
header( "Location: /stock/requisition_list.php" );

echo $sql; exit;
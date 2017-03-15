<?php
//print_r($_POST);exit(); 
 require("Class.php");

$time = strtotime($_POST["ExpDate"]);//;วันที่
 $addwho = new Wholesalers;

$servername = "localhost";
 $username = "root";
 $password = "";
 $database = "stock";

$conn = new mysqli($servername, $username, $password,$database);
 mysqli_set_charset($conn,"utf8");
// print_r($_POST);exit();

$addwho->Wholesalers_Name=$_POST["Wholesalers_Name"];
$addwho->Telephone=$_POST["Telephone"];
$addwho->Email=$_POST["Email"];
$addwho->Address=$_POST["Address"];
$addwho->addwhol($conn,$addwho); 

	?>

<!-- // include_once 'class/db.class.php';

// $database = new DB();

// //print_r($_POST); exit; //เอาไว้ดูว่ามันส่งค่าอะไรมา

// $sql = "INSERT INTO requisition (Requisition_ID,Requisition_Date,UserID,Name,DeliveryDate,Status) VALUES ('".$_POST["Requisition_ID"]."','".$_POST["Requisition_Date"]."','".$_POST["UserID"]."','".$_POST["Name"]."','".""."','"."0"."')" ;

// $sql2="INSERT INTO requisition_detail (Requisition_ID,Requisition_Date,TotalPay,Number_Req,Product_ID) VALUES ('".$_POST["Requisition_ID"]."','".$_POST["Requisition_Date"]."','".$_POST["TotalPay"]."','".$_POST["Number_Req"]."','".$_POST["Product_ID"]."')" ;  



// $database->query($sql);
// $database->query($sql2);
// header( "Location: /stock/requisition_list.php" );

// echo $sql; exit; -->
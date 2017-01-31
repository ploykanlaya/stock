<?php
// require("Class.php");

// $addpro = new Product;

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "stock";
// // Create connection
// $conn = new mysqli($servername, $username, $password,$database);
// mysqli_set_charset($conn,"utf8");

// $addpro->Product_Name=$_POST["Product_Name"];
// $addpro->Price=$_POST["Price"];
// $addpro->Unit=$_POST["Unit"];
// $addpro->Numstock=$_POST["Numstock"];
// $addpro->SafetyStock=$_POST["SafetyStock"];
// $addpro->ExpDate=$_POST["ExpDate"];
// $addpro->Wholesalers_ID=$_POST["Wholesalers_ID"];
// $addpro->ProductType_ID=$_POST["ProductType_ID"];
// $addpro->addproduct($conn,$addpro); 

include_once '/class/db.class.php';

$database = new DB();

print_r($_POST); exit; //เอาไว้ดูว่ามันส่งค่าอะไรมา

$sql = "INSERT INTO Product_ID (Product_ID,Product_Name,Price,Unit)
				VALUES ('".$_POST['Product_ID']."','".$_POST['Product_Name']."','".$_POST['Price']."','".$_POST['Unit']."')" ;


$sql = "INSERT INTO Product (Requisition_ID,Price,Unit,Numstock,SafetyStock,ExpDate,Wholesalers_ID,ProductType_ID)
				VALUES ('".$_POST['Requisition_ID']."','".$addpro->Price."','".$addpro->Unit."','".$addpro->Numstock."','".$addpro->SafetyStock."','".$addpro->ExpDate."','".$addpro->Wholesalers_ID."','".$addpro->ProductType_ID."')" ;
 
$database->query($sql);

header( "Location: /stock/requisition_list.php" );

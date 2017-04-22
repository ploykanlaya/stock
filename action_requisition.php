<?php 

include_once 'class/db.class.php';

 $database = new DB();
//  // echo "<script type='text/javascript'>alert('".$_POST['id']."');</script>";
 $result =  $database->query("UPDATE requisition SET status='".$_POST['status']."' WHERE Requisition_ID='".$_POST['id']."'");

if ($_POST['status'] == 1){
$items =  $database->query("SELECT * FROM requisition_detail WHERE Requisition_ID = ".$_POST['id'])->findAll();

foreach ($items as $field) {
	$result =  $database->query("UPDATE product SET Numstock= Numstock - ".$field->Number_Req." WHERE Product_ID = ".$field->Product_ID);
}


	$date1=date("Y-m-d");
	$result2 =  $database->query("UPDATE requisition SET DeliveryDate='".$date1."' WHERE Requisition_ID='".$_POST['id']."'" );

}


?>
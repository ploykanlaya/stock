<?php 

include_once 'class/db.class.php';

 $database = new DB();
//  // echo "<script type='text/javascript'>alert('".$_POST['id']."');</script>";
 $result =  $database->query("UPDATE returnoder SET status='".$_POST['status']."' WHERE ReturnOder_ID='".$_POST['id']."'");

 if ($_POST['status'] == 1){
$items =  $database->query("SELECT * FROM returnorder_detail WHERE ReturnOder_ID = ".$_POST['id'])->findAll();

foreach ($items as $field) {
	$result =  $database->query("UPDATE product SET Numstock= Numstock - ".$field->NumberReturn." WHERE Product_ID = ".$field->Product_ID);
}
}


?>
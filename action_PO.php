<?php 

include_once 'class/db.class.php';


 $database = new DB();
//  // echo "<script type='text/javascript'>alert('".$_POST['id']."');</script>";
 $result =  $database->query("UPDATE purchaseorder SET status='".$_POST['status']."' WHERE PO_ID='".$_POST['id']."'");
// echo $_POST['Quantity'];

 $items =  $database->query("SELECT * FROM po_detail WHERE PO_ID = ".$_POST['id'])->findAll();

foreach ($items as $field) {
	$result =  $database->query("UPDATE product SET Numstock= Numstock + ".$field->Quantity." WHERE Product_ID = ".$field->Product_ID);
}
 // $result =  $database->query("UPDATE purchaseorder SET status='".$_POST['status']."' WHERE PO_ID='".$_POST['id']."'");

?>
<?php 

include_once 'class/db.class.php';


 $database = new DB();
//  // echo "<script type='text/javascript'>alert('".$_POST['id']."');</script>";
 $result =  $database->query("UPDATE purchaseorder SET status='".$_POST['status']."' WHERE PO_ID='".$_POST['id']."'");
// echo $_POST['Quantity'];
 // $result =  $database->query("UPDATE purchaseorder SET status='".$_POST['status']."' WHERE PO_ID='".$_POST['id']."'");

?>
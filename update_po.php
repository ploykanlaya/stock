<?php 

include_once 'class/db.class.php';
 echo "string";
$database = new DB();
 // var_dump($_POST);
 // die();

$result =  $database->query("UPDATE po_detail SET Quantity='".$_POST['Quantity']."' WHERE 	Product_ID='".$_POST['Product_ID']."'and PO_ID='".$_POST['PO_ID']."'" );


?>
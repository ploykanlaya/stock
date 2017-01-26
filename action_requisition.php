<?php 

include_once '/class/db.class.php';

$database = new DB();
 
$result =  $database->query("UPDATE requisition SET Status='".$_POST['status']."' WHERE Requisition_ID='".$_POST['id']."'");

?>
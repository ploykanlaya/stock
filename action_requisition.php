<?php 

include_once 'class/db.class.php';

 $database = new DB();
//  // echo "<script type='text/javascript'>alert('".$_POST['id']."');</script>";
 $result =  $database->query("UPDATE requisition_detail SET status='".$_POST['status']."' WHERE Product_ID='".$_POST['id']."'");

?>
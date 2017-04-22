<?php 

include_once 'class/db.class.php';


 $database = new DB();
 // $date=date('d/m/Y');

//  // echo "<script type='text/javascript'>alert('".$_POST['id']."');</script>";
 $result =  $database->query("UPDATE purchaseorder SET status='".$_POST['status']."' WHERE PO_ID='".$_POST['id']."' " );


 // echo $result;
// echo $_POST['Quantity'];

 // ."receiveDate=".$date

// Print the array from getdate()
// Return date/time info of a timestamp; then format the output




if ($_POST['status'] == 1){
	 $items =  $database->query("SELECT * FROM po_detail WHERE PO_ID = '".$_POST['id']."' ")->findAll();

	 
	foreach ($items as $field) {

		$result =  $database->query("UPDATE product SET Numstock = Numstock + ".$field->Quantity." WHERE Product_ID = '".$field->Product_ID."' " );

	}


	$date1=date("Y-m-d");
	$result2 =  $database->query("UPDATE purchaseorder SET receiveDate='".$date1."' WHERE PO_ID='".$_POST['id']."'" );


}
  // $result =  $database->query("UPDATE purchaseorder SET status='".$_POST['status']."' WHERE PO_ID='".$_POST['id']."'");

?>
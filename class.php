<?php
class User{

	public function memberlogin($conn,$memberlogin,$_query)
	{
		    $_status=0;
		    while($row=mysqli_fetch_array($_query))
			{
				if($row['Username']==$memberlogin->username&&$row['Password']==$memberlogin->password)
				{
					ob_start();
		    		session_start();
					$_SESSION["user"]=$memberlogin->username;

					mysqli_close($conn);
					echo "<script>window.location='index.php';</script>";

					$_status=1;
					break;
				}
			}

			if($_status==0)
			{
				$message = "Username or Password Invalid Please check and enter again";
				echo "<script type='text/javascript'>alert('$message');</script>";

				mysqli_close($conn);
				echo "<script>window.location='sign-in.php';</script>";
			}
	}



				public $UserID,$Name,$Address,$Telephone,$Username,$Password,$Position,$Image;

				public function adduser($conn,$adduser)
					{

							$sql = "INSERT INTO user (Name,surname,Address,Telephone,Username,Password,Position,Image)
VALUES ('$adduser->Name','$adduser->surname','$adduser->Address','$adduser->Telephone','$adduser->Username','$adduser->password','$adduser->position','$adduser->Image')" ;
							if ($conn->query($sql) === TRUE)	{
							$message = "Insert User success!";
							echo "<script type='text/javascript'>alert('$message');</script>";
							mysqli_close($conn);
							echo "<script>window.location='info_user_look.php';</script>"; }
			

			


if ($conn->query($sql) === TRUE){
	//echo "eieieieiei";
echo "<script>window.location='info_user.php';</script>";
	}	
else
	echo "error" . $conn->error;

	}
				

				public function deleteuser($conn,$detuser)
					{

						if(isset($detuser->UserID))
						{
							echo $detuser->UserID;
							$deletesql = "DELETE FROM user 										WHERE user.UserID =".$detuser->UserID."";
							if ($conn->query($deletesql) === TRUE)	{
							$message = "Delete success!";
							echo "<script type='text/javascript'>alert('$message');</script>";
							mysqli_close($conn);
							echo "<script>window.location='info_user.php';</script>"; }
							
						}
						else
						{
							$message = "Delete fail!";
							echo $detuser->UserID ;
							//echo "<script type='text/javascript'>alert('$message');</script>";
							echo "error" . $conn->error;
							mysqli_close($conn);
							//echo "<script>window.location='pages/tables/info_user.php';</script>";
						}
					}
		public	function edituser($conn,$editu)
		{
		echo " <script type='text/javascript'>alert('$editu->UserID');</script>";
		$editu="UPDATE user SET Name = '$editu->Name', Telephone = '$editu->Telephone',Address = '$editu->Address',Username = '$editu->Username' WHERE UserID='".$editu->UserID."'";



		$result = $conn->query($editu);
		if(isset($result))
				{

					?>
					<script>
					alert("Success");
					</script> 
					<script>
					window.location="info_user.php";
					</script>
					<?php
				}
				
			else{
				
				?>
					<script>
					alert("Error");
					</script> 
					<script>
					window.location="edit_user2.php";
					</script>
					<?php
				}
		}
}

	class Product{	
		   public $Product_ID;
	
	public function deleteproduct($conn,$detproduct)
					{

						if(isset($detproduct->Product_ID))
						{
							echo $detproduct->Product_ID;
							$deletesql = "DELETE FROM Product 										WHERE Product.Product_ID =".$detproduct->Product_ID."";
							if ($conn->query($deletesql) === TRUE)	{
							$message = "Delete success!";
							echo "<script type='text/javascript'>alert('$message');</script>";
							mysqli_close($conn);
							echo "<script>window.location='info_product2.php';</script>"; }
							
						}
						else
						{
							$message = "Delete fail!";
							echo $detproduct->Product_ID ;
							//echo "<script type='text/javascript'>alert('$message');</script>";
							echo "error" . $conn->error;
							mysqli_close($conn);
							//echo "<script>window.location='pages/tables/info_user.php';</script>";
						}
					}
		public	function editproduct($conn,$editpro)
		{
		echo " <script type='text/javascript'>alert('$editpro->Product_ID');</script>";
		$editpro="UPDATE Product SET Product_Name = '$editpro->Product_Name', Price = '$editpro->Price',Unit = '$editpro->Unit',Numstock = '$editpro->Numstock',ExpDate = '$editpro->ExpDate',Wholesalers_ID = '$editpro->Wholesalers_ID',ProductType_ID = '$editpro->ProductType_ID' WHERE Product_ID='".$editpro->Product_ID."'";



		$result = $conn->query($editpro);
		if(isset($result))
				{

					?>
					<script>
					alert("Success");
					</script> 
					<script>
					window.location="info_product2.php";
					</script>
					<?php
				}
				
			else{
				
				?>
					<script>
					alert("Error");
					</script> 
					<script>
					window.location="edit_product.php";
					</script>
					<?php
				}
		}


				public function addproduct($conn,$addpro)
									{

											$sql = "INSERT INTO Product (Product_Name,Price,Unit,Numstock,SafetyStock,ExpDate,Wholesalers_ID,ProductType_ID)
				VALUES ('".$addpro->Product_Name."','".$addpro->Price."','".$addpro->Unit."','".$addpro->Numstock."','".$addpro->SafetyStock."','".$addpro->ExpDate."','".$addpro->Wholesalers_ID."','".$addpro->ProductType_ID."')" ;
											if ($conn->query($sql) === TRUE)	{
											$message = "Insert New Product success!";
											echo "<script type='text/javascript'>alert('$message');</script>";
											mysqli_close($conn);
											echo "<script>window.location='info_product2.php';</script>"; }
							

							


				if ($conn->query($sql) === TRUE){
					//echo "eieieieiei";
				echo "<script>window.location='info_product2.php';</script>";
					}	
				else
					echo "error" . $conn->error;

					}

 }


class Requisition{	
		   public $Requisition_ID;

public function Requisition($conn,$addReq)
									{

											$sql = "INSERT INTO Requisition (Requisition_ID,Requisition_Date,Status,UserID,Name)
				VALUES ('".$addReq->Requisition_ID."','".$addReq->Requisition_Date."','".$addReq->Status."','".$addReq->UserID."','".$addReq->Name."')" ;
											if ($conn->query($sql) === TRUE)	{
											$message = "Insert New Requisition success!";
											echo "<script type='text/javascript'>alert('$message');</script>";
											mysqli_close($conn);
											echo "<script>window.location='requisition_list.php';</script>"; }




}
}
	

class Wholesalers{	
		   public $Wholesalers_ID;
	
	public function deletewho($conn,$detwho)
					{

						if(isset($detwho->Wholesalers_ID))
						{
							echo $detwho->Wholesalers_ID;
							$deletesql = "DELETE FROM wholesalers 										WHERE wholesalers.Wholesalers_ID =".$detwho->Wholesalers_ID."";
							if ($conn->query($deletesql) === TRUE)	{
							$message = "Delete success!";
							echo "<script type='text/javascript'>alert('$message');</script>";
							mysqli_close($conn);
							echo "<script>window.location='info_wholealers.php';</script>"; }
							
						}
						else
						{
							$message = "Delete fail!";
							echo $detproduct->Wholesalers_ID ;
							//echo "<script type='text/javascript'>alert('$message');</script>";
							echo "error" . $conn->error;
							mysqli_close($conn);
							//echo "<script>window.location='pages/tables/info_user.php';</script>";
						}
					}
		public	function editwho($conn,$editw)
		{
		echo " <script type='text/javascript'>alert('$editw->Wholesalers_ID');</script>";
		$editwho="UPDATE wholesalers SET Wholesalers_Name = '$editwho->Wholesalers_Name', Telephone = '$editwho->Telephone',Email = '$editwho->Email',Address = '$editwho->Address' WHERE Wholesalers_ID='".$editwho->Wholesalers_ID."'";

	 

		$result = $conn->query($editwho);
		if(isset($result))
				{

					?>
					<script>
					alert("Success");
					</script> 
					<script>
					window.location="info_wholealers.php";
					</script>
					<?php
				}
				
			else{
				
				?>
					<script>
					alert("Error");
					</script> 
					<script>
					window.location="edit_who.php";
					</script>
					<?php
				}
		}


				public function addwhol($conn,$addwho)
									{

											$sql = "INSERT INTO wholesalers (Wholesalers_Name,Telephone,Email,Address)
				VALUES ('".$addwho->Wholesalers_Name."','".$addwho->Telephone."','".$addwho->Email."','".$addwho->Address."')" ;
											if ($conn->query($sql) === TRUE)	{
											$message = "Insert New wholesalers success!";
											echo "<script type='text/javascript'>alert('$message');</script>";
											mysqli_close($conn);
											echo "<script>window.location='info_wholealers.php';</script>"; }
							

							


				if ($conn->query($sql) === TRUE){
					//echo "eieieieiei";
				echo "<script>window.location='info_wholealers.php';</script>";
					}	
				else
					echo "error" . $conn->error;

					}

 }

	?>


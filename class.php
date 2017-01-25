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
					echo "<script>window.location='../../index.html';</script>";

					$_status=1;
					break;
				}
			}

			if($_status==0)
			{
				$message = "Username or Password Invalid Please check and enter again";
				echo "<script type='text/javascript'>alert('$message');</script>";

				mysqli_close($conn);
				echo "<script>window.location='sign-in.html';</script>";
			}
	}



				public $UserID;

				public function adduser($conn,$adduser)
					{

							$sql = "INSERT INTO user (Name,Address,Telephone,Username,Password,Position)
VALUES ('".$adduser->namesurname."','".$adduser->Address."','".$adduser->Telephone."','".$adduser->Username."','".$adduser->password."','".$adduser->position."')" ;
							if ($conn->query($sql) === TRUE)	{
							$message = "Insert User success!";
							echo "<script type='text/javascript'>alert('$message');</script>";
							mysqli_close($conn);
							echo "<script>window.location='pages/tables/info_user.php';</script>"; }
			

			


if ($conn->query($sql) === TRUE){
	//echo "eieieieiei";
echo "<script>window.location='../tables/info_user.php';</script>";
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
							echo "<script>window.location='pages/tables/info_user.php';</script>"; }
							
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
					window.location="pages/tables/info_user.php";
					</script>
					<?php
				}
				
			else{
				
				?>
					<script>
					alert("Error");
					</script> 
					<script>
					window.location="../../edit_user2.php";
					</script>
					<?php
				}
		}
}

		   
	?>
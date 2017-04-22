<!DOCTYPE html>
<html>
<?php

include_once 'class/db.class.php';

$database = new DB();
// echo $_GET["id"];exit;
 
/*====================================================
 * ดึงข้อมูลที่ค้นหาเจอออกมาทั้งหมด
 ===================================================== */
$result1 =  $database->query("SELECT * From requisition where Requisition_ID='".$_GET['id']."'" )->find();
// print_r($result1);exit();


$result =  $database->query("SELECT R.Number_Req, R.TotalPay, P.Product_ID, R.Requisition_ID, R.Requisition_Date, P.Product_Name, P.Price,P.Numstock,R.Status FROM Product AS P JOIN requisition_detail AS R ON P.Product_ID = R.Product_ID JOIN requisition as Re on R.Requisition_ID=Re.Requisition_ID where Re.Requisition_ID='".$_GET['id']."'" )->findAll();


// "SELECT R.Number_Req, R.TotalPay, P.Product_ID, R.Requisition_ID, R.Requisition_Date, P.Product_Name, P.Price,P.Numstock,R.Status FROM Product AS P JOIN requisition_detail AS R ON P.Product_ID = R.Product_ID JOIN requisition as Re on R.Requisition_ID=Re.Requisition_ID where Re.Requisition_ID='".$_GET['id']."'"

// "SELECT R.Number_Req, R.TotalPay, P.Product_ID, R.Requisition_ID, R.Requisition_Date, P.Product_Name, P.Price,P.Numstock,Re.Status 
// FROM requisition_detail AS R
// JOIN requisition as Re on R.Requisition_ID=Re.Requisition_ID
// JOIN product AS P ON R.Product_ID= P.Product_ID
// where Re.Requisition_ID='".$_GET['id']."' ORDER BY Status ASC"
 //print_r($result);exit;
?>

      


<!-- Top Bar -->
    <?php include 'head.php'; ?>  
<!-- #Top Bar --> 
<body class="theme-blue">
<!-- Top Bar -->
    <?php include 'top-bar.php'; ?>  
<!-- #Top Bar -->
<!-- Left Sidebar -->
	<?php include 'left-menu-bar.php'; ?>  
<!-- #END# Left Sidebar -->



<!-- Content -->
<section class="content">
    <div class="container-fluid">
    	<div class="row clearfix">
	        <!-- Task Info -->
	        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	            <div class="card">
	                <div class="header">
	                    <h2>รายละเอียดรายการเบิก เลขที่ <?=$result1->Requisition_ID;?></h2>
	                    
	                
	                </div>
	                <div class="body">
	                    <div class="table-responsive">
	                    
	                    <h5>วันที่เบิก : <?=$result1->Requisition_Date;?></h5>
	                    <h5>ผู้ทำรายการ : <?=$result1->Name;?></h5>
	                    <div class="card">
	                     <div class="body">
	                        <table class="table table-bordered" id="requisition-table">


	                            <thead>
	                                <tr>
	                                    <th>#</th>
	                                    
	                                    <th>รหัสสินค้า</th>
	                                    <th>ชื่อสินค้า</th>                     
	                                    <th>คงเหลือ</th>
	                                    <th>จำนวนที่เบิก</th>
	                                    <th>ราคาต่อหน่วย</th>
	                                    <th>ราคารวม</th>
	                                    <!--      <th>สถานะการอนุมัติ</th> -->
	                                </tr>
	                            </thead>
	                            <tbody>

	                            	<?php 
	                            		$index = 1;
		                            	// ตรวจสอบ
										if(!empty($result)){
										    // พบข้อมูล
										   $count=0;
										    $TotalPrice=0;
										   
										    foreach ($result as $field) {

										    	$TotalPrice+=$field->TotalPay;
										    	if ($field->Numstock<$field->Number_Req) {
										    		$count++;
										    	}

									?>



		                                <tr>
		                                    <td><?=$index;?></td>
		                                    
		                                    <td align=right><?=$field->Product_ID;?></td>
		                                   <td><?=$field->Product_Name;?></td>
		                                 	<td align=right><?=$field->Numstock;?></td>
		                                    <td align=right><?=$field->Numstock>=$field->Number_Req?$field->Number_Req:'<font color="red">'.$field->Number_Req.'</font>';?></td>
		                                    
		                                       
		                                    <td align=right><?=number_format($field->Price, 2, '.', ',');?></td>
		                                    <td align=right><?=number_format($field->TotalPay, 2, '.', ',');?></td>
		                           

		                       <!--  <?php

		         if($_SESSION['Position'] == "ผู้จัดการ" || $_SESSION['Position'] == "admin")

			                                    if ($field->Status == 0) {
			                                    	echo '<td>
			                                    			<button type="button" class="btn btn-default btn-confirm" data-toggle="modal" data-target="#myModal" data-id="'.$field->Product_ID.'">อนุมัติ</button>
		                                    				<button type="button" class="btn btn-danger btn-cancle" data-id="'.$field->Product_ID.'">ไม่อนุมัติ</button>
		                                    			</td>';
			                                    }
			                                    if ($field->Status == 1) {
			                                    	echo '<td class="text-success"><b>อนุมัติ</b></td>';
			                                    }
			                                    if ($field->Status == 2) {
			                                    	echo '<td class="text-danger"><i>ไม่อนุมัติ</i></td>';
			                                    }
		                                    ?>
		                                      

		                                      <?php    
       if($_SESSION['Position'] == "พนักงาน" || $_SESSION['Position'] == "admin")

		                        
			                                    if ($field->Status == 0) {
			                                    	echo '<td>
			                                    			รอการอนุมัติ
		                                    			</td>';
			                                    }
			                                    if ($field->Status == 1) {
			                                    	echo '<td class="text-success"><b>อนุมัติ</b></td>';
			                                    }
			                                    if ($field->Status == 2) {
			                                    	echo '<td class="text-danger"><i>ไม่อนุมัติ</i></td>';
			                                    }
		                                    ?> -->
		                             

		                                </tr>



	                                <?php 
	                            			
	                            			$index++;}
	                            		}
	                                ?>
	                            </tbody>

	                            
	                        </table>
	                        </div>
	                        </div>
	                        <h4 align=right>ราคารวมสุทธิ <?=number_format($TotalPrice, 2, '.', ','); ?> บาท</h4>
	                        <h5 align=right>สถานะการอนุมัติ
	                        <div class="col-md-12" > 
	                   
	                    <?php


		            if($_SESSION['Position'] == "ผู้จัดการ"){

			                                    if ($result1->Status == 0) {
			                                    	if($count>0){
														echo '<button type="button" class="btn btn-default btn-confirm" data-toggle="modal" data-target="#myModal" 
															data-id="'.$result1->Requisition_ID.'" disabled>อนุมัติ</button>';

													}
													else{
														echo '
			                                    			<button type="button" class="btn btn-default btn-confirm" data-toggle="modal" data-target="#myModal" data-id="'.$result1->Requisition_ID.'">อนุมัติ</button>';

													}

		                                    			echo	'<button type="button" class="btn btn-danger btn-cancle" data-id="'.$field->Requisition_ID.'">ไม่อนุมัติ</button>';
			                                    }
			                                    if ($result1->Status == 1) {
			                                    	echo '<h3 class="text-success"><b>อนุมัติ</b></h3>';
			                                    }
			                                    if ($result1->Status == 2) {
			                                    	echo '<h3 class="text-danger"><i>ไม่อนุมัติ</i></h3>';
			                                    }
			                                }


               if($_SESSION['Position'] == "พนักงาน" || $_SESSION['Position'] == "admin"){

                    
                                    if ($result1->Status == 0) {
                                    	echo '<h3>
                                    			รอการอนุมัติ
                                			</h3>';
                                    }
                                    if ($result1->Status == 1) {
                                    	echo '<h3 class="text-success"><b>อนุมัติ</b></h3>';
                                    }
                                    if ($result1->Status == 2) {
                                    	echo '<h3 class="text-danger"><i>ไม่อนุมัติ</i></h3>';
                                    }
                                }
                                
		                                    ?>




	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- #END# Task Info -->
	     
	      </div>
    </div>
</section>
<!-- #END# Content -->

<!-- Modal -->
<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">ยืนยันการทำรายการ</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
        <button type="button" class="btn btn-primary">ตกลง</button>
      </div>
    </div>
  </div>
</div> -->

<!-- Script Sidebar -->
	 <!-- Jquery Core Js -->
    

    <!-- Demo Js -->
       <?php include 'script.php'; ?>  
<!-- #END# Script Sidebar -->
<!-- <script type="text/javascript">
	$(".btn-confirm").on('click',function(){
		var id = $(this).attr("data-id");
		$.ajax({ 
		    url: "/stock/action_requisition.php",
		    type: "POST",
		    data: {
		    	'method': 'update',
		        'id': id,
		        'status': 1
		    },
		    success: function () {
		        location.reload();
		    }
		});
	});

	$(".btn-cancle").on('click',function(){
		var id = $(this).attr("data-id");
		$.ajax({ 
		    url: "/stock/action_requisition.php",
		    type: "POST",
		    data: {
		    	'method': 'update',
		        'id': id,
		        'status': 2
		    },
		    success: function () {
		        location.reload();
		    }
		});
	});
</script> -->
<script type="text/javascript">

$( document ).ready(function() {

    $('#requisition-table').DataTable();

	$(".btn-confirm").on('click',function(){
		var id = $(this).attr("data-id");
		$.ajax({ 
		    url: "../stock/action_requisition.php",
		    type: "POST",
		    data: {
		    	'method': 'update',
		        'id': id,
		        'status': 1
		    },
		    success: function () {
		    	
		        location.reload();
		    }
		});
	});



	$(".btn-cancle").on('click',function(){
		var id = $(this).attr("data-id");
		$.ajax({ 
		    url: "../stock/action_requisition.php",
		    type: "POST",
		    data: {
		    	'method': 'update',
		        'id': id,
		        'status': 2
		    },
		    success: function () {
		        location.reload();
		    }
		});
	});

});
</script>

</body>
</html>
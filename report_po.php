<!DOCTYPE html>
<html>
<?php

include_once 'class/db.class.php';

$database = new DB();


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


<?php 
	

    $result =$database->query("SELECT product.Product_ID,product.Product_Name,SUM(po_detail.Quantity) AS Quantity,SUM(po_detail.TotalPay) as TotalPay FROM product INNER JOIN po_detail ON product.Product_ID=po_detail.Product_ID GROUP BY Product_ID")->findAll() ;
	

?>



<!-- Select -->
<section class="content">
    <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                เลือกช่วงเวลา
                               
                            </h2>
                        
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                
                                <div class="col-sm-6">
                             <label class="form-label">ตั้งแต่วันที่</label>
                                <div class="form-line">
                                   <input type="text" class="datepicker form-control" name="ExpDate" placeholder="Please choose a date...">
                                    </div> 
                                </div>
                                
                                <div class="col-sm-6">
                                <label class="form-label">ถึงวันที่</label>
                                  <div class="form-line">
                                      <input type="text" class="datepicker form-control" name="ExpDate" placeholder="Please choose a date...">
                                        </div>
                                  </div>

                               

                               
                                <div class="col-lg-12"><button type="button" class="btn btn-primary waves-effect" onclick="selectModal()">ตกลง</button></div> 

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Select -->
<!-- Content -->

    	<div class="row clearfix">

	        <!-- Task Info -->
	        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	            <div class="card">
	                <div class="header">
	                    <h2>ยอดการสั่งซื้อ</h2>
	                </div>




	                <div class="body">

	                    <div class="table-responsive">
	                        <table class="table table-hover dashboard-task-infos" id="requisition-table">
	                            <thead>
	                                <tr>
	                                    <th>#</th>
	                                    <th>รหัสสินค้า</th>
	                                    <th>ชื่อสินค้า</th>
	                                    <th>จำนวน</th>
	                                    <th>ยอดซื้อ(บาท)</th>
	                                    
	                                    
	                             
	                              </tr>
	                            </thead>
	                            <tbody>
	                            	<?php 
	                            		$index = 1;
		                            	// ตรวจสอบ
										if(!empty($result)){

											  $count=0;
										    $TotalPrice=0;
										   
										    foreach ($result as $field) {

										    	$TotalPrice+=$field->TotalPay;
										    	if ($field->Quantity<$field->Quantity) {
										    		$count++;
										    	}
										    //พบข้อมูล
										   

									?>

		                                <tr>
		                                    <td><?=$index;?></td>
		                                    <td><?=$field->Product_ID;?></td>	
		                                    <td><?=$field->Product_Name;?></td>           
		                                    <td><?=$field->Quantity;?></td>
		                                    <td><?=$field->TotalPay;?></td> 
		                             
		                               
		                                </tr>
		                            

	                                <?php 
	                            			
	                            			$index++;}
	                            		}
	                                ?>
	                            </tbody>
	                        </table>
	                    </div>


	                    <h3>สรุปยอดซื้อ<?=$TotalPrice;?> บาท</h3>
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
	<?php include 'script.php'; ?>  
<!-- #END# Script Sidebar -->


</body>
</html>
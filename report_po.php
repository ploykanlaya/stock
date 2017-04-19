<!DOCTYPE html>
<html>
<?php

include_once 'class/db.class.php';

$database = new DB();


if (isset($_POST['statdate'])&&isset($_POST['enddate'])) {
	$stat=date('Y-m-d',strtotime($_POST['statdate']));
	$end=date('Y-m-d',strtotime($_POST['enddate']));
}
else{
	$stat='2017-03-09';
	$end='2017-03-13';
}
    $result =$database->query("SELECT product.Product_ID,product.Product_Name,SUM(po_detail.Quantity) AS Quantity,SUM(po_detail.TotalPay) as TotalPay FROM product INNER JOIN po_detail ON product.Product_ID=po_detail.Product_ID JOIN purchaseorder  where purchaseorder.PO_OutDate BETWEEN '".$stat."' AND '".$end."' GROUP BY product.Product_ID")->findAll() ;
	

// print_r($result);exit;
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
                        <form method="POST" action="report_po.php">
                        <div class="body">
                            <div class="row clearfix">
                            <!--     
                                <div class="col-sm-6">
                                <div class="form-line">
                                   <input type="text" class="datepicker form-control" name="statdate" placeholder="<?=$stat;?>">
                                    </div>
                                    <div class='input-group date' id='datetimepicker6'>
                <input type='text' class="form-control" name="statdate" placeholder="<?=$stat;?>"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div> 
                                </div>
                                
                                <div class="col-sm-6">
                               
                                  <div class="form-line">
                                      <input type="text" class="datepicker form-control" name="enddate" placeholder="<?=$end;?>">
                                        </div>
                                  </div> -->

    <div class='col-md-6'> 
    <label class="form-label">ตั้งแต่วันที่</label>
        <div class="form-group">
            <div class='input-group date' id='datetimepicker6'>
                <input type='text' class="form-control " name="statdate" placeholder="<?=$stat;?>"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    
    <div class='col-md-6'>
    	<label class="form-label">ถึงวันที่</label>
        <div class="form-group"> 
            <div class='input-group date' id='datetimepicker7'>
                <input type='text' class="form-control" name="enddate" placeholder="<?=$end;?>"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>


                               

                               
                                <div class="col-lg-12"><button type="submit" class="btn btn-primary waves-effect" >ตกลง</button></div> 

                                	</div>
                                </div>
                                </form>
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
	                        <table class="table table-bordered" id="requisition-table">
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
		                                    <td align=right><?=$index;?></td>
		                                    <td align=right><?=$field->Product_ID;?></td>	
		                                    <td ><?=$field->Product_Name;?></td>           
		                                    <td align=right><?=$field->Quantity;?></td>
		                                    <td align=right><?=number_format($field->TotalPay, 2, '.', ',');?></td>


		                             
		                               
		                                </tr>
		                            

	                                <?php 
	                            			
	                            			$index++;}
	                            		}
	                                ?>
	                            </tbody>
	                        </table>
	                    </div>

 <?php  if(isset($result)) {  ?>
	                   <h3 align=right>สรุปยอดซื้อ <?php if (!empty($TotalPrice)) {
	                    	echo number_format($TotalPrice, 2, '.', ',');
	                    }?> บาท</h3>
	                     <?php } ?>


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
<script type="text/javascript">

$( document ).ready(function() {

	$('#requisition-table').DataTable();

	
});
</script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker6').datetimepicker({
        	  format: 'YYYY-MM-DD'
        });
        $('#datetimepicker7').datetimepicker({
            useCurrent: false, //Important! See issue #1075
              format: 'YYYY-MM-DD'
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>

</body>
</html>
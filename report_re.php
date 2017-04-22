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
	$stat='เลือกช่วงเวลาเริ่มต้น';
	$end='เลือกช่วงเวลาสิ้นสุด';
}

    $result =$database->query("SELECT product.Product_ID,product.Product_Name,sum(requisition_detail.Number_Req) as Number_Req,sum(requisition_detail.TotalPay) as TotalPay FROM product JOIN requisition_detail ON product.Product_ID=requisition_detail.Product_ID JOIN requisition where requisition.Requisition_Date BETWEEN '".$stat."' AND '".$end."' GROUP BY product.Product_ID")->findAll() ;
	

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
                        <form method="POST" action="report_re.php">
                        <div class="body">
                            <div class="row clearfix" >
                                
                            <!--     <div class="col-sm-6">
                             <label class="form-label">ตั้งแต่วันที่</label>
                                <div class="form-line">
                                   <input type="text" class="datepicker form-control" name="statdate" placeholder="<?=$stat;?>">
                                    </div> 
                                </div>
                                
                                <div class="col-sm-6">
                                <label class="form-label">ถึงวันที่</label>
                                  <div class="form-line">
                                      <input type="text" class="datepicker form-control" name="enddate" placeholder="<?=$end;?>">
                                        </div>
                                  </div>
 -->
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
                
            </div>
            <!-- #END# Select -->
<!-- Content -->

    	<div class="row clearfix">

	        <!-- Task Info -->
	        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	            <div class="card">
	                <div class="header">
	                    <h2>ยอดการเบิก</h2>
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
	                                    <th>ยอดเบิก</th>
	                                    
	                                    
	                             
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
										    	if ($field->Number_Req<$field->Number_Req) {
										    		$count++;
										    	}
										  
										   

									?>

		                                <tr>
		                                    <td align=right><?=$index;?></td>
		                                    <td align=right><?=$field->Product_ID;?></td>	
		                                    <td align=right><?=$field->Product_Name;?></td>           
		                                    <td align=right><?=$field->Number_Req;?></td>
		                                    <td align=right><?=$field->TotalPay;?></td>
		                                 
		                                
		                                </tr>

	                                <?php 
	                            			
	                            			$index++;
	                            		}}
	                                ?>
	                            </tbody>
	                        </table>
	                    </div>

 <?php  if(isset($result)) {  ?>
	                   <h3 align=right>สรุปยอดเบิก <?php if (!empty($TotalPrice)) {
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
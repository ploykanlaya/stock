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
	if (isset($_POST['Search']) && !empty($_POST['Selectdate'])){
    	$timeshift = new DateTime();

        $timeshift = date_modify($timeshift, $_POST['Selectdate']);	
        
        $timeshift = date_format($timeshift, 'Y-m-d');
        echo "<script> console.log('" . $timeshift . "');</script>";
                          
       	$result2 = $database->query("SELECT P.Product_ID,P.Product_Name,R.Requisition_Date,P.Numstock,P.Price,P.SafetyStock FROM product AS P JOIN requisition_detail AS Rt ON P.Product_ID=Rt.Product_ID JOIN requisition as R on Rt.Requisition_ID=R.Requisition_ID WHERE R.Requisition_Date <= '".$timeshift."' GROUP BY P.Product_ID")->findAll();
    }else{

    $result2 =$database->query("SELECT P.Product_ID,P.Product_Name,R.Requisition_Date,P.Numstock,P.Price,P.SafetyStock FROM product AS P JOIN requisition_detail AS Rt ON P.Product_ID=Rt.Product_ID JOIN requisition as R on Rt.Requisition_ID=R.Requisition_ID GROUP BY P.Product_ID")->findAll() ;
	}



?>


<!-- Select -->
<section class="content">
    <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                เลือกช่วงเวลา ดูรายการสินค้าจม
                               
                               
                            </h2>
                        
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                
                                	<form action='numberstock.php#' method='POST'>
                                    <select class="form-control show-tick" name="Selectdate">
                                        <option value>-- เลือก --</option>
                                        <option value="-7 day">สินค้าจมที่ไม่ได้เบิกมากกว่า 7 วัน</option>
                                        <option value="-1 week">สินค้าจมที่ไม่ได้เบิกมากกว่า 1 สัปดาห์</option>
                                        <option value="-1 month">สินค้าจมที่ไม่ได้เบิกมากกว่า 1 เดือน</option>
                                        <option value="-3 month">สินค้าจมที่ไม่ได้เบิกมากกว่า 3 เดือน</option>
                                        <option value="-1 year">สินค้าจมที่ไม่ได้เบิกมากกว่า 1 ปี</option>
                                    </select>
                                </div>
                                <button type="submit"  class="btn btn-danger select-modal" name="Search" >ตกลง</button>
                               <!--  <div class="col-lg-12"><input type="submit" class="btn btn-primary waves-effect" name="Search"></input></div> -->
                                </form>
                                
                                




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
	                    <h2>สินค้าคงเหลือ</h2>
	                    <FONT COLOR=red><h5>*จำนวนคงเหลือสีแดง คือ สินค้าคงเหลือน้อย</h5></FONT>
	                </div>




	                <div class="body">

	                    <div class="table-responsive">
	                        <table class="table table-bordered" id="requisition-table">
	                            <thead>
	                                <tr>
	                                    <th>#</th>
	                                    <th>รหัสสินค้า</th>
	                                    <th>ชื่อสินค้า</th>
	                                    <th>วันที่เบิกล่าสุด</th>
	                                    <th>ราคาต่อหน่วย</th>

	                                    <th>จำนวนคงเหลือ</th>
	                                    <th>มูลค่าคงเหลือ</th>
	                                    
	                             
	                              </tr>
	                            </thead>
	                            <tbody>
	                            	<?php 

                           		$index = 1;
                           			echo "<script> console.log('emp: " . !(string)empty($result2) . "');</script>";
		                            	// ตรวจสอบ
										if(!empty($result2)){
											echo "<script> console.log('Found');</script>";
										    // พบข้อมูล
										    foreach ($result2 as $field) {

									?>

		                                <tr>
		                                    <td><?=$index;?></td>
		                                    <td  align=right><?=$field->Product_ID;?></td>
		                                    <td><?=$field->Product_Name;?></td>
		                                    <td  align=right><?=date('d/m/Y', strtotime($field->	Requisition_Date));?></td>
   											 <td align=right><?=number_format($field->Price, 2, '.', ',');?></td>
		                                     <td align=right><?=$field->Numstock<=$field->SafetyStock?'<font color="red">'.$field->Numstock.'</font>':$field->Numstock;?></td>

		                                    <td  align=right><?=number_format($field->Numstock*$field->Price, 2, '.', ',');?></td>
		                                
		                                </tr>

	                                <?php 

	                                	$index++;
	                            			
	                            			}
	                            			
	                            		}
	                                ?>
	                            </tbody>
	                        </table>
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
	<?php include 'script.php'; ?>  
<!-- #END# Script Sidebar -->

<script type="text/javascript">

$( document ).ready(function() {

	$('#requisition-table').DataTable();

	
});
</script>

</body>
</html>
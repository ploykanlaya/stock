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
 if($_SESSION['Position'] == "ผู้จัดการ" || $_SESSION['Position'] == "admin"){

$result =  $database->query("SELECT * FROM purchaseorder ORDER BY PO_OutDate DESC")->findAll();

}
if($_SESSION['Position'] == "พนักงาน" ){

$result =  $database->query("SELECT * FROM purchaseorder where UserID='".$_SESSION['UserID']."' ORDER BY PO_OutDate DESC ")->findAll();


}

?>
<!-- Content -->
<section class="content">
    <div class="container-fluid">
    	<div class="row clearfix">
	        <!-- Task Info -->
	        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	            <div class="card">
	                <div class="header">
	                    <h2>รายการสั่งซื้อสินค้า</h2>
	                </div>
	                <div class="body">
	                    <div class="table-responsive">
	                        <table class="table table-hover dashboard-task-infos" id="requisition-table">
	                            <thead>
	                                <tr>
	                                    <th>#</th>
	                                    <th>รหัสใบสั่งซื้อ</th>
	                                    	<th>สถานะ</th>
	                                    <th>วันที่สั่งซื้อ</th>
	                                    <th>วันที่รับ</th>
	                                     <th>รหัสพนักงาน</th>
	                                    <th>ชื่อพนักงาน</th>
	                                    <th>ดูรายละเอียด</th>
	                             
	                              </tr>
	                            </thead>
	                            <tbody>
	                            	<?php 
	                            		$index = 1;
		                            	// ตรวจสอบ
										if(!empty($result)){
										    // พบข้อมูล
										    foreach ($result as $field) {

									?>

		                                <tr>
		                                    <td><?=$index;?></td>
		                                    <td><?=$field->PO_ID;?></td>  
		                                    <td>
		                                    	<?php if ($field->Status == 0) 
		                                    			echo "รอการอนุมัติ";
		                                    		if ($field->Status == 1) 
		                                    			echo '<span class="text-success"><b>อนุมัติ</b></span>';
		                                    		if ($field->Status == 2) 
		                                    			echo '<span class="text-danger"><i>ไม่อนุมัติ</i></span>';

		                                    	?>
		                                    	
		                                    </td>
		                                    <td><?=date('d/m/Y', strtotime($field->PO_OutDate));?></td>
										<td> <?=date('d/m/Y', strtotime($field->receiveDate));?> </td> 
		                                     <td><?=$field->UserID;?></td>
		                                    <td><?=$field->Name;?></td>
		                                        
		                                    <td><a href="po_detail.php?id=<?=$field->PO_ID;?>" class="btn btn-danger select-modal">คลิก</a></td>

		                                </tr>

	                                <?php 
	                            			
	                            			$index++;}
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
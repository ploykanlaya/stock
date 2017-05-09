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

$result =  $database->query("SELECT * FROM purchaseorder ORDER BY PO_OutDate DESC, PO_ID DESC")->findAll();

}
if($_SESSION['Position'] == "พนักงาน" ){

$result =  $database->query("SELECT * FROM purchaseorder where UserID='".$_SESSION['UserID']."' ORDER BY PO_OutDate DESC , PO_ID DESC")->findAll();


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
	                        <table class="table table-bordered" id="requisition-table">
	                            <thead>
	                                <tr>
	                                    <th>#</th>
	                                    <th>รหัสใบสั่งซื้อ</th>
	                                    	<th>สถานะ</th>
	                                    <th>วันที่สั่งซื้อ</th>
	                                    <th>วันที่รับ</th>
	                                     <th>รหัสผู้ทำ</th>
	                                    <th>ชื่อผู้ทำ</th>
	                                    <th>รายละเอียด</th>
	                                    <th>พิมพ์ใบสั่งซื้อ</th>
	                                    
	                             
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
		                                    <td align=right><?=$index;?></td>
		                                    <td align=right><?=$field->PO_ID;?></td>  
		                                    <td align=right>
		                                    <?php if ($field->Status == 0) 
		                                    			echo '<span class="label bg-blue"><i>รอรับสินค้า</i></span>';
		                                    		if ($field->Status == 1) 
		                                    			echo '<span class="label bg-green"><b>รับสินค้าแล้ว</b></span>';
		                                    		if ($field->Status == 2) 
		                                    			echo '<span class="label bg-orange"><i>ยกเลิก</i></span>';

		                                    	?>  	
		                                    	
		                                    </td>
		                                    <td align=right><?=date('Y-m-d', strtotime($field->PO_OutDate));?></td>


										<td align=right> <?php 
										date('Y-m-d', strtotime($field->receiveDate));
											$date1=date('Y-m-d', strtotime($field->receiveDate));
											if ($field->Status == 1) {
												echo "$date1";
											}
											else{

												echo "";
											}
											?>  </td> 

										    
		                                     <td align=right><?=$field->UserID;?></td>
		                                    <td align=right><?=$field->Name;?></td>
		                                        
		                                    <td><a href="po_detail.php?id=<?=$field->PO_ID;?>" class="btn bg-blue-grey waves-effect">ตรวจสอบ</a></td>
		                                    <td><a href="po_print.php?id=<?=$field->PO_ID;?>" class="btn bg-grey waves-effect">พิมพ์ใบสั่งซื้อ</a></td>
		                                    

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
		    url: "../stock/action_PO.php",
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
		    url: "../stock/action_PO.php",
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
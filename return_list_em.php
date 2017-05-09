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

$result =  $database->query("SELECT * FROM returnoder ORDER BY ReturnDate DESC, ReturnOder_ID DESC")->findAll();

}
if($_SESSION['Position'] == "พนักงาน" ){

$result =  $database->query("SELECT * FROM returnoder where UserID='".$_SESSION['UserID']."' ORDER BY ReturnDate DESC , ReturnOder_ID DESC")->findAll();


}

// $result2 =  $database->query("SELECT Position FROM u.user join r.returnoder on u.UserID=r.UserID ")->findAll();
// // print_r($result2);exit();

?>
<!-- Content -->
<section class="content">
    <div class="container-fluid">
    	<div class="row clearfix">
	        <!-- Task Info -->
	        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	            <div class="card">
	                <div class="header">
	                    <h2>รายการคืนสินค้า</h2>
	                </div>
	                <div class="body">
	                    <div class="table-responsive">
	                        <table class="table table-bordered" id="requisition-table">
	                            <thead>
	                                <tr>
	                                    <th>#</th>
	                                    <th>รหัส</th>
	                                    	<th>สถานะ</th>
	                                    <th>วันที่ทำ</th>
	                                   <!--  <th>วันที่ส่ง</th> -->
	                                     <th>รหัสผู้ทำรายการ</th>
	                                    <th>ชื่อผู้ทำรายการ</th>
	                                    <th>ตำแหน่ง</th>
	                                    <th>รายละเอียด</th>
	                             
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
		                                    <td align=right><?=$field->ReturnOder_ID;?></td>
		                                   <td align=right>
		                                    	
		                                    	   <?php if ($field->Status == 0) 
		                                    			echo '<span class="label bg-blue"><i>รอการอนุมัติ</i></span>';
		                                    		if ($field->Status == 1) 
		                                    			echo '<span class="label bg-green"><b>อนุมัติ</b></span>';
		                                    		if ($field->Status == 2) 
		                                    			echo '<span class="label bg-orange"><i>ไม่อนุมัติ</i></span>';

		                                    	?>
		                                    	
		                                    </td>
		                                    <td align=right><?=date('Y-m-d', strtotime($field->ReturnDate));?></td>
		                                    <!-- <td><?=date('Y-m-d', strtotime($field->DeliveryDate));?></td> -->
		                                   <td align=right><?=$field->UserID;?></td>
		                                    <td align=right><?=$field->Name;?></td>
		                                  <td align=right><?=$field->Position;?></td>  
		                                        
		                                    <td><a href="return_detail_em.php?id=<?=$field->ReturnOder_ID;?>" class="btn bg-blue-grey waves-effect">ตรวจสอบ</a></td>




		                                   
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
		    url: "../stock/action_return_em.php",
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
		    url: "../stock/action_return_em.php",
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
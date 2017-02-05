<!DOCTYPE html>
<html>
<?php

include_once 'class/db.class.php';

$database = new DB();
 
/*====================================================
 * ดึงข้อมูลที่ค้นหาเจอออกมาทั้งหมด
 ===================================================== */
$result =  $database->query("SELECT * FROM requisition ORDER BY Requisition_Date")->findAll();

?>
<!-- Top Bar -->
    <?php include 'head.php'; ?>  
<!-- #Top Bar --> 
<body class="theme-red">
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
	                    <h2>รายการเบิกสินค้า 1</h2>
	                    <ul class="header-dropdown m-r--5">
	                        <li class="dropdown">
	                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	                                <i class="material-icons">more_vert</i>
	                            </a>
	                            <ul class="dropdown-menu pull-right">
	                                <li><a href="javascript:void(0);">Action</a></li>
	                                <li><a href="javascript:void(0);">Another action</a></li>
	                                <li><a href="javascript:void(0);">Something else here</a></li>
	                            </ul>
	                        </li>
	                    </ul>
	                </div>
	                <div class="body">
	                    <div class="table-responsive">
	                        <table class="table table-hover dashboard-task-infos">
	                            <thead>
	                                <tr>
	                                    <th>#</th>
	                                    <th>รหัสใบเบิก</th>
	                                    <th>วันที่เบิก</th>
	                                    <th>วันที่ส่ง</th>
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
		                                    <td><?=$field->Requisition_ID;?></td>
		                                    <td><?=date('d/m/Y', strtotime($field->Requisition_Date));?></td>
		                                    <td><?=date('d/m/Y', strtotime($field->DeliveryDate));?></td>
		                                     <td><?=$field->UserID;?></td>
		                                    <td><?=$field->Name;?></td>
		                                        <td><?=$field->Name;?></td>
		                                    <td><a href="requisition_detail.php" class="btn btn-danger select-modal">คลิก</a></td>


		                                   
		                                </tr>

	                                <?php 
	                            			}
	                            			$index=$index+1;
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
</script>
</body>
</html>
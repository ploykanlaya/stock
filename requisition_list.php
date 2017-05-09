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

$result =  $database->query("SELECT * FROM requisition ORDER BY Requisition_Date DESC, Requisition_ID DESC")->findAll();

}
if($_SESSION['Position'] == "พนักงาน" ){

$result =  $database->query("SELECT * FROM requisition where UserID='".$_SESSION['UserID']."' ORDER BY Requisition_Date DESC, Requisition_ID DESC ")->findAll();


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
	                    <h2>รายการเบิกสินค้า</h2>
	                </div>
	                <div class="body">
	                    <div class="table-responsive">
	                        <table class="table table-bordered" id="requisition-table">
	                            <thead>
	                                <tr>
	                                    <th>#</th>
	                                    <th>รหัสใบเบิก</th>
	                                   	<th>สถานะ</th>
	                                    <th>วันที่เบิก</th>
	                                    <th>วันที่ส่ง</th>
	                                     <th>รหัสพนักงาน</th>
	                                    <th>ชื่อพนักงาน</th>
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
		                                    <td align=right><?=$field->Requisition_ID;?></td>
		                                     <td align=right>
		                                    	<?php if ($field->Status == 0) 
		                                    			echo '<span class="label bg-blue"><i>รอการอนุมัติ</i></span>';
		                                    		if ($field->Status == 1) 
		                                    			echo '<span class="label bg-green"><b>อนุมัติ</b></span>';
		                                    		if ($field->Status == 2) 
		                                    			echo '<span class="label bg-orange"><i>ไม่อนุมัติ</i></span>';

		                                    	?>
		                                    	
		                                    </td>
		                                    <td align=right><?=date('Y-m-d', strtotime($field->Requisition_Date));?></td>
		                                   
		                                    <td align=right> <?php 
										date('Y-m-d', strtotime($field->DeliveryDate));
											$date1=date('Y-m-d', strtotime($field->DeliveryDate));
											if ($field->Status == 1) {
												echo "$date1";
											}
											else{

												echo "";
											}
											?>  </td> 
		                                     <td align=right><?=$field->UserID;?></td>
		                                    <td align=right><?=$field->Name;?></td>
		                                        
		                                    <td ><a href="requisition_detail.php?id=<?=$field->Requisition_ID;?>" class="btn bg-blue-grey waves-effect">ตรวจสอบ</a></td>


		                                   
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


// $(document).ready(function() {
//     $('#example').DataTable( {
//         dom: 'Bfrtip',
//         buttons: [
//             {
//                 extend: 'pdfHtml5',
//                 customize: function ( doc ) {
//                     doc.content.splice( 1, 0, {
//                         margin: [ 0, 0, 0, 12 ],
//                         alignment: 'center',
//                         image:''

//                          } );
//                 }
//             }
//         ]
//     } );
// } );
</script>


</body>
</html>
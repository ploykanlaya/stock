<!DOCTYPE html>
<html>
<?php

include_once 'class/db.class.php';

$database = new DB();
$product =  $database->query("SELECT * FROM product")->findAll();


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

 if (isset($_POST['Product_ID'])) {
	$pid="where Product.Product_ID='".$_POST['Product_ID']."'";
	$num=$_POST['Product_ID'];
}
else{
	$pid='';
	$num='การเคลื่อนไหวทั้งหมด';
}

 // $sort=array();
 // $n=0;

    $result =$database->query("SELECT product.Product_ID,product.Product_Name,po_detail.Quantity,purchaseorder.PO_OutDate,purchaseorder.Status FROM product JOIN po_detail ON product.Product_ID=po_detail.Product_ID JOIN purchaseorder ON po_detail.PO_ID= purchaseorder.PO_ID ".$pid."" )->findAll() ;

    // foreach ($result as $item) {
    // 	$sort[$n]['id']=item->Product_ID
    // 	$sort[$n]['name']=item->Product_Name
    // 	$sort[$n]['num']=item->Quantity
    // 	$sort[$n]['date']=item->PO_OutDate
    // 	$sort[$n]['status']=item->}
    
	
	$result2 =$database->query("SELECT product.Product_ID,product.Product_Name,requisition_detail.Number_Req,requisition.Requisition_Date,requisition.Status FROM product JOIN requisition_detail ON product.Product_ID=requisition_detail.Product_ID JOIN requisition ON requisition_detail.Requisition_ID= requisition.Requisition_ID ".$pid."")->findAll() ;
	


?>


<!-- Select -->
<section class="content">
    <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                เลือกสินค้า
                               
                               
                            </h2>
                        
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <!-- <div class="col-sm-6">
                                
                                	<form action='numberstock.php#' method='POST'>
                                    <select class="form-control show-tick" name="Selectdate">
                                        <option value>-- เลือก --</option>
                                        <option value="-7 day">สินค้าจมที่ไม่ได้เบิกมากกว่า 7 วัน</option>
                                        <option value="-1 week">สินค้าจมที่ไม่ได้เบิกมากกว่า 1 สัปดาห์</option>
                                        <option value="-1 month">สินค้าจมที่ไม่ได้เบิกมากกว่า 1 เดือน</option>
                                        <option value="-3 month">สินค้าจมที่ไม่ได้เบิกมากกว่า 3 เดือน</option>
                                        <option value="-1 year">สินค้าจมที่ไม่ได้เบิกมากกว่า 1 ปี</option>
                                    </select>


                                </div> -->
                               <!--  <div class="col-lg-12"><input type="submit" class="btn btn-primary waves-effect" name="Search"></input></div>
                                </form> -->

            <form method="POST" action="movementproduct.php" > 
					<input type="text" name="Product_ID" value="<?=$num;?>">
					                                
					<button type="button" class="btn btn-danger select-modal" >เลือก</button>
					<form>
					<button type="submit" class="btn btn-danger select-modal" >ตกลง</button>
 			</form>    

</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Select -->

</form>

           
<!-- Content -->



    	<div class="row clearfix">

	        <!-- Task Info -->
	        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	            <div class="card">
	                <div class="header">
	                    <h2>การเคลื่อนไหว</h2>
	                </div>




	                <div class="body">

	                    <div class="table-responsive">
	                        <table class="table table-hover dashboard-task-infos" id="requisition-table">
	                            <thead>
	                                <tr>
	                                    <th>#</th>
	                                    <th>รหัสสินค้า</th>
	                                     <th>ประเภท</th>
	                                    <th>สถานะ</th>
	                                    <th>จำนำวน</th>
	                                    <th>วันที่</th>

	                                    
	                             
	                              </tr>
	                            </thead>
	                            <tbody>
	                            	<?php 

                           		$index = 1;
										    foreach ($result as $field) {

									?>

		                                <tr>
		                                    <td><?=$index;?></td>
		                                    <td><?=$field->Product_ID;?></td>
		                                    
		                                    <td>เบิก</td>
		                                      <td><?=$field->Status;?></td>
		                                    <td><?=$field->Quantity;?></td>
   											<td><?=$field->PO_OutDate;?></td>
   											 
		                                    
		                                
		                                </tr>

	                                <?php 

	                                	$index++;
	                            			
	                            		}
	                                ?>

	                               
	                                <?php 

                           		
										    foreach ($result2 as $field) {

									?>

		                                <tr>
		                                    <td><?=$index;?></td>
		                                    <td><?=$field->Product_ID;?></td>
		                                    
		                                    <td>ซื้อ</td>
		                                      <td><?=$field->Status;?></td>
		                                    <td><?=$field->Number_Req;?></td>
   											<td><?=$field->Requisition_Date;?></td>
   											 
		                                    
		                                
		                                </tr>

	                                <?php 

	                                	$index++;
	                            			
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">เลือกสินค้า</h4>
      </div>
      <div class="modal-body">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>รหัส</th>
                <th>ชื่อสินค้า</th>
                <th>ยี่ห้อ</th>
                <th>ราคา</th>
                <th>คงเหลือในคลัง</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($product as $data) {
                    echo '<tr>
                    <td>'.$data->Product_ID.'</td>
                    <td>'.$data->Product_Name.'</td>
                    <td>'.$data->Product_Brand.'</td>
                    <td>'.$data->Price.'</td>
                    <td>'.$data->Numstock.'</td>
                    <td><button type="button" class="btn btn-danger btn-lg btn-block select-product" 
                        data-id="'.$data->Product_ID.'"
                        data-name="'.$data->Product_Name.'" 
                        data-unit="'.$data->Unit.'"
                        data-price="'.$data->Price.'"
                        data data-dismiss="modal">เลือก</button></td>
                    </tr>';
                }
                ?>
            </tbody>
          </table>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<!-- Script Sidebar -->
	<?php include 'script.php'; ?>  
<!-- #END# Script Sidebar -->

<script type="text/javascript">


$( document ).ready(function() {

	$('#requisition-table').DataTable();

	  $('.select-modal').click(function(){

            var _this = this;

            $('#myModal').modal('show');

            $('.select-product').click(function(){
                 var id = $(this).data("id");
                // var name = $(this).data("name");
                // var unit = $(this).data("unit");
                // var price = $(this).data("price");
                $(_this).parent().parent().find("input[name=Product_ID]").val(id);
                // $(_this).parent().parent().find("input[name=Product_Name]").val(name);
                // $(_this).parent().parent().find("input[name=Unit]").val(unit);
                // $(_this).parent().parent().find("input[name=Price]").val(price);
            });
            
        });
});
</script>

</body>
</html>
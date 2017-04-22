<!DOCTYPE html>
<html>


<?php

include_once 'class/db.class.php';

$database = new DB();
// echo $_GET["id"];exit;
 
/*====================================================
 * ดึงข้อมูลที่ค้นหาเจอออกมาทั้งหมด
 ===================================================== */
$result1 =  $database->query("SELECT * From returnoder where ReturnOder_ID='".$_GET['id']."'" )->find();
$result2 =  $database->query("SELECT * From wholesalers as w JOIN  returnoder as r on w.Wholesalers_ID=r.Wholesalers_ID " )->find();
 // print_r($result2);exit();
// print_r($result1);exit();

$result =  $database->query("SELECT R.NumberReturn, R.TotalPay, P.Product_ID, R.ReturnOder_ID,P.Product_Name, P.Price,P.Numstock,Po.Status FROM Product AS P JOIN returnorder_detail AS R ON P.Product_ID = R.Product_ID JOIN returnoder as Po on R.ReturnOder_ID=Po.ReturnOder_ID where Po.ReturnOder_ID='".$_GET['id']."'" )->findAll();


// "SELECT R.Number_Req, R.TotalPay, P.Product_ID, R.Requisition_ID, R.Requisition_Date, P.Product_Name, P.Price,P.Numstock,R.Status FROM Product AS P JOIN requisition_detail AS R ON P.Product_ID = R.Product_ID JOIN requisition as Re on R.Requisition_ID=Re.Requisition_ID where Re.Requisition_ID='".$_GET['id']."'"

// "SELECT R.Number_Req, R.TotalPay, P.Product_ID, R.Requisition_ID, R.Requisition_Date, P.Product_Name, P.Price,P.Numstock,Re.Status 
// FROM requisition_detail AS R
// JOIN requisition as Re on R.Requisition_ID=Re.Requisition_ID
// JOIN product AS P ON R.Product_ID= P.Product_ID
// where Re.Requisition_ID='".$_GET['id']."' ORDER BY Status ASC"
 //print_r($result);exit;
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



<!-- Content -->
<section class="content">
	
    <div class="container-fluid">
    	<div class="row clearfix">
	        <!-- Task Info -->
	        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	            <div class="card">
	           

	                <div class="body">
	                  <button name="b_print" type="button" class="btn z-btn-icon btn-text z-btn-gray z-btn-dropdown dropdown-toggle height43"  onClick="printdiv('div_print');" value=" Print "><i class="glyphicon glyphicon-print"></i> พิมพ์เอกสาร</button> 
	                 <div id="div_print">

	                 <div class="row clearfix"><h3 align=center>ใบคืนสินค้า</h3>
	                	<div class="body">
	                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
	                	 

	                	<h5>ชื่อร้านค้าส่ง : <?=$result2->Wholesalers_Name;?> </h5> 
	                	<h5>ที่อยู่ : <?=$result2->Address;?> </h5> 
	                    <h5>เบอร์โทรศัพท์ : <?=$result2->Telephone;?> </h5>
	                    <h5>อีเมลล์ : <?=$result2->Email;?> </h5>
	                     </div>
	                    
	                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
	                 
	                    <h5>รายการคืน เลขที่ <?=$result1->ReturnOder_ID;?></h5>
	                    <h5>วันที่ทำรายการ <?=$result1->ReturnDate;?></h5>
	                    <h5>ผู้ทำรายการ : <?=$result1->Name;?></h5>
	                    </div> 
	                    </div>
	                    </div>


	                    <div class="table-responsive" > 
	                   
	                    <div class="card">
	                     <div class="body">
	                     
	                        <table class="table table-bordered" id="requisition-table">


	                            <thead>
	                                <tr>
	                                    <th>#</th>
	                                    
	                                    <th>รหัสสินค้า</th>
	                                    <th>ชื่อสินค้า</th>                     
	                                    <th>คงเหลือ</th>
	                                    <th>จำนวนที่คืน</th>
	                                    <th>ราคาต่อหน่วย</th>
	                                    <th>ราคารวม</th>
	                                    <!--      <th>สถานะการอนุมัติ</th> -->
	                                </tr>
	                            </thead>
	                            <tbody>

	                            	<?php 
	                            		$index = 1;
		                            	// ตรวจสอบ
										if(!empty($result)){
										    // พบข้อมูล
										   $count=0;
										    $TotalPrice=0;
										   
										    foreach ($result as $field) {

										    	$TotalPrice+=$field->TotalPay;
										    	if ($field->Numstock<$field->NumberReturn) {
										    		$count++;
										    	}

									?>



		                                <tr>
		                                    <td><?=$index;?></td>
		                                    
		                                    <td align=right><?=$field->Product_ID;?></td>
		                                   <td><?=$field->Product_Name;?></td>
		                                 	<td align=right><?=$field->Numstock;?></td>
		                                 	<td align=right><?=$field->NumberReturn;?></td>
		                                 	<td align=right><?=number_format($field->Price, 2, '.', ',');?></td>
		                                    <td align=right><?=number_format($field->TotalPay, 2, '.', ',');?></td>
		                  
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

	                  <?php  if(isset($result)) {  ?>
	                   <h3 align=right>ราคารวมสุทธิ <?php if (!empty($TotalPrice)) {
	                    	echo number_format($TotalPrice, 2, '.', ',');
	                    }else { echo '0.00'; }?> บาท</h3>
	                     <?php } ?>


	                      
	                        </div>
		 		<hr>
	                        <TABLE align=center   width="80%" height="100" >
            
            <TR>
                     <TH> ผู้รับสินค้า	</TH>
                     <TH> ผู้ส่งสินค้า</TH>
                     <TH> ผู้รับเงิน</TH>
                     <TH> ผู้อนุมัติ</TH>
            </TR> 
            <TR>
                     <TD> .......................</TD>
                     <TD> .......................</TD>
                     <TD> .......................</TD>
                     <TD> ....................... </TD>
             </TR>
             <TR>
                     <TD> วันที่...............	</TD>
                     <TD> วันที่...............</TD>
                     <TD> วันที่...............</TD>
                     <TD> วันที่...............	</TD>
             </TR>
          
			</TABLE>    </div>  



	                        <h4 align=right>สถานะการอนุมัติ
	                   
	                  
	                   <?php
	            // echo "result:".isset($result).empty($result);   
	            
if(empty($result)){//delete empty data  
	   echo '<h3 class="text-danger"><b>ไม่มีข้อมูล</b></h3>
		<button class="btn btn-warning waves-effect"   data-type="confirm">ลบ</button>';}
else{                
	                    
		         if($_SESSION['Position'] == "ผู้จัดการ" || $_SESSION['Position'] == "admin"){

			                                    if ($field->Status == 0) {
			                                    	echo '<td>
			                                    			<button type="button" class="btn btn-default btn-confirm" data-toggle="modal" data-target="#myModal" data-id="'.$field->ReturnOder_ID.'">อนุมัติ</button>
		                                    				<button type="button" class="btn btn-danger btn-cancle" data-id="'.$field->ReturnOder_ID.'">ไม่อนุมัติ</button>
		                                    			</td>';
			                                    }
			                                    if ($field->Status == 1) {
			                                    	echo '<h3 align=right class="text-success"><b>อนุมัติ</b></h3>';
			                                    }
			                                    if ($field->Status == 2) {
			                                    	echo '<h3  align=right class="text-danger"><i>ไม่อนุมัติ</i></h3>';
			                                    }
			                                }
		                                   
       if($_SESSION['Position'] == "พนักงาน" || $_SESSION['Position'] == "admin"){

		                        
			                                    if ($field->Status == 0) {
			                                    	echo '<h3 align=right >
                                    					รอการอนุมัติ
                                							</h3>';
			                                    }
			                                    if ($field->Status == 1) {
			                                    	echo '<h3 align=right class="text-success"><b>อนุมัติ</b></h3>';
			                                    }
			                                    if ($field->Status == 2) {
			                                    	echo '<h3  align=right class="text-danger"><i>ไม่อนุมัติ</i></h3>';
			                                    }
			                                }
}	                                  
  ?>
			                            






	                       
	                        </h4>
	                       
	                       
	                   
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
	 <!-- Jquery Core Js -->
    

    <!-- Demo Js -->
       <?php include 'script.php'; ?>  
<!-- #END# Script Sidebar -->
<!-- <script type="text/javascript">
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
</script> -->
<script type="text/javascript">

$( document ).ready(function() {

    $('#requisition-table').DataTable();

	$(".btn-confirm").on('click',function(){
		var id = $(this).attr("data-id");
		$.ajax({ 
		    url: "../stock/action_return.php",
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
		    url: "../stock/action_return.php",
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

<script language="javascript">
function printdiv(printpage)
{
var headstr = "<html><head><section><div><h5><h2></h2></h5></div></section></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
</script>

<script language="JavaScript">

      function addCommas(nStr)
      {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
          x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
      }

      function chkNum(ele)
      {
        var num = parseFloat(ele.value);
        ele.value = addCommas(num.toFixed(2));
      }
    </script>

<script language="javascript">
function printdiv(printpage)
{
var headstr = "<html><head><section><div><h5><h2></h2></h5></div></section></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
</script>

</body>
</html>
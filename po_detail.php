<!DOCTYPE html>
<html>
<?php

include_once 'class/db.class.php';

$database = new DB();
// echo $_GET["id"];exit;
 
/*====================================================
 * ดึงข้อมูลที่ค้นหาเจอออกมาทั้งหมด
 ===================================================== */
$result1 =  $database->query("SELECT * From purchaseorder where PO_ID='".$_GET['id']."'" )->find();
 // print_r($result1);exit();


$result =  $database->query("SELECT R.Quantity, R.TotalPay, P.Product_ID, R.PO_ID, R.PO_ID, P.Product_Name, P.Price,P.Numstock,Po.Status FROM Product AS P JOIN po_detail AS R ON P.Product_ID = R.Product_ID JOIN purchaseorder as Po on R.PO_ID=Po.PO_ID where Po.PO_ID='".$_GET['id']."'" )->findAll();


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
	                 <div id="div_print">
	                 <div class="table-responsive">
	                	<h3 align=center>ใบสั่งซื้อ</h3> 
	                	<h5>รายการ เลขที่ : <?=$result1->PO_ID;?></h5> 
	                    <h5>วันที่สั่งซื้อ : <?=$result1->PO_OutDate;?></h5>
	                    <h5>ผู้ทำรายการ : <?=$result1->Name;?></h5>
	                     
	                    <div class="card">
	                     <div class="body">
	                        <table class="table table-bordered" id="requisition-table" >


	                            <thead>
	                                <tr>
	                                    <th>#</th>
	                                    
	                                    <th>รหัสสินค้า</th>
	                                    <th>ชื่อสินค้า</th>                       
	                                    <th>คงเหลือ</th>
	                                     <th>จำนวนที่สั่ง</th>
	                                    <th>ราคาต่อหน่วย</th>
	                                    <th>ราคารวม</th>
	                                       <!--   <th>รับสินค้า</th> -->
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
										    	if ($field->Quantity<$field->Quantity) {
										    		$count++;
										    	}

									?>



		                                <tr>
		                                    <td><?=$index;?></td>
		                                   
		                                    <td align=right><?=$field->Product_ID;?></td>
		                                   <td><?=$field->Product_Name;?></td>
		                                 	<td align=right><?=$field->Numstock;?></td>
		                                 	<td align=right><?=$field->Quantity;?></td>		                                       
		                                    <td align=right><?=number_format($field->Price, 2, '.', ',');?></td>
		                                    
		                                    <td align=right><?=number_format($field->TotalPay, 2, '.', ',');?></td> 
		                                   	
		                                   	
		                                </tr>



	                                <?php 
	                            			
	                            			$index++;}
	                            		}
	                                ?>
	                            </tbody>

	                            
	                        </table>
	                        </div>
	                        </div>
	                        


	                        <h4 align=right>ราคารวมสุทธิ <?=number_format($TotalPrice, 2, '.', ','); ?> บาท</h4>

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
          
			</TABLE>
	                        </div>
	                        <h5 align=right>สถานะการอนุมัติ
	                        <div class="col-md-12" > 
	                     
	                    <?php

	                     if($_SESSION['Position'] == "ผู้จัดการ" || $_SESSION['Position'] == "admin")

			                                    if ($field->Status == 0) {
			                                    	echo '<td>

			                                    			<button type="button" class="btn btn-default btn-confirm" data-toggle="modal" data-target="#myModal" data-id="'.$field->PO_ID.'"
			                                    				">
			                                    			รับสินค้า
			                                    			
			                                    			</button>
		                                    				<button type="button" class="btn btn-danger btn-cancle" data-id="'.$field->PO_ID.'">ยกเลิก</button>
		                                    			</td>';

			                                    }
			                                    if ($field->Status == 1) {
			                                    	echo '<h3 class="text-success"><b>รับสินค้าแล้ว</b></h3>';


			                                    }
			                                    if ($field->Status == 2) {
			                                    	echo '<h3 class="text-danger"><i>ยกเลิกรายการสั่งซื้อ</i></h3>';
			                                    }
		                                    ?>
		                                      








	                        </div>
	                        </h5>
	                        <button name="b_print" type="button" class="btn z-btn-icon btn-text z-btn-gray z-btn-dropdown dropdown-toggle height43"  onClick="printdiv('div_print');" value=" Print "><i class="icon ion-printer"></i> พิมพ์เอกสาร</button>
	                        <!-- <input name="b_print" type="button" class="ipt"   onClick="printdiv('div_print');" value=" Print "> -->
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- #END# Task Info -->
	     
	      


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

     $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'pdfHtml5',
                customize: function ( doc ) {
                    doc.content.splice( 1, 0, {
                        margin: [ 0, 0, 0, 12 ],
                        alignment: 'center',
                          } );
                }
            }
        ]
    } );

	$(".btn-confirm").on('click',function(){
		var id = $(this).attr("data-id"); 
 //alert(id);
		$.ajax({ 
		    url: "../stock/action_PO.php",
		    type: "POST",
		    data: {
		    	'method': 'update',
		        'id': id,
		        'status': 1
		    },
		    success: function () {
		    	// console.log(id);
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

<script type="text/javascript">

$( document ).ready(function() {

	$('#requisition-table').DataTable();

	
});
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
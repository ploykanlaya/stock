<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<?php

include_once 'class/db.class.php';

$database = new DB();
// echo $_GET["id"];exit;
 
/*====================================================
 * ดึงข้อมูลที่ค้นหาเจอออกมาทั้งหมด
 ===================================================== */
$result1 =  $database->query("SELECT * From purchaseorder where PO_ID='".$_GET['id']."'" )->find();
$result2 =  $database->query("SELECT * From wholesalers as w JOIN purchaseorder as p on w.Wholesalers_ID=p.Wholesalers_ID " )->find();
 // print_r($result2);exit();


$result =  $database->query("SELECT P.Unit,R.Quantity, R.TotalPay, P.Product_ID, R.PO_ID, R.PO_ID, P.Product_Name, P.Price,P.Numstock,Po.Status FROM Product AS P JOIN po_detail AS R ON P.Product_ID = R.Product_ID JOIN purchaseorder as Po on R.PO_ID=Po.PO_ID where Po.PO_ID='".$_GET['id']."'" )->findAll();


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
               <div class="header">
                      <h2>รายละเอียดรายการเบิก เลขที่  <?=$result1->PO_ID;?></h2>
                      
                  
                  </div>
   
	                <div class="body">
	              
	                



	                	<div class="row clearfix">
	                	<div class="body">
	                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
	                	 

	                	<h5>ชื่อร้านค้าส่ง : <?=$result2->Wholesalers_Name;?> </h5> 
	                	<h5>ที่อยู่ : <?=$result2->Address;?> </h5> 
	                    <h5>เบอร์โทรศัพท์ : <?=$result2->Telephone;?> </h5>
	                    <h5>อีเมลล์ : <?=$result2->Email;?> </h5>
	                     </div>
	                    
	                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
	                 
	                   
	                    <h5>วันที่สั่งซื้อ : <?=$result1->PO_OutDate;?></h5>
	                    <h5>ผู้ทำรายการ : <?=$result1->Name;?></h5>
	                    </div> 
	                    </div>
	                    </div>

	                 <div class="table-responsive">



	                 <!-- Line Chart -->
    <!-- <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="card">
                    <div class="header">
                        <h2>ผู้ทำรายการ</h2>
                        
                    </div>
                    <div class="body">
                        <h5>รายการ เลขที่ : <?=$result1->PO_ID;?></h5> 
	                	<h5>ร้านค้าส่ง : <?=$result2->Wholesalers_ID;?></h5> 
	                    <h5>วันที่สั่งซื้อ : <?=$result1->PO_OutDate;?></h5>
	                    <h5>ผู้ทำรายการ : <?=$result1->Name;?></h5>
                    </div>
                </div>
            </div> -->
      
        
            <!-- #END# Line Chart -->

            <!-- Pie Chart -->
            
           <!--  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="card">
                    <div class="header">
                        <h2>ร้านค้าส่ง</h2>
                       
                        
                    </div>
                    <div class="body">
                        <h5>รายการ เลขที่ : <?=$result1->PO_ID;?></h5> 
	                	<h5>ร้านค้าส่ง : <?=$result2->Wholesalers_ID;?></h5> 
	                    <h5>วันที่สั่งซื้อ : <?=$result1->PO_OutDate;?></h5>
	                    <h5>ผู้ทำรายการ : <?=$result1->Name;?></h5>
                    </div>
                </div>
            </div>
            </div>
           -->

            <!-- #END# Pie Chart -->






	               
	                     
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
	                                    <th>หน่วยนับ</th>
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
		                                    <td align=right><?=$field->Unit;?></td>
		                                    
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

	                        
	                        <h4 align=right>สถานะการอนุมัติ<br><br>
	                        <!-- <div class="col-md-12" > --> 
	                     
	                    <?php

	                     if($_SESSION['Position'] == "ผู้จัดการ" || $_SESSION['Position'] == "admin")

			                                    if ($field->Status == 0) {
			                                    	echo '<td>

			                                    			<button type="button" class="btn btn-default btn-confirm" data-toggle="modal" data-target="" data-id="'.$field->PO_ID.'"
			                                    				">
			                                    			รับสินค้า
			                                    			
			                                    			</button>
		                                    				<button type="button" class="btn btn-danger btn-cancle" data-id="'.$field->PO_ID.'">ยกเลิก</button>
		                                    			

                                              <button type="button" class="btn btn-primary waves-effect" onclick="selectModal()">ปรับจำนวนสั่งซื้อ</button>

                                              </td>'; 


			                                    }
			                                    if ($field->Status == 1) {
			                                    	echo '<h3 align=right class="text-success"><b>รับสินค้าแล้ว</b></h3>';


			                                    }
			                                    if ($field->Status == 2) {
			                                    	echo '<h3 align=right class="text-danger"><i>ยกเลิกรายการสั่งซื้อ</i></h3>';
			                                    }
		                                    ?>
		                                      


	                       





	                        <!-- </div> -->
	                       
	                        


                                    


	                        </h4>

	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- #END# Task Info -->
	     
	      


    </div>
</section>
<!-- #END# Content -->
 
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">ปรับจำนวน</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered" id="requisition-table">
            <thead>
              <tr>
                <th>รหัส</th>
                <th>ชื่อสินค้า</th>
                <th>ราคา</th> 
                <th>หน่วยนับ</th>
                <th>คงเหลือในคลัง</th>
                <th>จำนวนที่สั่งซื้อ</th>
              </tr>
            </thead>
            <tbody>
            <form method="POST">
                <?php 
                    foreach ($result as $data) {
                ?>
                    <tr>
                    <input type="hidden" name="PO_ID" value="<?php echo $data->PO_ID;?>">
                    <input type="hidden" name="Product_ID" value="<?=$data->Product_ID?>">               
                    <td align=right><?php echo $data->Product_ID; ?></td>
                        <td ><?php echo $data->Product_Name ?></td>
                       
                        <td align=right><?= number_format($data->Price, 2, '.', ',') ?></td>
                         <td ><?=$data->Unit?></td>
                        <td align=right><?= $data->Numstock ?></td>
                        <td align=right>
                        <input type="number" id='product_<?=$data->Product_ID?>' name="Quantity" class="form-control" value="<?= $data->Quantity ?>">
                        </td>
                        <td> <input type="button"  class="btn btn-primary"  value="อัพเดท"
                        onclick="update_po('<?=$data->PO_ID?>','<?=$data->Product_ID?>')" /> </td> 
               
	                       
                  </tr>
                <?php
                    }
                ?>
                </form>
                
            </tbody>
          </table>
      </div>
     
    </div>
  </div>
</div> 



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

       <script type="text/javascript">
    // function cloneRow() {
    //     var content = document.querySelector('template').content;
    //     document.querySelector('#tableToModify').appendChild(
    //     document.importNode(content, true));
    //     var rowCount = $('#select-product-list tbody > tr').length-1;
    //     var i = rowCount+1;

    //     var last = $('#select-product-list tbody > tr:last');
    //     last.attr('id','tr-'+i);
    //     last.find("button").attr('id','btn-'+i);
    // }    

    function selectModal(){
        $("#myModal").modal("show");
    }

    // function getSecondPart(str) {
    //     return str.split('-')[1];
    // }

    $( document ).ready(function() {

        $('#product-table').dataTable();

        $('#confirm').click(function(){
            var tbody= "";
            $('#product-table > tbody  > tr').each(function() {
                var id = $(this).find('input[name="amount"]').data('id');
                var name = $(this).find('input[name="amount"]').data("name");
                var unit = $(this).find('input[name="amount"]').data("unit");
                var price = $(this).find('input[name="amount"]').data("price");
                var amount = $(this).find('input[name="amount"]').val();
                if(amount > 0){
                    tbody = tbody+'<tr>'+                                     
                        '<td><input value="'+id+'" type="text" class="form-control" name="Product_ID[]" readonly="true"></td>'+
                        '<td><input value="'+name+'" type="text" class="form-control" name="Product_Name[]" readonly="true"></td>'+  
                        '<td><input value="'+amount+'" type="number" class="form-control" name="Quantity[]" min="1" text="1"></td>'+
                        '<td><input value="'+price+'" type="text" class="form-control" name="Price[]" readonly="true"></td>'+
                        '<td><input value="'+unit+'" type="text" class="form-control" name="Unit[]" readonly="true"></td>'+
                        '<td><input value="'+(price*amount)+'" type="text" class="form-control" name="TotalPay[]" readonly="true"></td>'+
                        '</tr>';
                }
            });
            $('#tableToModify').html(tbody);
            $("#myModal").modal("hide");
        });

        $(".numb-request").change(function() { 
            var _this = this;
            var value = $(this).val();
            var price = $(_this).parent().parent().find("input[name=Price]").val();
            $(_this).parent().parent().find("input[name=TotalPay]").val(value*price);
        });
    });
   
</script>
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
  var update_po =function(PO_ID,Product_ID){
    Quantity = $('#product_'+Product_ID).val();
    $.ajax({
      url:"../stock/update_po.php",
      type : "POST",
      data : {
        "PO_ID":PO_ID,
        "Product_ID":Product_ID,
        "Quantity":Quantity
      },
      success : function(){
         alert("แก้ไขเรียบร้อย");
      }

    })

  }


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
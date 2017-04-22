<!DOCTYPE html>
<html>
<?php

include_once 'class/db.class.php';

$database = new DB();
 
/*====================================================
 * ดึงข้อมูลที่ค้นหาเจอออกมาทั้งหมด
 ===================================================== */


if (isset($_POST["Wholesalers_ID"])) {
    $product =  $database->query("SELECT * FROM product where Wholesalers_ID=('".$_POST["Wholesalers_ID"]."')")->findAll();
    $name =$database->query("SELECT * FROM Wholesalers where Wholesalers_ID=('".$_POST["Wholesalers_ID"]."')")->findAll();
}

 $sqli = $database->query("SELECT Wholesalers_ID,Wholesalers_Name FROM Wholesalers")->findAll();


                                                 
    
?>
<!-- Head -->
    <?php include 'head.php'; ?>  
<!-- #Head --> 
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
    <div class="block-header">
                <h2>การสั่งซื้อสินค้า</h2>
            </div>
        <!-- Multi Column -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h4>สร้างรายการซื้อ</h4>
                    </div>
                    <div class="body">
                        <!-- <form id="addproduct" method="POST" action="AddRequisitionControl.php"> -->
                        
                             
                             <!--    <div class="col-md-6">
                                    <div class="form-group">
                                         <label class="form-label">รหัสพนักงาน</label>
                                         <div class="form-line">
                                             <input type="text" class="form-control" name="UserID"  required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label class="form-label">ชื่อพนักงาน</label>
                                         <div class="form-line">                                       
                                           <input type="text" class="form-control" name="Name"  required>
                                        </div>
                                    </div>
                                </div>      
                               -->

                               <form method="POST" action="po_add.php">
                            <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="form-group">
                                     <label class="form-label">ร้านค้าส่ง</label> 
                                               <?php if (empty($_POST['Wholesalers_ID'])){ ?>
                                                <select name="Wholesalers_ID" class="form-control" >
                                                       <option>เลือกร้านค้าส่ง</option>
                                                    
                                                      <?php
                                                        foreach ($sqli as $row1) {

                                                            echo " <option value=".$row1->Wholesalers_ID." >

                                                                    ".$row1->Wholesalers_Name."</option>";                 
                                                        }
                                                                                   
                                                    ?>
                                                     
                                                  </select>
                                           <div class="row clearfix">
                                            <div class="body">
 
                                                  <button type="submit" class="btn btn-primary waves-effect" >ตกลง</button>

                                              
                                          </div>
                                          </div>

                                               <?php   }
                                               else 

                                                echo $name[0]->Wholesalers_Name; ?>
                                                   
                                             
                                    
                                  </div>
                                </div>


                            </div>


                            </form>

                       <?php 
                            if (isset($_POST['Wholesalers_ID'])) {
                            
                                  // var_dump($name[0]);
                             ?>

                        <form method="POST" action="AddProductControl_PO.php">
                        <input type="hidden" name="Wholesalers_ID" value="<?php echo ($name[0]->{'Wholesalers_ID'}) ?>" >
                        <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                         <label class="form-label">รายการ</label>
                                         <div class="form-line">                  
                                         <?php $recent_ID =  $database->query("SELECT CAST(PO_ID as INT) AS PO_ID FROM purchaseorder ORDER BY PO_ID DESC limit 1")->findAll();

                                                  ?>
                                           <input type="text" class="form-control" name="PO_ID" readonly value="<?php echo $recent_ID[0]->PO_ID+1; ?>">
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                            
                            <div class="row clearfix">
                                <div class="col-lg-12">
                                    <div class="card">
                                       <div class="header">
                                             <h4>เลือกสินค้า</h4>
                                         </div>
                                        <table class="table table-bordered" id="select-product-list">
                                            <thead>
                                            <tr>
                                               
                                                <th class="col-md-2">รหัสสินค้า</th>
                                                <th class="col-md-2">ชื่อสินค้า</th> 
                                                <th class="col-md-2">จำนวน</th>
                                                <th class="col-md-2">มูลค่าต่อหน่วย</th>
                                               <th class="col-md-2">หน่วยสินค้า</th> 
                                                <th class="col-md-2">ราคารวม</th>
                                            </tr>
                                            </thead>

                                            <tbody id="tableToModify">
                                            </tbody>
                                            <tfoot>
                                              <tr>
                                                <th colspan="5" class="text-right" style="vertical-align:bottom;">ราคารวมสุทธิ</th>
                                                <th><input id="total_cost" type="text" class="form-control" name="total_cost" readonly="true"></th>
                                            </tr>
                                            </tfoot>
                                        </table>  
                                        <div class="row clearfix">

                                        <div class="col-lg-12"><button type="button" class="btn btn-primary waves-effect" onclick="selectModal()">+ เลือกสินค้า</button></div></div>
                                     </div>
                                </div>
                            </div> 

                          <!--   <div class="row clearfix js-sweetalert">
                             <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <p>A warning message, with a function attached to the <b>Confirm</b> button...</p>
                                    <button class="btn btn-primary waves-effect" data-type="confirm">CLICK ME</button>
                                </div>
                            </div> 
 -->

                             <button type="submit" class="btn btn-danger btn-lg btn-block">บันทึก</button>
                        </form>

                         <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Multi Column -->
    </div>


</section>
<!-- #END# Content -->
<!-- Modal -->


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">เลือกสินค้า</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered" id="product-table">
            <thead>
              <tr>
                <th>รหัส</th>
                <th>ชื่อสินค้า</th>
                <th>ราคา</th> 
                <th>หน่วยนับ</th>
                <th>คงเหลือในคลัง</th>
                <th>จำนวน</th>
              </tr>
            </thead>
            <tbody>
                <?php 

                    foreach ($product as $data) {
                        echo '<tr>
                        <td align=right>'.$data->Product_ID.'</td>
                        <td >'.$data->Product_Name.'</td>
                       
                        <td align=right>'.number_format($data->Price, 2, '.', ',').'</td>
                         <td >'.$data->Unit.'</td>
                        <td align=right>'.$data->Numstock.'</td>
                        <td align=right><input type="input" class="form-control" name="amount"
                            data-id="'.$data->Product_ID.'"
                            data-name="'.$data->Product_Name.'" 
                            data-unit="'.$data->Unit.'"
                            data-price="'.$data->Price.'"></td></tr>';

                    }
                ?>
            </tbody>
          </table>
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-lg btn-block" id="confirm">ยืนยัน</button>
      </div>
    </div>
  </div>
</div>


<!-- Script Sidebar -->
    <?php include 'script.php'; ?>  
<!-- #END# Script Sidebar -->
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
            var total_cost = 0;
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
                    total_cost+=price*amount;
                }
            });
            $('#tableToModify').html(tbody);
            $('#total_cost').val(total_cost);
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
</body>
</html>
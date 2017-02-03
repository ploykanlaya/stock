<!DOCTYPE html>
<html>
<?php

include_once 'class/db.class.php';

$database = new DB();
 
/*====================================================
 * ดึงข้อมูลที่ค้นหาเจอออกมาทั้งหมด
 ===================================================== */
$product =  $database->query("SELECT * FROM product")->findAll();

?>
<!-- Head -->
    <?php include 'head.php'; ?>  
<!-- #Head --> 
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
    <div class="block-header">
                <h2>การเบิกสินค้า</h2>
            </div>
        <!-- Multi Column -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h4>สร้างรายการเบิก</h4>
                    </div>
                    <div class="body">
                        <!-- <form id="addproduct" method="POST" action="AddRequisitionControl.php"> -->
                        <form method="POST" action="AddProductControl.php">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                         <label class="form-label">รายการ</label>
                                         <div class="form-line">                                       
                                           <input type="text" class="form-control" name="Requisition_ID" placeholder="Requisition_ID" required>
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label class="form-label">รหัสพนักงาน</label>
                                         <div class="form-line">
                                             <input type="text" class="form-control" name="UserID" placeholder="UserID" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label class="form-label">ชื่อพนักงาน</label>
                                         <div class="form-line">                                       
                                           <input type="text" class="form-control" name="Name" placeholder="Name" required>
                                        </div>
                                    </div>
                                </div>      
                              
                                <div class="col-md-6">                              
                                    <div class="form-group">
                                        <label class="form-label">วันทำการ</label>
                                        <div class="form-line">
                                           <input type="text" class="datepicker form-control" name="Requisition_Date" placeholder="Please choose a date...">
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
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                               
                                                <th>รหัสสินค้า</th>
                                                <th>ชื่อสินค้า</th>
                                                <th>จำนวน</th>
                                                <th>มูลค่าต่อหน่วย</th>
                                               <th>หน่วยสินค้า</th>
                                                <th>ราคารวม</th>
                                                <th>เลือกสินค้า</th>
                                            </tr>
                                            </thead>
<<<<<<< HEAD
                                            <tbody>
                                                <tr>
                                              
                                                <td><input type="text" class="form-control" id="pID" name="Product_ID"></td>
                                                <td><input type="text" class="form-control" id="pName" name="Product_Name"></td>
                                                <td><input type="text" class="form-control" id="pAmount" name="Number_Req"></td>
                                                <td><input type="text" class="form-control" id="pAmount" name="Price"></td>
                                                <td><input type="text" class="form-control" id="pUnit" name="Unit"></td>
                                                 <td><input type="text" class="form-control" id="pTotal" name="TotalPay" ></td>
                                                 <td><button type="button" class="btn btn-danger">เลือก</button></td>
=======
                                            <tbody id="tableToModify">
                                                <tr id="rowToClone">
                                                    
                                                <td><input type="text" class="form-control" id="pID" name="Product_ID[]"></td>
                                                <td><input type="text" class="form-control" id="pName" name="Product_Name[]"></td>
                                                <td><input type="text" class="form-control amount" id="pAmount" name="Price[]"></td>
                                                <td><input type="text" class="form-control unit" id="pUnit" name="Unit[]"></td>
                                                 <td><input type="text" class="form-control" id="pTotal" name="Number_Req[]"></td>
                                                 <td><input type="text" class="form-control" id="pTotal" name="Total[]"></td>
                                                 <td><button type="button" class="btn btn-danger select-modal">เลือก</button></td>
>>>>>>> origin/master
                            
                                   
                                           </tr>
                                            </tbody>
                                        </table>  

                                        <div class="col-lg-12"><button type="button" class="btn btn-primary waves-effect" onclick="cloneRow()" value="Clone Row">เลือกสินค้าเพิ่ม</button></div>
                                        
<<<<<<< HEAD
                                                  
=======
                                          
>>>>>>> origin/master
                                     </div>
                                </div>
                            </div>    
                             <button type="submit" class="btn btn-danger btn-lg btn-block">บันทึก</button>
                        </form>
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
                    <td><button type="button" class="btn btn-danger btn-lg btn-block select-product" data="'.$data->Product_ID.'" data-dismiss="modal">เลือก</button></td>
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
    function cloneRow() {
      var row = document.getElementById("rowToClone"); // find row to copy
      var table = document.getElementById("tableToModify"); // find table to append to
      var clone = row.cloneNode(true); // copy children too
      clone.id = "newID"; // change id or other attributes/contents
      table.appendChild(clone); // add new row to end of table
    }

    $( document ).ready(function() {
         $("#pAmount").change(function () {
            var unit = $(this).closest(".unit").value();
            alert('ddsdsd');
        });

         $('.select-modal').click(function(){
            $('#myModal').modal('show');
        });
    });
   
</script>
</body>
</html>
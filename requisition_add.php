<!DOCTYPE html>
<html>
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
                                                <th>รหัสใบเบิก</th>
                                                <th>รหัสสินค้า</th>
                                               <!--  <th>ชื่อสินค้า</th> -->
                                                <th>จำนวน</th>
                                               <!--  <th>มูลค่าต่อหน่วย</th> -->
                                               <!-- <th>หน่วยสินค้า</th> -->
                                                <th>ราคารวม</th>
                                                <th>เลือกสินค้า</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td><input type="text" class="form-control" id="pName" name="Requisition_ID"></td>
                                                <td><input type="text" class="form-control" id="pID" name="Product_ID"></td>
                                               <!--  <td><input type="text" class="form-control" id="pName" name="Product_Name"></td> -->
                                                <td><input type="text" class="form-control" id="pAmount" name="Number_Req"></td>
                                             <!--    <td><input type="text" class="form-control" id="pAmount" name="Price"></td> -->
                                               <!--  <td><input type="text" class="form-control" id="pUnit" name="Unit"></td> -->
                                                 <td><input type="text" class="form-control" id="pTotal" name="TotalPay" ></td>
                                                 <td><button type="button" class="btn btn-danger">เลือก</button></td>
                            
                                   
                                           </tr>
                                            </tbody>
                                        </table>  

                                        <br>
                                        <button class="btn btn-primary waves-effect"   data-type="confirm">เลือกสินค้าเพิ่ม</button><br>
                                        
                                                   <label class="form-label">  มูลค่ารวมสุทธิ  0.00 </label>
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

<!-- Script Sidebar -->
    <?php include 'script.php'; ?>  
<!-- #END# Script Sidebar -->
<script type="text/javascript">
   
</script>
</body>
</html>
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
<<<<<<< HEAD
                        <form id="addproduct" method="POST" action="AddRequisitionControl.php">
=======
                        <form method="POST" action="AddProductControl.php">
>>>>>>> origin/master
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
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>รหัส</th>
                                                <th>ชื่อสินค้า</th>
                                                <th>จำนวน</th>
<<<<<<< HEAD
                                                <th>มูลค่าต่อหน่วย</th>
                                                <th>ราคาราม</th>
=======
                                                <th>ราคารวม</th>
>>>>>>> origin/master
                                                <th>เลือกสินค้า</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
<<<<<<< HEAD
                                                <td> <input type="text" class="form-control" id="usr"></td>
                                                <td><input type="text" class="form-control" id="usr"></td>
                                                <td><input type="text" class="form-control" id="usr"></td>
                                                <td><input type="text" class="form-control" id="usr"></td>
                                                 <td><input type="text" class="form-control" id="usr"></td>
                            
                                    <td> 
                                    
                                    <form name="sentMessage1" id="contactForm" novalidate role="form" method="POST" action="requisition_list.php">

                                    <input type="hidden" name="Product_ID" value="<?php echo $rows['Product_ID']; ?>">
                                    <input type="hidden" name="Product_Name" value="<?php echo $rows['Product_Name']; ?>">
                                    <input type="hidden" name="Price" value="<?php echo $rows['Price']; ?>">
                                    <input type="hidden" name="Unit" value="<?php echo $rows['Unit']; ?>">
                                 <!--     <input type="hidden" name="Unit" value="<?php echo $rows['Unit']; ?>"   เเพิ่มราคารวม ยังไมได่ทำ>
 -->

                                     <button class="btn btn-primary waves-effect"   data-type="confirm">เลือก</button>
                                               
                                   </form> 

                                   </td>      

                                           </tr>
=======
                                                <td><input type="text" class="form-control" name="pID"></td>
                                                <td><input type="text" class="form-control" name="pName"></td>
                                                <td><input type="text" class="form-control" name="pAmount"></td>
                                                <td><input type="text" class="form-control" name="pTotal"></td>
                                                <td><button type="button" class="btn btn-danger">เลือก</button></td>
                                                </tr>
>>>>>>> origin/master
                                            </tbody>
                                        </table>  

                                        <br>
                                        <button class="btn btn-primary waves-effect"   data-type="confirm">เลือกสินค้าเพิ่ม</button><br>
                                        
                                                        มูลค่ารวมก่อนภาษี  <br>
                                                        0.00  <br>
                                                        ภาษีมูลค่าเพิ่ม (7%)  <br>
                                                        0.00  <br>
                                                        มูลค่ารวมสุทธิ  <br>
                                                        0.00  <br>
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
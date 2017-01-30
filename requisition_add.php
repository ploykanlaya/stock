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
<!-- Left Sidebar -->
    <?php include 'right-menu-sidebar.php'; ?>  
<!-- #END# Left Sidebar -->

<!-- Content -->
<section class="content">
    <div class="container-fluid">
        <!-- Multi Column -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h4>เพิ่มใบเบิกสินค้า</h4>
                    </div>
                    <div class="body">
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
                                         <label class="form-label">ชื่อพนักงาน</label>
                                         <div class="form-line">                                       
                                           <input type="text" class="form-control" name="User_Name" placeholder="User_Name" required>
                                        </div>
                                    </div>
                                </div>      
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label class="form-label">เบอร์โทรศัพท์</label>
                                         <div class="form-line">
                                             <input type="text" class="form-control" name="Telephone" placeholder="Telephone" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">                              
                                    <div class="form-group">
                                        <label class="form-label">วันทำการ</label>
                                        <div class="form-line">
                                           <input type="text" class="datepicker form-control" name="ExpDate" placeholder="Please choose a date...">
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
                                                <th>ราคารวม</th>
                                                <th>เลือกสินค้า</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td><input type="text" class="form-control" name="pID"></td>
                                                <td><input type="text" class="form-control" name="pName"></td>
                                                <td><input type="text" class="form-control" name="pAmount"></td>
                                                <td><input type="text" class="form-control" name="pTotal"></td>
                                                <td><button type="button" class="btn btn-danger">เลือก</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
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
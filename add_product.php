<!DOCTYPE html>
<html>


<!-- Top Bar -->
    <?php include 'head.php'; ?>  
<!-- #Top Bar --> 
<body class="theme-red">
<!-- Top Bar -->
    <?php include 'top-bar.php'; ?>  
<!-- #Top Bar -->
<!-- Left Sidebar -->
    <?php include 'left-menu-bar.php'; ?>  
<!-- #END# Left Sidebar -->


      

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>FORM EXAMPLES</h2>
            </div>

            <!-- Multi Column -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                MULTI COLUMN
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                         <form id="addproduct" method="POST" action="AddProductControl.php">
                              
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                         <label class="form-label">ชื่อสินค้า</label>
                                         <div class="form-line">                                       
                                           <input type="text" class="form-control" name="Product_Name" placeholder="Product_Name" required>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label class="form-label">ราคาขายสินค้า</label>
                                         <div class="form-line">
                                             <input type="text" class="form-control" name="Price" placeholder="Price" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="form-label">หน่วยนับสินค้า</label>
                                        <div class="form-line">
                                             <input type="text" class="form-control" name="Unit" placeholder="Unit" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                     <label class="form-label">จำนวนยกยอดมา</label>
                                        <div class="form-line">
                                             <input type="text" class="form-control" name="Numstock" placeholder="Numstock" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                     <label class="form-label">จุดสั่งซื้อสินค้าใหม่</label>
                                        <div class="form-line">
                                              <input type="text" class="form-control" name="SafetyStock" placeholder="SafetyStock" required>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                  
                                    <div class="form-group">

                                     <label class="form-label">วันหมดอายุ</label>
                                        <div class="form-line">
                                           <input type="text" class="datepicker form-control" name="ExpDate" placeholder="Please choose a date...">
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                     <label class="form-label">ร้านค้าส่ง/ปุ่มเลือก</label>
                                        <div class="form-line">
                                             <input type="text" class="form-control" name="Wholesalers_ID" placeholder="Wholesalers_ID" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                     <label class="form-label">ประเภทสินค้า/dropdown</label>
                                        <div class="form-line">
                                              <input type="text" class="form-control" name="ProductType_ID" placeholder="ProductType_ID" required>
                                        </div>
                                    </div>
                                </div>
                             
                            </div>

                               <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">ยืนยัน</button>
                                    </div>
                                </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            
            <!-- #END# Multi Column -->
        </div>
    </section>


   <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
<!DOCTYPE html>
<html>


<!-- Top Bar -->
    <?php include 'head.php'; ?>  
<!-- #Top Bar --> 


<?php
        require("Class.php");
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "stock";

        // Create connection
        $conn = new mysqli($servername, $username, $password,$database);
        mysqli_set_charset($conn,"utf8");
        // Check connection
        if (mysqli_connect_errno($conn))
          {
             echo "Failed to connect to MySQL: " . mysqli_connect_error($conn);
          }
    


        
       
    ?>
<body class="theme-blue">
<!-- Top Bar -->
    <?php include 'top-bar.php'; ?>  
<!-- #Top Bar -->
<!-- Left Sidebar -->
    <?php include 'left-menu-bar.php'; ?>  
<!-- #END# Left Sidebar -->


      

    <section class="content">
        <div class="container-fluid">
           

            <!-- Multi Column -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                เพิ่มร้านค้าส่ง
                            </h2>
                         
                        </div>
                        <div class="body">
                         <form id="addproduct" method="POST" action="AddProductControlCopy.php">
                              
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                         <label class="form-label">ชื่อบริษัท</label>
                                         <div class="form-line">                                       
                                           <input type="text" class="form-control" name="Product_Name" placeholder="Product_Name" required>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label class="form-label">เบอร์โทรศัพท์</label>
                                         <div class="form-line">
                                             <input type="text" class="form-control" class="form-control" name="Price" placeholder="Price" >
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="form-label">อีเมลล์</label>
                                        <div class="form-line">
                                             <input type="text" class="form-control" name="Unit" placeholder="Unit" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                     <label class="form-label">ที่อยู่</label>
                                        <div class="form-line">
                                             <input type="text" class="form-control" name="address" placeholder="Unit" required>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>

                           
                                       <button type="submit" class="btn btn-danger btn-lg btn-block">ยันยืน</button>
                                  
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
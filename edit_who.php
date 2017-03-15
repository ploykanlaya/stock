<!DOCTYPE html>
<html>

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




<?php
      
        $hostname_connectDB = "localhost";
            $database_connectDB = "stock";
            $username_connectDB = "root";
            $password_connectDB = "";
            // Create connection
            $conn = new mysqli($hostname_connectDB, $username_connectDB,$password_connectDB, $database_connectDB);
            mysqli_set_charset($conn,"utf8");
       
        $query = "SELECT * FROM Wholesalers";
        $result = mysqli_query($conn,$query);
       
        $Wholesalers_ID=$_POST['Wholesalers_ID'];
        $Wholesalers_Name=$_POST["Wholesalers_Name"];
        $Telephone=$_POST["Telephone"];
        $Email=$_POST["Email"];
        $Address=$_POST["Address"];
      
    ?>


   <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ข้อมูลร้านค้าส่ง</h2>
            </div>

            <!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                แก้ไขข้อมูลร้านค้าส่ง
                            </h2>
                         
                        </div>
                        <div class="body">
                            <form class="form-horizontal" method="POST" action="EditUserControl.php"> 
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="Name">ชื่อร้านค้าส่ง</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                             <input type="text" class="form-control" name="Wholesalers_Name" placeholder="ชื่อ-สกุล" value='<?php echo $Wholesalers_Name ?>' required autofocus/>
                         <input type="hidden" name="Wholesalers_ID" value='<?php echo $Wholesalers_ID ?>'/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="Telephone">เบอร์โทรศัพท์</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="Telephone" placeholder="เบอร์โทรศัพท์" value='<?php echo $Telephone ?>' />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="Address">E-mail</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                 <input type="text" class="form-control" name="Email" placeholder="E-mail" value='<?php echo $Email ?>'>
                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="Username">ที่อยู่</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                               <input type="text" class="form-control" name="Address" placeholder="ที่อยุ่" value='<?php echo $Address ?>'>
                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           <!--      <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="checkbox" id="remember_me_3" class="filled-in">
                                        <label for="remember_me_3">แก้ไขเรียบร้อยแล้ว</label>
                                    </div>
                                </div> -->
                               
                                        <button type="submit" class="btn btn-danger btn-lg btn-block">ยืนยัน</button>
                          
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->
         
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

    <!-- Jquery Validation Plugin Css -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/forms/form-validation.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
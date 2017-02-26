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
       
        $query = "SELECT * FROM user";
        $result = mysqli_query($conn,$query);
       
        $UserID=$_POST['UserID'];
        $Name=$_POST["Name"];
        $Telephone=$_POST["Telephone"];
        $Address=$_POST["Address"];
        $Username=$_POST["Username"];
      
    ?>
 


  

   <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ข้อมูลผู้ใช้งาน</h2>
            </div>

            <!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                แก้ไขข้อมูลผู้ใช้งาน
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
                            <form class="form-horizontal" method="POST" action="EditUserControl.php"> 
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="Name">ชื่อ-สกุล</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                             <input type="text" class="form-control" name="Name" placeholder="ชื่อ-สกุล" value='<?php echo $Name ?>' required autofocus/>
                         <input type="hidden" name="UserID" value='<?php echo $UserID ?>'/>
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
                                        <label for="Address">ที่อยู่</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                 <input type="text" class="form-control" name="Address" placeholder="ที่อยู่" value='<?php echo $Address ?>'>
                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="Username">ชื่อผู้ใช้</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                               <input type="text" class="form-control" name="Username" placeholder="ชื่อผู้ใช้งาน" value='<?php echo $Username ?>'>
                            
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
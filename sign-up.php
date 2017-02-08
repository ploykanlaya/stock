<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign Up | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
</head>
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


<section class="content">
    <div class="container-fluid">
       
             <div class="row clearfix">
            <div class="col-lg-12">
                   

        <div class="card">
        <div class="header">
                        <h4>เพิ่มผู้ใช้งานระบบ</h4>
                    </div>
            <div class="body">
                <form id="sign_up" method="POST" action="AddUserControl.php">
                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            <!-- <i class="material-icons">person</i> -->ชื่อ-สกุล
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="Name" placeholder="Name Surname" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                           <!-- <i class="material-icons">call</i> -->เบอร์โทรศัพท์
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="Telephone" placeholder="Telephone" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <!-- <i class="material-icons">home</i> -->ที่อยู่
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="Address" placeholder="Address" required>
                        </div>
                    </div>

                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            <!-- <i class="material-icons">account_circle</i> -->ชื่อผู้ใช้งาน
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="Username" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                           <!--  <i class="material-icons">lock</i> -->รหัสผ่าน
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <!-- <i class="material-icons">lock</i> -->ยืนยันรหัสผ่าน
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                        </div>
                    </div>

                     <div class="form-group">
                        <input type="radio" name="position" id="pos0" class="filled-in chk-col-pink" value="ผู้จัดการ">
                        <label for="pos0">ผู้จัดการ</label>
                        <input type="radio" name="position" id="pos1" class="filled-in chk-col-pink" value="พนักงาน">
                        <label for="pos1">พนักงาน</label>
                    </div>




                

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">ยืนยัน</button>

                  
             
                </form>

            </div>
        </div>
    </div>
    </div>
    </div>
    </section>

<!-- Script Sidebar -->
    <?php include 'script.php'; ?>  
<!-- #END# Script Sidebar -->
<!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-up.js"></script>
</body>

</html>
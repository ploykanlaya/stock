<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign Up | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">
</head>
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
 
<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Edit<b>User</b></a>
            <small>Convenience Store’s Online Inventory Management System</small>
        </div>
        <div class="card">
            <div class="body">
                <form  method="POST"  action="../../EditUserControl.php">
                    <div class="msg">Edit User</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line"> 
                       
                            <input type="text" class="form-control" name="Name" placeholder="Name Surname" value='<?php echo $Name ?>' required autofocus/>
                             <input type="hidden" name="UserID" value='<?php echo $UserID ?>'/>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                           <i class="material-icons">call</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="Telephone" placeholder="Telephone" value='<?php echo $Telephone ?>' />
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">home</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="Address" placeholder="Address" value='<?php echo $Address ?>'>
                        </div>
                    </div>

                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">account_circle</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="Username" placeholder="Username" value='<?php echo $Username ?>'>
                        </div>
                    </div>
                   <!--  <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" value='<?php echo $Username ?>'>
                        </div>
                    </div> -->
                   <!--  <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                        </div>
                    </div>

                     <div class="form-group">
                        <input type="radio" name="position" id="pos0" class="filled-in chk-col-pink" value="ผู้จัดการ">
                        <label for="pos0">Manager</label>
                        <input type="radio" name="position" id="pos1" class="filled-in chk-col-pink" value="พนักงาน">
                        <label for="pos1">Employee</label>
                    </div> -->


                

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">EDIT</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="pages/examples/sign-up.php">You already have a membership?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/examples/sign-up.js"></script>
</body>

</html>
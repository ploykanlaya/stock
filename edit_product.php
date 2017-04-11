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
       
        $query = "SELECT * FROM Product join product_type on";

        $result = mysqli_query($conn,$query);
       
       
        $Product_ID=$_POST['Product_ID'];
        $Product_Name=$_POST["Product_Name"];
        $Price=$_POST["Price"];
        $Unit=$_POST["Unit"];
        $Numstock=$_POST["Numstock"];
        $SafetyStock=$_POST["SafetyStock"];
        $ExpDate=$_POST["ExpDate"];
        // $Wholesalers_ID=$_POST["Wholesalers_ID"];
        // $ProductType_ID=$_POST["ProductType_ID"];
        
        
    ?>       


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>ข้อมูลสินค้า</h2>
            </div>

            <!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                แก้ไขข้อมูลสินค้า
                            </h2>
                           
                        </div>
                        <div class="body">
                            <form class="form-horizontal" method="POST" action="EditProductControl.php"> 
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="Product_Name">ชื่อสินค้า</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                             <input type="text" class="form-control" name="Product_Name" placeholder="ชื่อ-สกุล" value='<?php echo $Product_Name ?>' onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='<?php echo $Product_Name ?>';}" required autofocus/>
                         <input type="hidden" name="Product_ID" value='<?php echo $Product_ID ?>'/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="Price">ราคา</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                             
                                                 <input type="text" class="form-control" name="Price" placeholder="Price" value='<?php echo $Price ?>' onKeyPress="CheckNum()"  OnChange="JavaScript:chkNum(this)" required>
                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="Username">หน่วยนับสินค้า</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                               <input type="text" class="form-control" name="Unit" placeholder="Unit" value='<?php echo $Unit ?>' required>
                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 
                                     <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="SafetyStock">จุดสั่งซื้อใหม่</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                               <input type="number" class="form-control" name="SafetyStock" placeholder="SafetyStock" min="1" text="1" value='<?php echo $SafetyStock ?>' required>
                            
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

    <script language="javascript">
function CheckNum(){
    if (event.keyCode < 49 || event.keyCode > 57){
          event.returnValue = false;
        }
  }
</script>
    <script language="JavaScript">

      function addCommas(nStr)
      {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
          x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
      }

      function chkNum(ele)
      {
        var num = parseFloat(ele.value);
        ele.value = addCommas(num.toFixed(2));
      }
    </script>
</body>

</html>
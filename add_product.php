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
                                เพิ่มสินค้าใหม่
                            </h2>
                         
                        </div>
                        <div class="body">
                         <form id="addproduct" method="POST" action="AddProductControlCopy.php">

                         <html>
           
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    
                                         <label class="form-label">ชื่อสินค้า</label>
                                                                                
                                           <input type="text" class="form-control" name="Product_Name" placeholder="Product_Name" required autofocus>
                                       
                                    
                                </div>
                            </div>


                            <div class="row clearfix">
                                <div class="col-md-6">
                                    
                                         <label class="form-label">ราคาขายสินค้า</label>
                                        
                                             <input type="number" class="form-control numb-request" name="Price" placeholder="Price" min="1" text="1"  OnChange="JavaScript:chkNum(this)" required >
                                      
                                </div>

                                <div class="col-md-6">
                                   
                                      <label class="form-label">หน่วยนับสินค้า</label>
                                        
                                             <input type="text" class="form-control" name="Unit" placeholder="Unit" required>
                                       

                                </div>


                            </div>

                            <div class="row clearfix">
                                <div class="col-md-6">
                                    
                                     <label class="form-label">จำนวนยกยอดมา</label>
                                        
                                             <input type="number" class="form-control numb-request" id="Numstock" name="Numstock" placeholder="Numstock" min="1" text="1"  required >
                                        
                                </div>
                                <div class="col-md-6">
                                    
                                     <label class="form-label">จุดสั่งซื้อสินค้าใหม่</label>
                                        
                                              <input type="number" class="form-control numb-request" id="SafetyStock" name="SafetyStock" placeholder="SafetyStock" min="1" text="1" required >
                                        
                                </div>


                                <div class="col-md-12">
                                  
                                   

                                     <label class="form-label">วันที่นำเข้า</label>
                                       
                                           <input type="text" class="datepicker form-control" name="ExpDate" placeholder="Please choose a date..." required >
                                            
                                    
                                </div>
                            </div>

                                   

                             

                            <div class="row clearfix">
                            <div class="col-md-6">
                                    <div class="form-group">
                                     <label class="form-label">ร้านค้าส่ง</label>
                                        <a href="add_Wholesalers.php"><small>+เพิ่มร้านค้าส่ง</small></a>


                                        <select name="Wholesalers_ID" class="form-control" >
                                                   <option>เลือกร้านค้าส่ง</option>
                                                
                                                  <?php
                                                    
                                                    $sqli = "SELECT Wholesalers_ID,Wholesalers_Name FROM Wholesalers ";
                                                    $result = $conn->query($sqli);


                                                    while($row1 = mysqli_fetch_array($result)){
                                                      
                                                            ?>
                                                                
                                                                <option value="<?php echo $row1['Wholesalers_ID']; ?>" >

                                                                <?php echo $row1['Wholesalers_Name']; ?> </option>

                                                                  <?php } 

                                                   
                                                ?>
                                                
                                              </select>

                                    
                                    </div>
                                </div>

                            <div class="col-md-6">
                                    <div class="form-group">
                                     <label class="form-label">ประเภทสินค้า</label> <a href="addproducttype.php"><small>+เพิ่มประเภทสินค้า</small></a>
                                       


                                        <select name="ProductType_ID" class="form-control" >
                                                   <option>เลือกประเภทสินค้า</option>
                                                 
                                                  <?php
                                                    
                                                    $sql1 = "SELECT ProductType_ID,ProductType_Name FROM product_type ";
                                                    $result1 = $conn->query($sql1);


                                                    while($row2 = mysqli_fetch_array($result1)){
                                                      
                                                            ?>
                                                                
                                                                <option value="<?php echo $row2['ProductType_ID']; ?>" >

                                                                <?php echo $row2['ProductType_Name']; ?> </option>

                                                                  <?php } 

                                                   
                                                ?>
                                                
                                              </select>
<!-- 
                                    <?php echo $sql1; ?>  -->
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
    
<script> function openAddCategory() {
        $("#categoryModal").modal({
            backdrop: "static"
        });
            $("#addcategoryname").val("");
            $("#addcategoryname").focus();
        }
        function openProductImage(url,title) {
            $("#productimageModal").modal({
                backdrop: "true"
            });
            var mymodal = $('#productimageModal');
            mymodal.find('.modal-header').html("<button type=\"button\" class=\"close white-modal-close-button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button><h3 class=\"modal-title\" id=\"myModalLabel\" style=\"font-weight: bold;\">" + title + "</h3>");
             
           $("#productimage").attr("src", url);
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
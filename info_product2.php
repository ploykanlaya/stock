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
                <h2>
                    รายละเอียดผู้ใช้
                    
                </h2>
            </div>
            <!-- Basic Examples -->

     <?php
        
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
        $query = "SELECT * FROM Product";
        $result = mysqli_query($conn,$query)
         
        
    ?>       
  
            <!-- Exportable Table -->
           <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                รายการทั้งหมด
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
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>รหัส</th>
                                        <th>ชื่อ</th>
                                        <th>ราคา</th>
                                       
                                        <th>หน่วย</th>

                                        <th>คงเหลือ</th>
                                        <th>จุดสั่งซื้อใหม่</th>
                                       
                                        <th>วันหมดอายุ</th>
                                        <th>ร้านค้าส่ง</th>
                                        <th>ประเภท</th>
                                        <th></th>
                                   
                                    </tr>
                                </thead>
                               
                        <?php
                            while($rows=mysqli_fetch_array($result)){ 
                        ?> 

                        <tbody>
                                    <tr>
                                        <td><?php echo $rows['Product_ID']; ?></td>
                                        <td><?php echo $rows['Product_Name']; ?></td>  
                                        <td><?php echo $rows['Price']; ?></td> 
                                    
                                        <td><?php echo $rows['Unit']; ?></td>
                                        

                                        <td><?php echo $rows['Numstock']; ?></td>
                                        <td><?php echo $rows['SafetyStock']; ?></td>
                                        <td><?php echo $rows['ExpDate']; ?></td>

                                        <td><?php echo $rows['Wholesalers_ID']; ?></td>
                                        <td><?php echo $rows['ProductType_ID']; ?></td>
                                        <td>
                                             
                                    <form  name="sentMessage1" id="contactForm" novalidate role="form" method="POST" action="DeleteProductControl.php">    
                                         <input type="hidden" name="Product_ID" value="<?php echo $rows['Product_ID']; ?>">

                                         <button class="btn btn-primary waves-effect"   data-type="confirm">Delete</button>
                                    </form> </td>
                                    
                                    <td> 
                                    
                                    <form name="sentMessage1" id="contactForm" novalidate role="form" method="POST" action="edit_product.php">

                                    <input type="hidden" name="Product_ID" value="<?php echo $rows['Product_ID']; ?>">
                                    <input type="hidden" name="Product_Name" value="<?php echo $rows['Product_Name']; ?>">
                                    <input type="hidden" name="Price" value="<?php echo $rows['Price']; ?>">
                                    <input type="hidden" name="Unit" value="<?php echo $rows['Unit']; ?>">
                                    <input type="hidden" name="Numstock" value="<?php echo $rows['Numstock']; ?>">
                                    <input type="hidden" name="SafetyStock" value="<?php echo $rows['SafetyStock']; ?>">
                                    <input type="hidden" name="ExpDate" value="<?php echo $rows['ExpDate']; ?>">
                                    <input type="hidden" name="Wholesalers_ID" value="<?php echo $rows['Wholesalers_ID']; ?>">
                                    <input type="hidden" name="ProductType_ID" value="<?php echo $rows['ProductType_ID']; ?>">
                                    


                                     <button class="btn btn-primary waves-effect"   data-type="confirm">Edit</button>
                                               
                                   </form> </td>

                                    

                                       
                                    </tr>        
                        </tbody>
                        <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->






              



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

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
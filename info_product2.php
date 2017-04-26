<!DOCTYPE html>
<html>

<!-- Top Bar -->
    <?php  include 'head.php'; ?>  
<!-- #Top Bar --> 
<body class="theme-blue">
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
                    รายละเอียดสินค้า
                    
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
                            
                        </div>
                        <div class="body">
                            <table class="table table-bordered" id="requisition-table">

                                <thead>
                                    <tr>
                                        <th>รหัส</th>
                                        <th>ชื่อสินค้า</th>
                                        <th>ราคา</th>
                                       
                                        <th>หน่วยนับ</th>

                                        <th>คงเหลือ</th>
                                        <th>จุดสั่งซื้อใหม่</th>
                                       
                                        <!-- <th>วันหมดอายุ</th> -->
                                        <th>ร้านค้าส่ง</th>
                                        <th>ประเภท</th>
                                        <th></th>
                                        <th></th>
                                   
                                    </tr>
                                </thead>
                               

                        <tbody>

                         <?php
                            while($rows=mysqli_fetch_array($result)){ 
                        ?> 
                                    <tr>
                                        <td align=right><?php echo $rows['Product_ID']; ?></td>
                                        <td ><?php echo $rows['Product_Name']; ?></td>  
                                        <td align=right ><?php echo number_format($rows['Price'], 2, '.', ','); ?></td> 

                                    
                                        <td ><?php echo $rows['Unit']; ?></td>

                                        

                                        

                                        <td align=right><?php echo $rows['Numstock']; ?></td>
                                        <td align=right><?php echo $rows['SafetyStock']; ?></td>
                                        <!-- <td align=right><?php echo $rows['ExpDate']; ?></td>
 -->
                                    <?php 
                                    $query1 = "SELECT Wholesalers_Name FROM wholesalers where Wholesalers_ID='".$rows['Wholesalers_ID']."'";
                                    $query2 = "SELECT ProductType_Name FROM product_type where ProductType_ID= '".$rows['ProductType_ID']."'"; 
                                    $result1 = mysqli_query($conn,$query1);
                                    $result2 = mysqli_query($conn,$query2);

                                    while($rows1=mysqli_fetch_array($result1)){ ?>
                                        <td ><?php echo $rows1['Wholesalers_Name']; ?></td>
                                        <?php
                                    }
                                    while($rows2=mysqli_fetch_array($result2)){ ?>
                                        <td ><?php echo $rows2['ProductType_Name']; ?></td>
                                        <?php
                                    }
?>
               
                                        <td>
                                             
                                    <form  name="sentMessage1" id="contactForm" novalidate role="form" method="POST" action="DeleteProductControl.php">    
                                         <input type="hidden" name="Product_ID" value="<?php echo $rows['Product_ID']; ?>">

                                         <button class="btn btn-danger waves-effect "   data-type="confirm">ลบ</button>
                                    </form> </td>
                                    
                                    <td> 
                                    
                                    <form name="sentMessage1" id="contactForm" novalidate role="form" method="POST" action="edit_product.php" >

                                    <input type="hidden" name="Product_ID" value="<?php echo $rows['Product_ID']; ?>">
                                    <input type="hidden" name="Product_Name" value="<?php echo $rows['Product_Name']; ?>">
                                    <input type="hidden" name="Price" value="<?php echo $rows['Price']; ?>" >
                                    <input type="hidden" name="Unit" value="<?php echo $rows['Unit']; ?>">
                                    <input type="hidden" name="Numstock" value="<?php echo $rows['Numstock']; ?>">
                                    <input type="hidden" name="SafetyStock" value="<?php echo $rows['SafetyStock']; ?>">
                                    <input type="hidden" name="ExpDate" value="<?php echo $rows['ExpDate']; ?>">
                                    <input type="hidden" name="Wholesalers_Name" value="<?php echo $rows['Wholesalers_Name']; ?>">
                                    <input type="hidden" name="ProductType_Name" value="<?php echo $rows['ProductType_Name']; ?>">
                                    


                                     <button class="btn btn-primary waves-effect"   data-type="confirm">แก้ไข</button>
                                               
                                   </form> </td>
                                
                                    

                                       
                                    </tr>       
                                    <?php } ?> 
                        </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->

            </div>
            </section>






              


<!-- Script Sidebar -->
    <?php include 'script.php'; ?>  
<!-- #END# Script Sidebar -->
    <script type="text/javascript">
        $( document ).ready(function() {
            $('#requisition-table').DataTable();
        });
    </script>

    
 
</body>

</html>
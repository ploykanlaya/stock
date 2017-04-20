 <?php
/*====================================================
 * ดึงข้อมูลที่ค้นหาเจอออกมาทั้งหมด
 ===================================================== */
$result = $database->query("SELECT * FROM `requisition` WHERE status=1")->findAll();
$allowed = count($result);

$result = $database->query("SELECT * FROM `returnoder` WHERE status=1")->findAll();
$return = count($result);


?> 
<section class="content">
    <div class="container-fluid">
    <div class="block-header">
        <h2>ภาพรวม</h2>
    </div>

    <!-- Widgets -->
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">playlist_add_check</i>
                </div>
                <div class="content">
                    <div class="text">รายการเบิก</div>

                    <?php 
                        echo "<div class=\"number count-to\" data-from=\"0\" data-to=\"".$allowed."\" data-speed=\"15\" data-fresh-interval=\"20\"></div>";
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">person_add</i>
                </div>
                <div class="content">
                    <div class="text">รายการคืน</div>

                    <?php 
                        echo "<div class=\"number count-to\" data-from=\"0\" data-to=\"".$return."\" data-speed=\"15\" data-fresh-interval=\"20\"></div>";
                    ?>
                </div>
            </div>
        </div>
 
        </div>



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
                                รายการสินค้าทั้งหมด
                            </h2>
                            
                        </div>
                        <div class="body">
                            <table class="table table-bordered" id="requisition-table">

                                <thead>
                                    <tr>
                                        <th>รหัส</th>
                                        <th>ชื่อ</th>
                                        <th>ราคา</th>
                                       
                                        <th>หน่วยนับสินค้า</th>
 
                                        <th>ร้านค้าส่ง</th>
                                        <th>ประเภท</th>
                                        
                                   
                                    </tr>
                                </thead>
                               

                        <tbody>

                         <?php
                            while($rows=mysqli_fetch_array($result)){ 
                        ?> 
                                    <tr>
                                        <td align=right><?php echo $rows['Product_ID']; ?></td>
                                        <td><?php echo $rows['Product_Name']; ?></td>  
                                        <td align=right ><?php echo number_format($rows['Price'], 2, '.', ','); ?></td>  
                                    
                                        <td><?php echo $rows['Unit']; ?></td>
                                       

                                    <?php 
                                    $query1 = "SELECT Wholesalers_Name FROM wholesalers where Wholesalers_ID='".$rows['Wholesalers_ID']."'";
                                    $query2 = "SELECT ProductType_Name FROM product_type where ProductType_ID= '".$rows['ProductType_ID']."'"; 
                                    $result1 = mysqli_query($conn,$query1);
                                    $result2 = mysqli_query($conn,$query2);

                                    while($rows1=mysqli_fetch_array($result1)){ ?>
                                        <td><?php echo $rows1['Wholesalers_Name']; ?></td>
                                        <?php
                                    }
                                    while($rows2=mysqli_fetch_array($result2)){ ?>
                                        <td><?php echo $rows2['ProductType_Name']; ?></td>
                                        <?php
                                    }
?>
               
                                  
                                    </tr>       
                                    <?php } ?> 
                        </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    </section>

    <?php include 'script.php'; ?>  
       <script type="text/javascript">
        $( document ).ready(function() {
            $('#requisition-table').DataTable();
        });
    </script>

    
    

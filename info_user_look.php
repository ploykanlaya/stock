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
        $query = "SELECT * FROM user";
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
                            <table class="table table-hover dashboard-task-infos" id="table">
                                <thead>
                                    <tr>
                                        <th>รหัสผู้ใช้งาน</th>
                                        <th>ชื่อ-สกุล</th>
                                        <th>เบอร์โทรศัพท์</th>
                                        <th>ที่อยู่</th>
                                        <th>ชื่อผู้ใช้งาน</th>
                                        <th>ตำแหน่ง</th>
                                        
                                    </tr>
                                </thead>
                               
                        <?php
                            while($rows=mysqli_fetch_array($result)){ 
                        ?> 

                        <tbody>
                                    <tr>
                                        <td><?php echo $rows['UserID']; ?></td>
                                        <td><?php echo $rows['Name']; ?></td>  
                                        <td><?php echo $rows['Telephone']; ?></td> 
                                        <td><?php echo $rows['Address']; ?></td>
                                        <td><?php echo $rows['Username']; ?></td>
                                        <td><?php echo $rows['Position']; ?></td>


                                    

                                       
                                    </tr>        
                        </tbody>
                        <?php } ?>
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
            $('#table').DataTable();
        });
    </script>
</body>

</html>
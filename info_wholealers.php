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
        $query = "SELECT * FROM wholesalers";
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
                            <table class="table table-bordered" id="user-table">
                                <thead>
                                    <tr>
                                        <th>รหัส</th>
                                        <th>ชื่อร้านค้า</th>
                                        <th>เบอร์โทรศัพท์</th>
                                       
                                        <th>E-mail</th>

                                        <th>ที่อยู่</th>
                                        <th></th>
                                        <th></th>
                                   
                                    </tr>
                                </thead>
                        <tbody>       
                        <?php
                            while($rows=mysqli_fetch_array($result)){ 
                        ?> 

                        
                                    <tr>

                                        <td align=right><?php echo $rows['Wholesalers_ID']; ?></td>
                                        <td align=right><?php echo $rows['Wholesalers_Name']; ?></td>  
                                        <td align=right><?php echo $rows['Telephone']; ?></td> 
                                    
                                        <td align=right><?php echo $rows['Email']; ?></td>
                                        

                                        <td align=right><?php echo $rows['Address']; ?></td>
                                             
                                    <td>
                                    <form  name="sentMessage" id="contactForm" novalidate role="form" method="POST" action="DeletewhoControl.php">    
                                         <input type="hidden" name="Wholesalers_ID" value="<?php echo $rows['Wholesalers_ID']; ?>">

                                         <button class="btn btn-danger waves-effect "   data-type="confirm">ลบ</button>
                                    </form> </td>
                                    
                                    <td> 
                                    
                                    <form name="sentMessage1" id="contactForm" novalidate role="form" method="POST" action="edit_who.php">

                                    <input type="hidden" name="Wholesalers_ID" value="<?php echo $rows['Wholesalers_ID']; ?>">
                                    <input type="hidden" name="Wholesalers_Name" value="<?php echo $rows['Wholesalers_Name']; ?>">
                                    <input type="hidden" name="Telephone" value="<?php echo $rows['Telephone']; ?>">
                                    <input type="hidden" name="Email" value="<?php echo $rows['Email']; ?>">
                                    <input type="hidden" name="Address" value="<?php echo $rows['Address']; ?>">
                                    


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






              



    
<!-- Script Sidebar -->
    <?php include 'script.php'; ?>  
<!-- #END# Script Sidebar -->

    <script type="text/javascript">
        $( document ).ready(function() {
            $('#user-table').DataTable();
        });
    </script>
</body>
<!DOCTYPE html>
<html>
<?php

include_once 'class/db.class.php';

$database = new DB();

?>
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

        if ($_SESSION['Position'] == "ผู้จัดการ") {
            include 'index_manager.php'; 
        }
        else if ($_SESSION['Position'] == "พนักงาน"){
            include 'index_employee.php'; 
        }
        else
        {
            include 'chart.php'; 
        }

    ?>  
  


</body>
</html>
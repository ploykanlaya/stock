<!DOCTYPE html>
<html>
<?php

include_once 'class/db.class.php';

$database = new DB();

?>
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
        
    <?php 

        if ($_SESSION['Position'] == "ผู้จัดการ") {
            include 'index_manager.php'; 
        }
        else if ($_SESSION['Position'] == "พนักงาน"){
            include 'index_employee.php'; 
        }
        else
        {
            //////// ADMIN /////////
        }

    ?>  

    <!-- Script Sidebar -->
    <?php include 'script.php'; ?>  
    <!-- #END# Script Sidebar -->

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/charts/chartjs.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>


</body>
</html>
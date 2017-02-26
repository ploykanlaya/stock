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
            //////// ADMIN /////////
        }

    ?>  


    !-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

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
<?php

/*====================================================
 * ดึงข้อมูลที่ค้นหาเจอออกมาทั้งหมด
 ===================================================== */
$result = $database->query("SELECT * FROM `requisition` WHERE status=0")->findAll();
$allowed = count($result);

$result = $database->query("SELECT * FROM `purchaseorder` WHERE status=0")->findAll();
$orders = count($result);

$result = $database->query("SELECT * FROM `returnoder` WHERE status=0")->findAll();
$return = count($result);

$result = $database->query("SELECT * FROM `product`")->findAll();
// var_dump($result);die();
// var_dump($result[0]);
$num=0;
foreach ($result as $value) {
    if((int)$value->{"Numstock"}<= (int)$value->{"SafetyStock"}) {
        $num++;
        }
    }

?>


<section class="content">
    <div class="container-fluid"> 

    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                รายการแจ้งเตือน
                            </h2>
                        </div>

            
            <div class="body">
    <div class="row clearfix">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
       <div class="info-box bg-pink hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">system_update_alt
</i>
                </div>
                <div class="content">
                    <div class="text">รายการรอรับสินค้า</div>

                    <?php 
                        echo "<div class=\"number count-to\" data-from=\"0\" data-to=\"".$orders."\" data-speed=\"15\" data-fresh-interval=\"20\"></div>";
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">store</i>
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
            <div class="info-box bg-light-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">restore_page</i>
                </div>
                <div class="content">
                    <div class="text">รายการคืน</div>
                     <?php 
                        echo "<div class=\"number count-to\" data-from=\"0\" data-to=\"".$return."\" data-speed=\"15\" data-fresh-interval=\"20\"></div>";
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-orange hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">report</i>
                </div>
                <div class="content">
                    <div class="text">สินค้าใกล้หมด</div>
                     <?php 
                        echo "<div class=\"number count-to\" data-from=\"0\" data-to=\"".$num."\" data-speed=\"15\" data-fresh-interval=\"20\"></div>";
                    ?>
                </div>
            </div>
        </div>
   
    </div>
    <!-- #END# Widgets -->

 

    <!-- Line Chart -->
   <!--  <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="card">
                    <div class="header">
                        <h2>ยอดขายรวม</h2>
                        
                    </div>
                    <div class="body">
                        <canvas id="line_chart" height="180"></canvas>
                    </div>
                </div>
            </div>
       -->
        
            <!-- #END# Line Chart -->

            <!-- Pie Chart -->
         <!--    
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="card">
                    <div class="header">
                        <h2>มูลค่าสินค้าคงเหลือแต่ละประเภท</h2>
                       
                        
                    </div>
                    <div class="body">
                        <canvas id="pie_chart" height="0"></canvas>
                    </div>
                </div>
            </div>
            </div>
           -->

            <!-- #END# Pie Chart -->
            </div>
            </div>
        </div>
    
    </div>




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
    <!-- <script src="js/pages/charts/chartjs.js"></script> -->
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script> 

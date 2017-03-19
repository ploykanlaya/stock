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
if($result["Numstock"] <= ["SafetyStock"])
{
$num = count($result);
}







?>
<section class="content">
    <div class="container-fluid">
    <div class="block-header">
        <h2>รายการรออนุมัติ</h2>
    </div>

    <!-- Widgets -->
    <div class="row clearfix">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
       <div class="info-box bg-pink hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">forum</i>
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
            <div class="info-box bg-light-green hover-expand-effect">
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
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-orange hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">help</i>
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



    
        <div class="block-header">
            <h2>ตัวอย่างกราฟ</h2>
        </div>
<!-- Basic Examples -->

<div class="row clearfix">
    

    <div class="col-lg-6">
        <div class="card">
            <div class="header">
                <h2>
                    กราฟเส้น
                </h2>
                
            </div>
            <div class="body">

                <!-- ตำแหน่งของกราฟ -->
                <canvas id="line-chart"></canvas>
                <!-- ตำแหน่งของกราฟ -->

            </div>
        </div>
    </div>

     <div class="col-lg-6">
        <div class="card">
            <div class="header">
                <h2>
                    กราฟวงกลม
                </h2>
                
            </div>
            <div class="body">

                <!-- ตำแหน่งของกราฟ -->
                <canvas id="myChart3"></canvas>
                <!-- ตำแหน่งของกราฟ -->

            </div>
        </div>
    </div>
</div>
<?php 

$result = $database->query("SELECT DATE_FORMAT(requisition.Requisition_Date,'%m-%Y') AS Requisition_Date
, SUM(requisition_detail.TotalPay) AS TotalPay
FROM requisition JOIN requisition_detail on requisition.Requisition_ID=requisition_detail.Requisition_ID 
GROUP BY DATE_FORMAT(requisition.Requisition_Date,'%m-%Y')")->findAll();

print_r($result)exit();
?>


</div>
<?php include 'script.php'; ?>  
<script type="text/javascript">
    // var ctx = document.getElementById("myChart");
    // var myChart = new Chart(ctx, {
    //     type: 'bar',
    //     data: {
    //         labels: ["มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"],
    //         datasets: [{
    //             label: 'ยอดการเบิกในแต่ละเดือน', 
    //             data: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12], 
    //             backgroundColor: [ 
    //                 'rgba(255, 99, 132, 0.2)',
    //                 'rgba(54, 162, 235, 0.2)',
    //                 'rgba(255, 206, 86, 0.2)',
    //                 'rgba(75, 192, 192, 0.2)',
    //                 'rgba(153, 102, 255, 0.2)',
    //                 'rgba(255, 159, 64, 0.2)',
    //                 'rgba(255, 99, 132, 0.2)',
    //                 'rgba(54, 162, 235, 0.2)',
    //                 'rgba(255, 206, 86, 0.2)',
    //                 'rgba(75, 192, 192, 0.2)',
    //                 'rgba(153, 102, 255, 0.2)',
    //                 'rgba(255, 159, 64, 0.2)'
    //             ],
    //             borderColor: [ 
    //                 'rgba(255,99,132,1)',
    //                 'rgba(54, 162, 235, 1)',
    //                 'rgba(255, 206, 86, 1)',
    //                 'rgba(75, 192, 192, 1)',
    //                 'rgba(153, 102, 255, 1)',
    //                 'rgba(255, 159, 64, 1)',
    //                 'rgba(255,99,132,1)',
    //                 'rgba(54, 162, 235, 1)',
    //                 'rgba(255, 206, 86, 1)',
    //                 'rgba(75, 192, 192, 1)',
    //                 'rgba(153, 102, 255, 1)',
    //                 'rgba(255, 159, 64, 1)'
    //             ],
    //             borderWidth: 1
    //         }]
    //     }
    // });
</script>

<script type="text/javascript">
    var ctx2 = document.getElementById("line-chart");

    var test = [500, 200, 900, 450, 750, 600, 470, 800, 790, 1000, 970, 1200];
    var month = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];

    var scatterChart = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: ["มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"],
        datasets: [
        {
            label: 'การเบิกในแต่ละเดือน', 
            data: test,
            borderColor: 'rgba(99,255,132,1)',
            backgroundColor: 'rgba(99,255,132,0.2)'
        },
        {
            label: 'การซื้อในแต่ละเดือน', 
            data: [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000, 1100, 1200], 
            borderColor: 'rgba(255,99,132,1)',
            backgroundColor: 'rgba(255,99,132,0.2)'
        },
        {
            label: 'การคืนในแต่ละเดือน', 
            data: [150, 250, 350, 450, 550, 650, 750, 850, 950, 1500, 1100, 1200], 
            borderColor: 'rgba(132,99,255,1)',
            backgroundColor: 'rgba(132,99,255,0.2)'
        }
        ]
    }
});
</script>

<script type="text/javascript">
    var ctx3 = document.getElementById("myChart3");
    var myDoughnutChart = new Chart(ctx3, {
        type: 'doughnut',
        data: {  
            labels: [
                "เบิก",
                "ซื้อ",
                "คืน"
            ],
            datasets: [
            {
                data: [200, 50, 100],
                backgroundColor: [
                    "#FF6384",
                    "#36A2EB",
                    "#FFCE56"
                ],
                hoverBackgroundColor: [
                    "#FF6384",
                    "#36A2EB",
                    "#FFCE56"
                ]
            }]
        }
    });
</script>

    
    
      
        
    
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
    <script src="js/pages/charts/chartjs.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script> 

 <?php


?> 
<section class="content">
    <div class="container-fluid">
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
                <canvas id="myChart2"></canvas>
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

</div>
<?php include 'script.php'; ?>  
<script type="text/javascript">
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"],
            datasets: [{
                label: 'ยอดการเบิกในแต่ละเดือน', 
                data: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12], 
                backgroundColor: [ 
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [ 
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        }
    });
</script>

<script type="text/javascript">
    var ctx2 = document.getElementById("myChart2");
    var scatterChart = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: ["มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"],
        datasets: [{
            label: 'รายรับในแต่ละเดือน(บาท)', 
                data: [500, 200, 900, 450, 750, 600, 470, 800, 790, 1000, 970, 1200], 
        }]
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
</section>
    
    

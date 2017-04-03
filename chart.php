 <?php
include_once 'class/db.class.php';

$database = new DB();


?> 
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>ตัวอย่างกราฟ</h2>
            <?php 

$time=date('Y-m-d');
$sql="SELECT DATE_FORMAT(requisition.Requisition_Date,'%m') AS Requisition_Date
, SUM(requisition_detail.TotalPay) AS TotalPay
FROM requisition JOIN requisition_detail on requisition.Requisition_ID=requisition_detail.Requisition_ID where requisition.Requisition_Date = YEAR($time)
";

echo ($sql);exit();

             ?>
        </div>
<!-- Basic Examples -->

<div class="row clearfix">
    

    <div class="col-lg-12">
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

     <div class="col-lg-12">
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

$time=date('Y-m-d');

$result = $database->query("SELECT DATE_FORMAT(requisition.Requisition_Date,'%m') AS Requisition_Date
, SUM(requisition_detail.TotalPay) AS TotalPay
FROM requisition JOIN requisition_detail on requisition.Requisition_ID=requisition_detail.Requisition_ID where year_column = YEAR($time)
GROUP BY DATE_FORMAT(requisition.Requisition_Date,'%m-%Y')")->findAll();

 print_r($result);exit();

$count=count($result);
$x=0;
$string="";
$month="";
foreach ($result as $row ) {
    $x++;
    if ($x==$count) {

        $string = $string.($row->TotalPay);
        $month = $month.'"'.($row->Requisition_Date).'"';
    }
    else{
          $string = $string.($row->TotalPay).",";
            $month = $month.'"'.($row->Requisition_Date).'"'.",";
    }
}



    $result2 = $database->query("SELECT DATE_FORMAT(purchaseorder.PO_OutDate,'%m') AS PO_OutDate
, SUM(po_detail.TotalPay) AS TotalPay2
FROM purchaseorder JOIN po_detail on purchaseorder.PO_ID=po_detail.PO_ID 
GROUP BY DATE_FORMAT(purchaseorder.PO_OutDate,'%m-%Y')")->findAll();


$count2=count($result2);
$y=0;
$string2="";
$month2="";
foreach ($result2 as $row ) {
    $y++;
    if ($y==$count2) {

        $string2 = $string2.($row->TotalPay2);
        $month2 = $month2.'"'.($row->PO_OutDate).'"';
    }
    else{
          $string2 = $string2.($row->TotalPay2).",";

            $month2 = $month2.'"'.($row->PO_OutDate).'"'.",";
    }
       }

$result3 = $database->query("SELECT DATE_FORMAT(returnoder.ReturnDate,'%m') AS ReturnDate
, SUM(returnorder_detail.TotalPay) AS TotalPay3
FROM returnoder JOIN returnorder_detail on returnoder.ReturnOder_ID=returnorder_detail.ReturnOder_ID 
GROUP BY DATE_FORMAT(returnoder.ReturnDate,'%m-%Y')")->findAll();


$count3=count($result3);
$z=0;
$string3="";
$month3="";
foreach ($result3 as $row ) {
    $z++;
    if ($z==$count3) {

        $string3 = $string3.($row->TotalPay3);
        $month3 = $month3.'"'.($row->PO_OutDate).'"';
    }
    else{
          $string3 = $string3.($row->TotalPay3).",";

            $month3 = $month3.'"'.($row->PO_OutDate).'"'.",";
    }
       }
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

    var test = [<?php echo $string; ?>];
    var month = [<?php echo $month ?>];

    var test2 = [<?php echo $string2; ?>];
    var month2 = [<?php echo $month2 ?>];

    var test3 = [<?php echo $string3; ?>];
    var month3 = [<?php echo $month3 ?>];

    var scatterChart = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: month,
        datasets: [
        {
            label: 'การเบิกในแต่ละเดือน', 
            data: test,
            borderColor: 'rgba(99,255,132,1)',
            backgroundColor: 'rgba(99,255,132,0.2)'
        },
        

        {
            label: 'การซื้อในแต่ละเดือน', 
            data: test2,
            borderColor: 'rgba(255,99,132,1)',
            backgroundColor: 'rgba(255,99,132,0.2)'
        },
        {
            label: 'การคืนในแต่ละเดือน', 
            data: test3,
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
</section>
    
    

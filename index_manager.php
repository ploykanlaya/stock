<?php

/*====================================================
 * ดึงข้อมูลที่ค้นหาเจอออกมาทั้งหมด
 ===================================================== */
$result = $database->query("SELECT * FROM `requisition` WHERE status=1")->findAll();
$allowed = count($result);

$result = $database->query("SELECT * FROM `purchaseorder` WHERE status=1")->findAll();
$orders = count($result);
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
                    <i class="material-icons">forum</i>
                </div>
                <div class="content">
                    <div class="text">รายการสั่งซื้อ</div>

                    <?php 
                        echo "<div class=\"number count-to\" data-from=\"0\" data-to=\"".$orders."\" data-speed=\"15\" data-fresh-interval=\"20\"></div>";
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
                        echo "<div class=\"number count-to\" data-from=\"0\" data-to=\"".$orders."\" data-speed=\"15\" data-fresh-interval=\"20\"></div>";
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
                    <div class="text">สินค้าใหม่</div>
                     <?php 
                        echo "<div class=\"number count-to\" data-from=\"0\" data-to=\"".$orders."\" data-speed=\"15\" data-fresh-interval=\"20\"></div>";
                    ?>
                </div>
            </div>
        </div>
             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-blue-grey">
                <div class="icon">
                    <i class="material-icons">person_add</i>
                </div>
                <div class="content">
                    <div class="text">พนักงานใหม่</div>
                    <?php 
                        echo "<div class=\"number count-to\" data-from=\"0\" data-to=\"".$orders."\" data-speed=\"15\" data-fresh-interval=\"20\"></div>";
                    ?>
                </div>
            </div>
        </div>
             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-deep-purple">
                <div class="icon">
                    <i class="material-icons">help</i>
                </div>
                <div class="content">
                    <div class="text">หมวดหมู่ขายดี</div>
                    <?php 
                        echo "<div class=\"number count-to\" data-from=\"0\" data-to=\"".$orders."\" data-speed=\"15\" data-fresh-interval=\"20\"></div>";
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Widgets -->


    <!-- Line Chart -->
    <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2></h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <canvas id="line_chart" height="180"></canvas>
                    </div>
                </div>
            </div>
        
            <!-- #END# Line Chart -->

            <!-- Pie Chart -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>มูลค่าสินค้าคงเหลือแต่ละรายการ</h2>
                       
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <canvas id="pie_chart" height="155"></canvas>
                    </div>
                </div>
            </div>
           </div>  

            <!-- #END# Pie Chart -->
      
        
        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>สินค้าเคลื่อนไหวย้อนหลัง 3 เดือน</h2>
                      
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover dashboard-task-infos">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ชื่อสินค้า</th>
                                        <th>เข้า</th>
                                        <th>เบิกออก</th>
                                        <th>เปลี่ยนแปลง</th>
                                        <th>คงเหลือ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Task A</td>
                                        <td>24</td>
                                        <td>53</td> 
                                        <td>10</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div>
                                            </div>
                                        </td>
                                       
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Task B</td>
                                        <td>43</td>
                                        <td>76</td> 
                                         <td>4</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                            </div>
                                        </td>
                                      
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Task C</td>
                                        <td>23</td>
                                        <td>10</td>
                                        <td>5</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-light-blue" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>43</td>
                                        <td>54</td>
                                        <td>22</td> 
                                        <td>5</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                                            </div>
                                        </td>
                                       
                                    </tr>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info -->
         
          </div>
    </div>
</section>
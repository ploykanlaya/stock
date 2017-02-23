<?php
session_start();
?>


<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->


            <div class="user-info">
                <div class="image"><?php echo "<img src='images/".$_SESSION['Image']."'width='50' hight='50'> "; ?>
                   <!--  <img src="images/user.png" width="48" height="48" alt="User" /> -->
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ชื่อ : <?php echo $_SESSION['Name']; ?></div>
                    <div class="name">ตำแหน่ง : <?php echo $_SESSION['Position']; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href=""><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            
                            <li role="seperator" class="divider"></li>
                            <li><a href="sign-in.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
          <!--   <!-- Menu -->
            <div class="menu">
                <ul class="list">
                <?php
                if($_SESSION['Position'] == "ผู้จัดการ"){
                    ?>
                    <li class="header">Manager Views</li>
                    <li class="header">MAIN NAVIGATION</li>           
                    

                    <li class="active">
                        <a href="index_manager.php">
                            <i class="material-icons">home</i>
                            <span>หน้าหลัก</span>
                        </a>
                    </li>

                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-line-chart" style="font-size:24px"></i><span>รายงาน</span>
                             </a>
                                <ul class="ml-menu">
                                 <li>
                                        <a href="stock.html">คลังสินค้า</a>
                                    </li>

                                    <li>
                                        <a href="report_requests.html">ยอดเบิก</a>
                                    </li>
                                    <li>
                                        <a href="report_po.html">ยอดสั่งซื้อ</a>
                                    </li>
                                    <li>
                                        <a href="report_return.html">ยอดคืนสินค้า</a>
                                    </li>
                                </ul>
                        </li>
                        
                        <li>
                          <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-cart-arrow-down" style="font-size:24px"></i><span>การสั่งซื้อ</span>
                             </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="po_add.php">สร้างรายการสั่งซื้อ</a>
                                    </li>
                                    <li>
                                        <a href="po_list.php">ดูรายการสั่งซื้อ-รับสินค้า</a>
                                    </li>
                                       <li>
                                        <a href="po_detail.php">รายละเอียดรายการซื้อ</a>
                                    </li>
                                    
                                    
                                </ul>
                        </li>
                   
                       <li>
                          <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-paste" style="font-size:24px"></i><span>การเบิกสินค้า</span>
                             </a>
                                <ul class="ml-menu">      
                                    <li>
                                        <a href="requisition_list.php">ดูรายการเบิก</a>
                                    </li>
                                    
                                </ul>
                        </li>

                            <li>
                          <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-repeat" style="font-size:24px"></i><span>การคืนสินค้า</span>
                             </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="return_add.php">สร้างรายการคืน</a>
                                    </li>
                                    <li>
                                        <a href="return_list.php">ดูรายการคืน</a>
                                    </li>
                                    
                                </ul>
                        </li>
                   
                        <li>
                          <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-cubes" style="font-size:24px"></i><span>สินค้า</span>
                             </a>
                                <ul class="ml-menu">
                                     <li>
                                        <a href="add_product.php">เพิ่มสินค้าใหม่</a>
                                    </li>
                                    <li>
                                        <a href="info_product2.php">รายการสินค้า</a>
                                    </li>
                                
                                    
                                </ul>
                        </li>
                   
                        <li>
                          <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-address-card-o" style="font-size:24px"></i><span>จัดการผู้ใช้งาน</span>
                             </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="sign-up.php">เพิ่มผู้ใช้งาน</a>
                                    </li>
                                    <li>
                                        <a href="info_user.php">ลบ/แก้ไขข้อมูล</a>
                                    </li>
                                    <li>
                                        <a href="info_user_look.php">ดูรายชื่อผู้ใช้งาน</a>
                                    </li>
                                  
                                    
                                </ul>
                        </li>

                      
                    <?php
                }
                    
                ?>       
                <?php
                else if($_SESSION['Position'] == "พนักงาน"){
                    ?>
                    <li class="header">Employee Views</li>
               <li class="header">MAIN NAVIGATION</li>           
                    

                    <li class="active">
                        <a href="index_manager.php">
                            <i class="material-icons">home</i>
                            <span>หน้าหลัก</span>
                        </a>
                    </li>

                   
                       <li>
                          <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-paste" style="font-size:24px"></i><span>การเบิกสินค้า</span>
                             </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="requisition_add.php">สร้างรายการเบิก</a>
                                    </li>
                                    <li>
                                        <a href="requisition_list_employee.php">ดูรายการเบิก</a>
                                    </li>
                                    
                                </ul>
                        </li>

                    <li>
                          <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-repeat" style="font-size:24px"></i><span>การคืนสินค้า</span>
                             </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="return_add.php">สร้างรายการคืน</a>
                                    </li>
                                    <li>
                                        <a href="return_list.php">ดูรายการคืน</a>
                                    </li>
                                    
                                </ul>
                        </li>
           
                                
                    <?php
                }

                ?>

                <?php
                    if($_SESSION['Position'] == "แอดมิน"){
                        ?>
                    <li class="header">Manager Views</li>
                    <li class="header">MAIN NAVIGATION</li>           
                    

                    <li class="active">
                        <a href="index_manager.php">
                            <i class="material-icons">home</i>
                            <span>หน้าหลัก</span>
                        </a>
                    </li>

                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-line-chart" style="font-size:24px"></i><span>รายงาน</span>
                             </a>
                                <ul class="ml-menu">
                                 <li>
                                        <a href="stock.html">คลังสินค้า</a>
                                    </li>

                                    <li>
                                        <a href="report_requests.html">ยอดเบิก</a>
                                    </li>
                                    <li>
                                        <a href="report_po.html">ยอดสั่งซื้อ</a>
                                    </li>
                                    <li>
                                        <a href="report_return.html">ยอดคืนสินค้า</a>
                                    </li>
                                </ul>
                        </li>
                        
                        <li>
                          <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-cart-arrow-down" style="font-size:24px"></i><span>การสั่งซื้อ</span>
                             </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="po_add.php">สร้างรายการสั่งซื้อ</a>
                                    </li>
                                    <li>
                                        <a href="po_list.php">ดูรายการสั่งซื้อ-รับสินค้า</a>
                                    </li>
                                       <li>
                                        <a href="po_detail.php">รายละเอียดรายการซื้อ</a>
                                    </li>
                                    
                                    
                                </ul>
                        </li>
                   
                       <li>
                          <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-paste" style="font-size:24px"></i><span>การเบิกสินค้า</span>
                             </a>
                                <ul class="ml-menu">      
                                    <li>
                                        <a href="requisition_list.php">ดูรายการเบิก</a>
                                    </li>
                                    
                                </ul>
                        </li>

                            <li>
                          <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-repeat" style="font-size:24px"></i><span>การคืนสินค้า</span>
                             </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="return_add.php">สร้างรายการคืน</a>
                                    </li>
                                    <li>
                                        <a href="return_list.php">ดูรายการคืน</a>
                                    </li>
                                    
                                </ul>
                        </li>
                   
                        <li>
                          <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-cubes" style="font-size:24px"></i><span>สินค้า</span>
                             </a>
                                <ul class="ml-menu">
                                     <li>
                                        <a href="add_product.php">เพิ่มสินค้าใหม่</a>
                                    </li>
                                    <li>
                                        <a href="info_product2.php">รายการสินค้า</a>
                                    </li>
                                
                                    
                                </ul>
                        </li>
                   
                        <li>
                          <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-address-card-o" style="font-size:24px"></i><span>จัดการผู้ใช้งาน</span>
                             </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="sign-up.php">เพิ่มผู้ใช้งาน</a>
                                    </li>
                                    <li>
                                        <a href="info_user.php">ลบ/แก้ไขข้อมูล</a>
                                    </li>
                                    <li>
                                        <a href="info_user_look.php">ดูรายชื่อผู้ใช้งาน</a>
                                    </li>
                                  
                                    
                                </ul>
                        </li>
<li class="header">Employee Views</li>
               <li class="header">MAIN NAVIGATION</li>           
                    

                    <li class="active">
                        <a href="index_manager.php">
                            <i class="material-icons">home</i>
                            <span>หน้าหลัก</span>
                        </a>
                    </li>

                   
                       <li>
                          <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-paste" style="font-size:24px"></i><span>การเบิกสินค้า</span>
                             </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="requisition_add.php">สร้างรายการเบิก</a>
                                    </li>
                                    <li>
                                        <a href="requisition_list_employee.php">ดูรายการเบิก</a>
                                    </li>
                                    
                                </ul>
                        </li>

                    <li>
                          <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-repeat" style="font-size:24px"></i><span>การคืนสินค้า</span>
                             </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="return_add.php">สร้างรายการคืน</a>
                                    </li>
                                    <li>
                                        <a href="return_list.php">ดูรายการคืน</a>
                                    </li>
                                    
                                </ul>
                        </li>
                    }
                ?>

                <li class="header">LABELS</li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
                        </a>
                    </li>





                    
                </ul>
            </div>
           

            <!-- #Menu -->
            <!-- Footer -->
          
            <!-- #Footer -->
        </aside>
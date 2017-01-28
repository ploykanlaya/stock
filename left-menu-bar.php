<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="pages/examples/sign-in.html"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Manager Views</li>
                    <li>
                        <a href="requisition_list.php">
                            <i class="fa fa-paste" style="font-size:24px"></i><span>รายการเบิกสินค้า</span>
                        </a>
                    </li>
                    <li class="header">Employee Views</li>
                    <li>
                        <a href="requisition_add.php">
                            <i class="fa fa-file-text" style="font-size:24px"></i><span>เพิ่มใบเบิกสินค้า</span>
                        </a>
                    </li>

                    <li class="header">MAIN NAVIGATION</li>           
                    

                    <li class="active">
                        <a href="index_manager.php">
                            <i class="material-icons">home</i>
                            <span>หน้าหลัก</span>
                        </a>
                    </li>

                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-line-chart" style="font-size:24px"></i></i><span>รายงาน</span>
                             </a>
                                <ul class="ml-menu">

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
                                        <a href="create_po.php">สร้างรายการสั่งซื้อ</a>
                                    </li>
                                    <li>
                                        <a href="look_po.html">ดูรายการสั่งซื้อ</a>
                                    </li>
                                    
                                </ul>
                        </li>
                   
                       <li>
                          <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-paste" style="font-size:24px"></i><span>การเบิกสินค้า</span>
                             </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="create_requests.html">สร้างรายการเบิก</a>
                                    </li>
                                    <li>
                                        <a href="look_requests.html">ดูรายการเบิก</a>
                                    </li>
                                    
                                </ul>
                        </li>

                            <li>
                          <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-repeat" style="font-size:24px"></i><span>การคืนสินค้า</span>
                             </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="create_return.html">สร้างรายการคืน</a>
                                    </li>
                                    <li>
                                        <a href="look_return.html">ดูรายการคืน</a>
                                    </li>
                                    
                                </ul>
                        </li>
                   
                        <li>
                          <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-cubes" style="font-size:24px"></i><span>สินค้า</span>
                             </a>
                                <ul class="ml-menu">
                                     <li>
                                        <a href="pages/forms/add_product.php">เพิ่มสินค้าใหม่</a>
                                    </li>
                                    <li>
                                        <a href="pages/tables/info_product2.php">รายการสินค้า</a>
                                    </li>
                                    <li>
                                        <a href="stock.html">คลังสินค้า</a>
                                    </li>
                                    
                                </ul>
                        </li>
                   
                        <li>
                          <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="fa fa-address-card-o" style="font-size:24px"></i><span>จัดการผู้ใช้งาน</span>
                             </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="pages/examples/sign-up.html">เพิ่มผู้ใช้งาน</a>
                                    </li>
                                    <li>
                                        <a href="pages/tables/info_user.php">ลบ/แก้ไขข้อมูล</a>
                                    </li>
                                    <li>
                                        <a href="pages/tables/info_user_look.php">ดูรายชื่อผู้ใช้งาน</a>
                                    </li>
                                    <li>
                                        <a href="pages/tables/info_user.php">สิทธิ์การใช้งาน</a>
                                    </li>
                                    
                                </ul>
                        </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
          
            <!-- #Footer -->
        </aside>
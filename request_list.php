<!DOCTYPE html>
<html>
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

<!-- Content -->
<section class="content">
    <div class="container-fluid">
    	<div class="row clearfix">
	        <!-- Task Info -->
	        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	            <div class="card">
	                <div class="header">
	                    <h2>รายการเบิกสินค้า</h2>
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
	                                    <th>รายการ</th>
	                                    <th>ชื่อพนักงาน</th>
	                                    <th>การอนุมัติ</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>1</td>
	                                    <td>Task A</td>
	                                    <td>John Doe</td>
	                                    <td><button type="button" class="btn btn-default">อนุมัติ</button>
	                                    <button type="button" class="btn btn-danger">ไม่อนุมัติ</button></td>
	                                </tr>
	                                <tr>
	                                    <td>2</td>
	                                    <td>Task A</td>
	                                    <td>John Doe</td>
	                                    <td><button type="button" class="btn btn-default">อนุมัติ</button>
	                                    <button type="button" class="btn btn-danger">ไม่อนุมัติ</button></td>
	                                </tr>
	                                <tr>
	                                    <td>3</td>
	                                    <td>Task A</td>
	                                    <td>John Doe</td>
	                                    <td><button type="button" class="btn btn-default">อนุมัติ</button>
	                                    <button type="button" class="btn btn-danger">ไม่อนุมัติ</button></td>
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
<!-- #END# Content -->
</body>
</html>
<!DOCTYPE html>
<html>
<!-- Head -->
    <?php include 'head.php'; ?>  
<!-- #Head --> 
<body class="theme-red">
<!-- Top Bar -->
    <?php include 'top-bar.php'; ?>  
<!-- #Top Bar -->
<!-- Left Sidebar -->
    <?php include 'left-menu.php'; ?>  
<!-- #END# Left Sidebar -->

<!-- Content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>FORM EXAMPLES</h2>
        </div>

        <!-- Multi Column -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            MULTI COLUMN
                        </h2>
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
                     <form id="addproduct" method="POST" action="../../AddProductControl.php">

                    <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="form-group">
                                     <label class="form-label">รายการ</label>
                                     <div class="form-line">                                       
                                       <input type="text" class="form-control" name="Requisition_ID" placeholder="Requisition_ID" required>
                                    </div>
                                </div>
                            </div>
    
                          
                            <div class="col-md-6">
                                <div class="form-group">
                                     <label class="form-label">ชื่อพนักงาน</label>
                                     <div class="form-line">                                       
                                       <input type="text" class="form-control" name="User_Name" placeholder="User_Name" required>
                                    </div>
                                </div>
                            </div>
                 <!--        </div> -->

                   


                       <!--  <div class="row clearfix"> -->
                        <div class="col-md-6">
                              
                                <div class="form-group">

                                 <label class="form-label">วันทำการ</label>
                                    <div class="form-line">
                                       <input type="text" class="datepicker form-control" name="ExpDate" placeholder="Please choose a date...">
                                        </div>
                                    </div>
                            </div>

                             <div class="col-md-6">
                                    <div class="form-group">
                                         <label class="form-label">เบอร์โทรศัพท์</label>
                                         <div class="form-line">
                                             <input type="text" class="form-control" name="Telephone" placeholder="Telephone" required>
                                        </div>
                                    </div>
                                </div>
                        </div> 

                            </form>
                           </div> 
  

  <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                                    <th>รหัส</th>
                                    <th>ชื่อสินค้า</th>
                                    <th>จำนวน</th>
                                    <th>ราคาราม</th>
                                    <th>เลือกสินค้า</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> <input type="text" class="form-control" id="usr"></td>
                            <td><input type="text" class="form-control" id="usr"></td>
                            <td><input type="text" class="form-control" id="usr"></td>
                            <td><input type="text" class="form-control" id="usr"></td>
                            <td><button type="button" class="btn btn-primary">เลือก</button></td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>

                <button type="button" class="btn btn-primary btn-lg btn-block">บันทึก</button>


                   


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Multi Column -->


    </div>
</section>
<!-- #END# Content -->

<!-- Script Sidebar -->
    <?php include 'script.php'; ?>  
<!-- #END# Script Sidebar -->
</body>
</html>
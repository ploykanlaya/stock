<!DOCTYPE html>
<html>

<!-- Head -->
    <?php include 'head.php'; ?>  
<!-- #Head --> 
<body class="theme-blue">
<!-- Top Bar -->
    <?php include 'top-bar.php'; ?>  
<!-- #Top Bar -->
<!-- Left Sidebar -->
    <?php include 'left-menu-bar.php'; ?>  
<!-- #END# Left Sidebar -->



    <section class="content">
        <div class="container-fluid">
           

            <!-- Multi Column -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                เพิ่มผู้ใช้งานใหม่
                            </h2>
                         
                        </div>
                        <div class="body">
                         <form id="sign_up" method="POST" action="AddUserControl.php" enctype="multipart/form-data">
                              
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    
                                         <label class="form-label">ชื่อ</label>
                                                                                
                                           <input type="text" class="form-control" name="Name" placeholder="Name" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}" required autofocus>
                                       
                                    
                                </div>
                            


                            
                                <div class="col-md-6">
                                    
                                         <label class="form-label">นามสกุล</label>
                                        
                                            <input type="text" class="form-control" name="surname" placeholder="SurName" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}" required >
                                      
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-md-12">
                                   
                                      <label class="form-label">เบอร์โทรศัพท์</label>
                                        
                                             <input type="text" class="form-control" name="Telephone" placeholder="Telephone" maxlength=10 onKeyUp="if(this.value*1!=this.value) this.value='' ;" required>
                                  </div>
                                  </div>  

                                 <div class="row clearfix">   
                                <div class="col-md-12">
                                    
                                     <label class="form-label">ที่อยู่</label>
                                        
                                             <input type="text" class="form-control" name="Address" placeholder="Address" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}" required>
                                        
                                </div>
                                </div>

                                <div class="row clearfix">
                                <div class="col-md-12">
                                    
                                     <label class="form-label">ชื่อผู้ใช้งาน</label>
                                        
                                              <input type="text" class="form-control" name="Username" placeholder="Username" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}" required>
                                        
                                </div>
                                </div>

                                <div class="row clearfix">
                                <div class="col-md-6">
  
                                     <label class="form-label">รหัสผ่าน</label>
                                       
                                           <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
  
                                </div>
                                 
                                 <div class="col-md-6">

                                     <label class="form-label">ยืนยันรหัสผ่าน</label>
                                       
                                           <input type="password" class="form-control" name="confirm" minlength="6" placeholder="confirm" required>
                                   
                                </div>

                            </div>

                     <div class="form-group">
                     <label class="position">ตำแหน่ง</label>
                    
                        <input type="radio" name="position" id="pos0" class="filled-in chk-col-pink" value="ผู้จัดการ" required>
                        <label for="pos0">ผู้จัดการ</label>
                        <input type="radio" name="position" id="pos1" class="filled-in chk-col-pink" value="พนักงาน">
                        <label for="pos1">พนักงาน</label>
                    </div>

                <div class="input-group">
                       <label class="Image">เลือกรูปภาพโปรไฟล์</label>
                        <input type="file"  name="Image" id="Image" required>
               </div>

                                   

                             

                            
                            


                               
                      

                           
                                       <button type="submit" class="btn btn-danger btn-lg btn-block">ยันยืน</button>
                                  
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            
            <!-- #END# Multi Column -->
        </div>
    </section>



<!-- Script Sidebar -->
    <?php include 'script.php'; ?>  
<!-- #END# Script Sidebar -->
</body>

</html>
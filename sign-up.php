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
                                        
                                             <input type="text" class="form-control" name="Telephone" placeholder="Telephone"  onkeyup="autoTab(this)" OnKeyPress="return chkNumber(this)" required>
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
    <script type="text/javascript"> 
function autoTab(obj){ 
/* กำหนดรูปแบบข้อความโดยให้ _ แทนค่าอะไรก็ได้ แล้วตามด้วยเครื่องหมาย 
หรือสัญลักษณ์ที่ใช้แบ่ง เช่นกำหนดเป็น รูปแบบเลขที่บัตรประชาชน 
4-2215-54125-6-12 ก็สามารถกำหนดเป็น _-____-_____-_-__ 
รูปแบบเบอร์โทรศัพท์ 08-4521-6521 กำหนดเป็น __-____-____ 
หรือกำหนดเวลาเช่น 12:45:30 กำหนดเป็น __:__:__ 
ตัวอย่างข้างล่างเป็นการกำหนดรูปแบบเลขบัตรประชาชน 
*/ 
var pattern=new String("___-___-____"); // กำหนดรูปแบบในนี้ 
var pattern_ex=new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้ 
var returnText=new String(""); 
var obj_l=obj.value.length; 
var obj_l2=obj_l-1; 
for(i=0;i<pattern.length;i++){ 
if(obj_l2==i && pattern.charAt(i+1)==pattern_ex){ 
returnText+=obj.value+pattern_ex; 
obj.value=returnText; 
} 
} 
if(obj_l>=pattern.length){ 
obj.value=obj.value.substr(0,pattern.length); 
} 
} 
</script> 

<script language="JavaScript">
    function chkNumber(ele)
    {
    var vchar = String.fromCharCode(event.keyCode);
    if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
    ele.onKeyPress=vchar;
    }
</script>





<!-- #END# Script Sidebar -->
</body>

</html>
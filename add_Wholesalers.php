<!DOCTYPE html>
<html>


<!-- Top Bar -->
    <?php include 'head.php'; ?>  
<!-- #Top Bar --> 


<?php
        require("Class.php");
$servername = "localhost";
 $username = "root";
 $password = "";
        $database = "stock";

        // Create connection
        $conn = new mysqli($servername, $username, $password,$database);
        mysqli_set_charset($conn,"utf8");
        // Check connection
        if (mysqli_connect_errno($conn))
          {
             echo "Failed to connect to MySQL: " . mysqli_connect_error($conn);
          }
    


        
       
    ?>
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
                                เพิ่มบริษัทค้าส่ง 
                            </h2>
                         
                        </div>
                        <div class="body">
                         <form id="addproduct" method="POST"  onsubmit="return validate()" action="AddwhoControlCopy.php" >
                              
                            <div class="row clearfix">
                                <div class="col-md-12">
                                  
                                         <label class="form-label">ชื่อบริษัท</label>
                                                                               
                                           <input type="text" class="form-control" name="Wholesalers_Name" placeholder="Wholesalers_Name" onKeyUp="if(!(isNaN(this.value))) { alert('กรุณากรอกอักษร'); this.value='';}" required autofocus>
                                    
                                </div>
                            </div>


                            <div class="row clearfix">
                                <div class="col-md-6">
                                    
                                         <label class="form-label">เบอร์โทรศัพท์</label>
                                         
                                             <input type="text" class="form-control" class="form-control" name="Telephone" placeholder="Telephone"  onkeyup="autoTab(this)"  OnKeyPress="return chkNumber(this)" required >
                                      
                                </div>


                                <div class="col-md-6">
                                   
                                      <label class="form-label">อีเมลล์</label>
                                       
                                             <input type="Email" class="form-control" name="Email" placeholder="E-mail"   required>
                                      
                                </div>
                            </div>
<script type="text/javascript">
function validate()
{
form_mail=document.form1
mail=form_mail.email.value.indexOf("@")
submitOK="True"
if (mail==-1) 
{
alert("คุณยังไม่ได้ใส่ (Email)")
submitOK="False"
} 
if (submitOK=="False")
{
return false
}
}
</script>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    
                                     <label class="form-label">ที่อยู่</label>
                                        
                                             <input type="text" class="form-control" name="Address" placeholder="Address" required>
                                    
                                </div>
                              
                            </div>

                           
                                       <button type="submit" class="btn btn-danger btn-lg btn-block"  >ยันยืน</button>
                                  
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            
            <!-- #END# Multi Column -->
        </div>
    </section>

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

    <!-- Autosize Plugin Js -->
    <script src="plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
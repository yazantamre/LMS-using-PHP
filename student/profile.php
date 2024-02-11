  <!DOCTYPE html>
<html>

 <?php
        require('../DB/DB.php');
     $db = new DB();
 session_start();
  if ($_SESSION['valid'] == 3)  
{ 
 $userid =  $_SESSION['id'];
$result =$db->getusersById($userid);
          
        $firstName= ''  ;
        $lastName= ''  ;
        $email= ''  ;
        $password= ''  ;
        $address= ''  ;
        $phone= ''  ;




       foreach ($result as $item) 

      
         { 
        $firstName=$item['firstName']   ;
        $lastName=$item['lastName']   ;
        $email=$item['email']   ;
        $password=$item['password']   ;
        $address=$item['address']   ;
        $phone=$item['phone']   ;

 
  
// Store the cipher method
$ciphering = "AES-128-CTR";
 
// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;

// Non-NULL Initialization Vector for encryption
$decryption_iv = '9832157489234587'; 
// Store the decryption key
$decryption_key = "tesrbhfASDzxcyNKO"; 
// Use openssl_decrypt() function to decrypt the data
// Use openssl_decrypt() function to decrypt the data
$password=openssl_decrypt ($password, $ciphering, 
        $decryption_key, $options, $decryption_iv);


         }

 ?>
<head>
    <title>Academic Center</title>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

    <link rel="stylesheet" href="../assets/css/admin/module.admin.page.index.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="../assets/images/icon.png"  sizes="32x32"  rel="icon">


    <script src="../assets/components/library/jquery/jquery.min.js?v=v1.2.0"></script>
    <script src="../assets/components/library/jquery/jquery-migrate.min.js?v=v1.2.0"></script>
    <script src="../assets/components/library/modernizr/modernizr.js?v=v1.2.0"></script>
    <script src="../assets/components/plugins/less-js/less.min.js?v=v1.2.0"></script>
    <script src="../assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.2.0"></script>
    <script src="../assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.2.0"></script>
    <script src="../assets/components/library/jquery-ui/js/jquery-ui.min.js?v=v1.2.0"></script>
    <script src="../assets/components/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js?v=v1.2.0"></script>
     <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">   
</head>

<style>
        .active2 {

    background-color: #cb4040;
    color: #fff;
        } 
 
    .image-container {
      width: 230px; /* عرض المربع */
      height: 230px; /* ارتفاع المربع */
      border: 1px solid #a7a1a1; /* إضافة حدود للمربع إذا كنت ترغب */
      overflow: hidden; /* لمنع تجاوز الصورة خارج المربع */
    }

    .image-container img {
      width: 100%; /* تحتفظ الصورة بحجم المربع دائمًا */
      height:100%; /* الارتفاع سيتعديل تلقائيًا بناءً على العرض */
      display: block; /* تحسين تخطيط الصورة داخل المربع */
      object-fit: cover;
    }
    body,strong,label
	{
		font-size: 18px;
		color: #333333;
        font-family: 'Poppins', sans-serif;
        letter-spacing: 0.5px;
        overflow-x: hidden;
        font-weight: 500 !important;
    }
	input
	{
		width: 40% !important;
		height: 50px !important;
		font-size: 16px !important;
	}

	#showPasswordButton
	{
		height:50px;
	}
  </style>

  <script> 
    $(function(){
      $("#includedMenu").load("menu.php");
 
    });

    </script>   
</head>
<body style="overflow-x: hidden;">


      <div id="includedMenu"></div>

<div  id="content">
    <h1 class="bg-white content-heading border-bottom text-primary center">My account</h1>
    <div class="widget widget-tabs widget-tabs-gray">
        <div class="widget-body">
            <div class="tab-content">
                <!-- Description -->
                <div class="tab-pane active" id="productDescriptionTab">
                    <!-- Row -->
                    <div class="row">
                        <!-- Column -->
                        <div class="col-sm-12 col-md-2" style="margin-left: 10px; ">
                            <!--<div class="border-bottom bg-gray">
                                <a href="">
                                    <img id="profileImage2" src="../assets//images/people/250/22.jpg" class="img-responsive img-clean"/>
                                </a>
                            </div>-->
                            <br>

                            <!-- Photos -->
                           
                            <div class="tab-pane" id="productPhotosTab">
                                 <form class="form-horizontal" action="../DB/updateUserimgDB.php" method="POST" enctype="multipart/form-data" >
                                 <label class="text-uppercase">Profile Photo</label>
                                    <div class="separator bottom"></div>
                                <div class="border-bottom bg-gray  image-container" >
                                    <!-- تحديث الصورة الرئيسية -->
                                    <img id="blah1"   src="<?php echo $_SESSION['img']; ?>" class="img-responsive img-clean"/>
                                </div>
                                <br><br>
                                <!-- File input and "Remove photo" button-->
                                <div style="display: flex; align-items: center;">
                                    <label style="width: 170px; height: auto" for="image" class="btn btn-info">Select Photo</label>
                                    <input style="display: none;"  type="file" name="img" id="image" onchange="readURL1(this);"  accept="image/*" required>
                                </div>

                                <!-- Save button with an onclick event -->
                                <div style="margin-top: 10px;">
                                <input style="width: 82px !important; height: auto"  type="submit" class="btn btn-default" id="resetImageButton" value="Cancel">
                                <input class="btn btn-primary" style="width: 82px !important; height: auto"  name="submit1"  type="submit"  id="submit"  value="Save" />
                                </div>
                                  </form>
                            </div>
                          
                            <!-- // Photos END -->
                        </div>

                        <!-- // Column END -->

                        <!-- Column -->
                          <form class="form-horizontal" action="../DB/updateUserDB.php" method="POST" enctype="multipart/form-data" onsubmit="return validatePassword();" > 
                        <div class="col-md-6" style="margin-left: 50px; border-left: 1px solid ;">
                             

                            <label>First Name</label>
                            <input required type="text" id="editableTextbox2" class="form-control"  name ="firstName" value="<?php echo $firstName ;  ?>" readonly placeholder="Enter your First name" /><br>
                            <div class="separator"></div>

                            <label>Last Name</label>
                            <input required type="text" id="editableTextbox3" class="form-control"   name ="lastName"  value="<?php echo $lastName ;  ?>"   readonly placeholder="Enter your Last name" /><br>
                            <div class="separator"></div>

                            <label>Phone</label>
                            <input required type="number" id="editableTextbox4" class="form-control"  name ="phone"   value="<?php echo $phone ;  ?>" readonly placeholder="Enter your Phone Number" /><br>
                            <div class="separator"></div>

                            <label>Address</label>
                            <input required type="text" id="editableTextbox5" class="form-control" name ="address"  value="<?php echo $address ;  ?>" readonly placeholder="Enter your Address 1" /><br>

                            

                            <label>E-mail</label>
                            <input required type="email" id="editableTextbox8" class="form-control" name ="email"  value="<?php echo $email ;  ?>" readonly placeholder="Enter your Email" /><br>
                            <div class="separator"></div>

                            <label>Password</label>
                            <div class="input-group" style="  display: flex;">
                                <input required  type="password" id="passwordField" class="form-control"  value="<?php echo $password ;  ?>" name ="password"  readonly placeholder="Enter your password">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="showPasswordButton" onclick="showPassword()">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="separator"></div>

                            <!-- Edit/Save Button -->
                            
                            <button type="button" id="editBtn" class="btn btn-primary"  onclick="toggleEditMode()" style="height: 40px;">Edit details</button>
                            <button   id="savebtn" class="btn btn-primary" name="submit"  type="submit" style="height: 40px; display:none"> save</button>                              <!-- // Column END -->
                          </div>
                      </form>
                        <!-- // Column END -->
                    </div>
                    <!-- // Row END -->
                </div>
                <!-- // Description END -->
            </div>
        </div>
    </div>
</div>
<!-- // Content END -->

<div class="clearfix"></div>
<!-- // Sidebar menu & content wrapper END -->

<!-- Main Container Fluid END -->
<!-- Global -->
    <script>
  function readURL1(input) {
$('#blah1').attr('src', '');

        if (input.files && input.files[0]) {
            var reader = new FileReader();
// console.log(reader.readAsText(logFile));

            reader.onload = function (e) {
                $('#blah1')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(220);
            };

            reader.readAsDataURL(input.files[0]);
        }
    } ;

</script>
<script>
var basePath = '',
    commonPath = '../assets/',
    rootPath = '../',
    DEV = false,
    componentsPath = '../assets/components/';

var primaryColor = '#cb4040',
    dangerColor = '#b55151',
    infoColor = '#466baf',
    successColor = '#8baf46',
    warningColor = '#ab7a4b',
    inverseColor = '#45484d';

var themerPrimaryColor = primaryColor;

function showPassword() {
    const passField = document.getElementById("passwordField");
    const editButton = document.getElementById("showPasswordButton");

    if (passField.type == "password") 
    {
        passField.type = "text";
    }
    else
    {
        passField.type = "password";

    }
}

function toggleEditMode() {

    
const input2 = document.getElementById("editableTextbox2");
const input3 = document.getElementById("editableTextbox3");
const input4 = document.getElementById("editableTextbox4");
const input5 = document.getElementById("editableTextbox5");
const input8 = document.getElementById("editableTextbox8");
const input9 = document.getElementById("passwordField");
const editButton = document.getElementById("editBtn");
const savebtn = document.getElementById("savebtn");

if (input2.readOnly) {
    input2.readOnly = false;
    input2.readOnly = false;
    input3.readOnly = false;
    input4.readOnly = false;
    input5.readOnly = false;
    input8.readOnly = false;
    input9.readOnly = false;

    input2.style.color = '#000000';
    input3.style.color = '#000000';
    input4.style.color = '#000000';
    input5.style.color = '#000000';
    input8.style.color = '#000000';
    input9.style.color = '#000000';

    editButton.style.display='none';
    savebtn.style.display  = 'block';
} else {
     input2.readOnly = true;
    input3.readOnly = true;
    input4.readOnly = true;
    input5.readOnly = true;
    input8.readOnly = true;
    input9.readOnly = true;

    input9.type = "password";
    editButton.textContent = 'Edit'; // Change button text back to 'Edit' when saving
    input2.style.color = '';
    input3.style.color = '';
    input4.style.color = '';
    input5.style.color = '';
     
    input8.style.color = '';


    input9.style.color = '';
    //document.getElementById("editBtn").type= 'submit';
}
}

// Add a click event listener to the reset button
document.getElementById("resetImageButton").addEventListener("click", function () {
    // Reset the value of the image input field
     var src = <?php echo json_encode($_SESSION['img'], JSON_HEX_TAG); ?>; 

    document.getElementById("image").value = "";

    document.getElementById("blah1").src = src;
});

function updateProfileImage() {
    const fileInput = document.getElementById("image");
    const profileImage1 = document.getElementById("newProfileImage");

    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();

        reader.onload = function (e) {
            // تحديث مصدر الصورة الجديدة
            profileImage1.src = e.target.result;
        };

        reader.readAsDataURL(fileInput.files[0]);
    }
}
function validatePassword() {
    var passwordInput = document.getElementById("passwordField");
    var password = passwordInput.value;

    if (password.length < 8) {
        sweetAlert("Caution", "Password length must be at least 8", "info"); 
        return false; // Prevent form submission
    }

    return true; // Continue with form submission
}
</script>
<script>

       $("#includedMenu").load("menu.php");
    document.addEventListener("DOMContentLoaded", () => {
const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);
const res = urlParams.get('res');
        var myNewURL = "Online Lms/student/profile.php";//the new URL

 if (res == 1   ) {
     
        sweetAlert("success");

window.history.pushState("object or string", "Title", "/" + myNewURL );


}
else if (res == 0   ) {

 window.history.pushState("object or string", "Title", "/" + myNewURL ); 

             sweetAlert("update failed...", "Something went wrong! ", "error");
 
}

else if(res == 2   ) {
     
     
  sweetAlert("update failed...", "his email has already been used ,or something else is wrong! ", "error");
 
 window.history.pushState("object or string", "Title", "/" + myNewURL ); 
}

});
</script>
<script src="../assets/components/library/bootstrap/js/bootstrap.min.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v=v1.2.0"></script>
<script src="../assets/components/plugins/breakpoints/breakpoints.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/animations.init.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/lib/jquery.flot.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/lib/jquery.flot.resize.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/lib/plugins/jquery.flot.tooltip.min.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/custom/js/flotcharts.common.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/custom/js/flotchart-simple.init.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/custom/js/flotchart-simple-bars.init.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/widgets/widget-chat/assets/js/widget-chat.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/slimscroll/jquery.slimscroll.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/forms/elements/bootstrap-datepicker/assets/lib/js/bootstrap-datepicker.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/forms/elements/bootstrap-datepicker/assets/custom/js/bootstrap-datepicker.init.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/easy-pie/assets/lib/js/jquery.easy-pie-chart.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/easy-pie/assets/custom/easy-pie.init.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/widgets/widget-scrollable/assets/js/widget-scrollable.init.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/holder/holder.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/sidebar.main.init.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/sidebar.collapse.init.js?v=v1.2.0"></script>
<script src="../assets/components/helpers/themer/assets/plugins/cookie/jquery.cookie.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/core.init.js?v=v1.2.0"></script>
</body>
</html>
 <?php }
else {
       header('Location:../Pallms/signInUp.php');
 
}

?>  
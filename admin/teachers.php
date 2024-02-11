<!DOCTYPE html>
 <html> 
    
    
    <?php
        require('../DB/DB.php');
     $db = new DB();
 session_start();
  if ($_SESSION['valid'] == 1)  
{  ?>
<head>
<title>Academic center</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	
	 
	<link rel="stylesheet" href="../assets/css/admin/module.admin.page.shop_products.min.css" />
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
<script> 
    $(function(){
      $("#includedMenu").load("menu.php");
    });

    </script> 
   <style type="text/css"> 


    .active7 
    {
        background-color: #cb4040;
        color: #fff;
    }
 
   .activeSt 
   {
        color: rgb(0, 190, 0)!important;
        text-align: center;
    }

    .inactiveSt 
    {
        color: red!important;
        text-align: center;
    }
    .content-heading 
    {
        margin: 0 auto;
        text-align: center;
        padding: 20px !important; /* Adjust the padding as needed */
    }
    body,label,th,td
	{
		font-size: 18px !important;
		color: #333333;
        font-family: 'Poppins', sans-serif !important;
        font-weight: 500 !important;
        letter-spacing: 0.5px;
        overflow-x: hidden;
    }


    </style>
</head>
<body>

	      <div id="includedMenu"></div>
   
<div id="content"><h1 class="bg-white content-heading border-bottom text-primary">Teachers management</h1>
<br>
    <div style="display: flex; justify-content: center;" class="input-group mb-3">
        <input style="width: 15%;" type="text" class="form-control" id="searchInput" placeholder="Search">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button" id="searchButton">Search</button>
        </div>
    </div>
    <br>
    <center>
 
    <table style="width: 90%; border: 3px solid #cb4040; " class="table table-bordered table-condensed table-striped table-primary table-vertical-center">
        <thead>
            <tr>
                <th style="width: 5%;" class="center">Number</th>
                <th class="center">Teacher Name</th>
                <th class="center">Status</th>
                <th class="center">Phone number</th>
                <th class="center">E-mail</th>
                <th class="center" style="width: 5%">Actions</th>
            </tr>
        </thead>
        <tbody>
     <?php 

     $result =$db->getusersByType(2);
     $No= 0  ;
       foreach ($result as $item) 

      
         { 
  $No= $No +1  ;
$status = $item['status'] ;

if ($status == 1) {
    echo " <tr>
                <td class='center'>" . $No . "</td>
                <td class='center'>" . $item['firstName'] . " " . $item['lastName'] . " </td>
                <td class='s" . $item['id'] . " activeSt'  >Active</td>
                <td class='center' >  " . $item['phone'] . " </td>
                <td class='center' >  " . $item['email'] . " </td>

                  <td class='center'>
                    <div class='btn-group btn-group-sm'>
                        <button type='button' title='Toggle teacher status' href='#'   id='a" . $item['id'] . "' 
                        class='btn btn-danger'
                        onclick='runMyFunction(this.id)'>Toggle Status</button>
                    </div>
                </td>
            </tr>";
} else {
    echo " <tr>
                <td class='center'>" . $No . "</td>
                <td class='center'>" . $item['firstName'] . " " . $item['lastName'] . " </td>
                <td  class='s" . $item['id'] . "  inactiveSt'>Inactive</td>
                <td class='center'>  " . $item['phone'] . " </td>
                <td class='center' >  " . $item['email'] . " </td>
                <td class='center'>
                    <div class='btn-group btn-group-sm'>
                        <button type='button' title='delete teacher' id='i" . $item['id'] . "' class='btn btn-success'  
                        onclick='runMyFunction(this.id)'>Toggle Status</button>
                    </div>
                </td>
            </tr>";
}
                  }

 

              ?>
                           
                       

           
                  
                      
                    
                    
                    
                     
                    
                </tbody>
    </table>
</center>

    <!-- // Products table END -->


</div>	
	
		
		<!-- // Content END -->
		
	</div>
	<!-- // Main Container Fluid END -->
	



	

	

	<!-- Global -->
	<script>
        $(".btn").mouseup(function(){
    $(this).blur();
})
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

function runMyFunction(id)
{ 
 

 var userid =id.substring(1);
 var userStatus = id.charAt(0);
   var msgTxt = '';
 var txtStatus= "";
 if (userStatus=='a') 
    {
    userStatus = 2 ; 
    txtStatus= "Inactive"; 
    msgTxt = 'Are you sure you want to deactivate this teachers account?' ; }
else
    {
    userStatus = 1 ; 
    txtStatus= "Active"; 
    msgTxt = 'Are you sure you want to activate this teachers account?' ; }

       swal({
  title: "Caution",
  text:  msgTxt,
  type: "info",
  showCancelButton: true,
  confirmButtonColor: "green",
  confirmButtonText: "Yes",
  closeOnConfirm: true
},
function(){
 
   var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
           
var xxx= document.querySelectorAll(".s"+userid);
  var i;

  for (i = 0; i < xxx.length; i++) {
     xxx[i].innerHTML = txtStatus;
     if ( userStatus == '2') {

        xxx[i].classList.remove("activeSt");

    xxx[i].classList.add("inactiveSt");

 
 
 document.getElementById(id).classList.remove("btn-danger");

  document.getElementById(id).classList.add("btn-success");

document.getElementById(id).setAttribute('id', "i"+userid);



     }
     else
     
     {

     document.getElementById(id).classList.remove("btn-success");
 
 document.getElementById(id).classList.add("btn-danger");

 xxx[i].classList.remove("inactiveSt");

    xxx[i].classList.add("activeSt");
    document.getElementById(id).setAttribute('id', "a"+userid);
 
     }

  }
             }
        };
        xmlhttp.open("GET", "../DB/toggleUserStatus.php?userid=" + userid +" && userStatus=" + userStatus, true);
        xmlhttp.send();
});


   

 

 
}
     

   
    document.addEventListener("DOMContentLoaded", function () {
        // Get the input field and button
        const searchInput = document.getElementById("searchInput");
        const searchButton = document.getElementById("searchButton");

        // Get all table rows
        const tableRows = document.querySelectorAll("table tbody tr");

        // Add an event listener to the search button
        searchButton.addEventListener("click", function () {
            const searchText = searchInput.value.toLowerCase();

            // Loop through all table rows
            tableRows.forEach(function (row) {
                const rowData = row.textContent.toLowerCase();
                if (rowData.includes(searchText)) {
                    row.style.display = ""; // Show matching rows
                } else {
                    row.style.display = "none"; // Hide non-matching rows
                }
            });
        });
    });

</script>

	</script>
	
	<script src="../assets/components/library/bootstrap/js/bootstrap.min.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/breakpoints/breakpoints.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/animations.init.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/holder/holder.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/forms/elements/bootstrap-select/assets/lib/js/bootstrap-select.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/forms/elements/bootstrap-select/assets/custom/js/bootstrap-select.init.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/forms/elements/uniform/assets/lib/js/jquery.uniform.min.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/forms/elements/uniform/assets/custom/js/uniform.init.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/tables/classic/assets/js/tables-classic.init.js?v=v1.2.0"></script>
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
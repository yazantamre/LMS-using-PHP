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
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
<script> 
    $(function(){
      $("#includedMenu").load("menu.php");
 
    });

    </script> 
   <style type="text/css"> 
   .activeSt {
   color: rgb(0, 190, 0)!important;; }

    .inactiveSt
    {
   color: red!important;
    }

     .active11 
    {
    background-color: #cb4040;
    color: #fff;
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
   

    <div id="content"><h1 class="bg-white content-heading border-bottom text-primary ">Posts management</h1>
    <br>
        <div style="display: flex; justify-content: center;" class="input-group mb-3">
            <input style="width: 15%;" type="text" class="form-control" id="searchInput" placeholder="Search">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" id="searchButton">Search</button>
            </div>
        </div>
        <br>
        <center>
        <table style="width: 80%; border: 3px solid #cb4040; " class="table table-bordered table-striped table-primary table-vertical-center">
            <thead>
                <tr>
                    <th style="width: 5%;" class="center">Number </th>
                    <th class="center">Post Title</th>
                    <th class="center" style="width: 5%;">Actions</th>
                </tr>
            </thead>

              <?php 

     $result =$db->getPosts();
     $No= 0  ;
       foreach ($result as $item) 

      
         { 
  $No= $No +1  ;
 
 {  echo " <tr>
                <td class='center'>".$No. "</td>
                <td class='center'>".$item['title']."</td>
                  <td class='center'>
                    <form action='editPost.php' method='POST' enctype='multipart/form-data' >
                    <div class='btn-group btn-group-sm'>
                        <input type='number' name='postId'    value='".$item['id']."' hidden>
                        <button type='submit' name='submit' title='Go to classroom' class='btn btn-info' style='border-radius: 5%;'>Edit</button>
                    </div>
                    </form>
                </td>
            </tr>" ;}
 
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
	



<script>
 
    document.addEventListener("DOMContentLoaded", () => {
  
 
const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);
const res = urlParams.get('res');

var myNewURL = "Online Lms/admin/posts.php";
 if (res == 1   ) {
    sweetAlert("Done","Update complete!","success");
    window.history.pushState("object or string", "Title", "/" + myNewURL );
}
 

else if(res == 2) {
     
     
    sweetAlert("Failed", "Encountered an error", "error");
 window.history.pushState("object or string", "Title", "/" + myNewURL );

}
 


  if (res == 11  ) {
    sweetAlert("Done","Post deleted!","success");
window.history.pushState("object or string", "Title", "/" + myNewURL );

}
 

else if(res == 22) {
     
     
    sweetAlert("Failed", "Encountered an error", "error");
 window.history.pushState("object or string", "Title", "/" + myNewURL );

}


});

</script>

	<!-- Global -->
	<script>

$(".btn").mouseup(function(){
    $(this).blur();

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
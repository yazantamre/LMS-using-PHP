<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 app"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 app"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 app"> <![endif]-->
<!--[if gt IE 8]> <html class="app"> <![endif]-->
<!--[if !IE]><!--><html class="app"><!-- <![endif]-->


		<?php 
 session_start();
 if ( $_SESSION['valid'] != 2)  
       header('Location:../Pallms/signInUp.php');

   
 
require('../DB/DB.php');

     $db = new DB(); 
      

        

    if(isset($_POST['submit']) or  isset($_POST['submitDB'])){ 

    	$courseId=$_POST['courseId'];
        $assigmentId=$_POST['assigmentId'];

 
 ?>

<head>
	<title>Course Classroom</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	
	<!-- 
	**********************************************************
	In development, use the LESS files and the less.js compiler
	instead of the minified CSS loaded by default.
	**********************************************************
	<link rel="stylesheet/less" href="../assets/less/admin/module.admin.page.email.less" />
	-->
	
		<!--[if lt IE 9]><link rel="stylesheet" href="../assets/components/library/bootstrap/css/bootstrap.min.css" /><![endif]-->
	<link rel="stylesheet" href="../assets/css/admin/module.admin.page.email.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="../assets/images/icon.png"  sizes="32x32"  rel="icon">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

	<script src="../assets/components/library/jquery/jquery.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/jquery/jquery-migrate.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/modernizr/modernizr.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/less-js/less.min.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.2.0"></script>	
</head>

 <script> 
    $(function(){
      $("#includedMenu").load("menu.php");
 
    });

    </script> 	

      <style type="text/css">
    .active3 {

    background-color: #cb4040;
    color: #fff;
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
 

	<div id="content"><div class="layout-app">
<div class="col-table">
	
	<h1 class="bg-white text-primary content-heading border-bottom text-center">Course Classroom</h1>
	<div class="bg-white text-center  innerAll border-bottom">
	<ul class="menubar">
		<li class="active">
			<form class="form-horizontal" action="advertisements.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		<button  type="submit"    name ="submit"  style = " text-decoration: none;
		background-color: inherit;
    color: #878787;
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none;
     "     > Posts </button>
				</form> 


</li>
		<li>



	<form class="form-horizontal" action="assayments.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		<button  type="submit"    name ="submit"  style = " text-decoration: none;
		background-color: inherit;
    color: #878787;
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none;
     "    > Assignments </button>
				</form> 

 

		</li>
		<li>
		 


			<form class="form-horizontal" action="cementEvaluation.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		<button  type="submit"    name ="submit"   style = "   background: #ededed;
    color: #3b3b3b;
    font-weight: 600;
    padding: 3px;
     
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none; "   > Assigment Grading </button>
				</form> 
		</li>
		
<li>

		<form class="form-horizontal" action="students.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		<button  type="submit"    name ="submit"  style = " text-decoration: none;
		background-color: inherit;
    color: #878787;
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none;
     "   > Students   </button>
				</form> 
</li>
	</ul>
	
</div>
	<div class="col-separator-h"></div>

	<div class="col-table-row">
	
		<div class="col-app col-unscrollable">
			
			<div class="col-app">
				<div class="row row-app email">
					
					<div class="col-md-12">
						<div class="col-separator">

							<div class="row row-app">
								
								<div class="col-md-12" style="margin-left: 15px;">
                                    
									<div class="col-separator col-separator-last box">


<div class="widget widget-tabs widget-tabs-gray border-bottom-none">



		<!-- Filters -->
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
                    <th class="center" style="width: 5%;" class="center">Number</th>
                    <th class="center">Student Name</th>
                    <th class="center">Submission Date</th>
                    <th class="center">Submission Status</th>
                    <th class="center">Solution</th>
                    <th class="center">Mark</th>
                </tr>
            </thead>
            <tbody>
            	<?php
$no = 1;
	$result =$db->getassigmentEvaluationwithuser($assigmentId);

		foreach ($result as $item) 
{
		$assigmentevId=	$item['id']	;			 ?>
                <tr>
                    <td class="center"><?php echo $no ; ?></td>
                    <td class="center"><?php echo $item['firstName']. " " . $item['lastName']; ?></td>
                    <td class="center"><?php echo $item['DateAdded'] . $item['timeAdded']; ?></td>
                    <?php 
                    if ($item['type'] =="1") 
                    	{?>
                    <td class="bg-white center">On time</td>

                <?php 
                     } else if($item['type'] =="2")
                     {
                       ?> 
<td class="bg-gray center" >Late</td>
                    	 <?php 
                     } else { ?>
  <td class="bg-primary center">Missing</td>
                     	<?php 
                     }   ?>

                   <td class="center">
                  
                  <form class="form-horizontal" action="solution.php" method="POST" enctype="multipart/form-data">
                 <input type="text"  name="assigmentId" id="" value="<?php echo $assigmentId;  ?>" hidden readonly/> 
                 <input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
          <input type="text"  name="assigmentevId" id="" value="<?php echo $assigmentevId;  ?>" hidden readonly/> 

<input type="submit"    name ="submit" value= 
"view Solution" style="    color: #cb4040;
    background: none;
    border: none;
" />
</form>

                   </td>
                   <td class="center text-success"><?php echo $item['mark']; ?></td>
                    
                </tr> 
                <?php 
$no +=1;
            } ?>		
                       
                    </tbody>
        </table>
    </center>
    
        <!-- // Products table END -->
    
    
    </div>		
    


	
		
	
	<!-- // To END -->
	<div class="clearfix"></div>

<!-- // Filters END -->
											<!-- Widget heading -->
										
											<!-- // Widget heading END -->
											
											<div class="widget-body">
												<form class="form-horizontal">
													<div class="tab-content">

														<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
																		
																	
		

																			

		
		
		
		

													
														<!-- Tab content -->
								<div class="tab-pane active" id="account-details">
														
											
									
															
															
															

								</div> 
                                <!-- end col 2 -->

							</div>

						</div>

					</div>
				</div>

			</div>

		</div>

	</div>
</div>
</div>



	
	
		
		</div>
		<!-- // Content END -->
		
		<div class="clearfix"></div>
		<!-- // Sidebar menu & content wrapper END -->
		
		
		
	</div>
	<!-- // Main Container Fluid END -->
	
	
	

	<!-- Global -->
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

    // Function to handle the delete action
function handleDeleteClick(event) {
    event.preventDefault();
    const row = event.target.closest('tr'); // Find the closest row
    const table = row.closest('table'); // Find the closest table
    const rowIndex = Array.from(table.querySelectorAll('tbody tr')).indexOf(row); // Get the row index
    
    const confirmed = confirm('Are you sure you want to reject the application?');
    
    if (confirmed) {
        row.remove(); // Remove the row from the table
    }
}

// Function to handle the accept action
function handleAcceptClick(event) {
    event.preventDefault();
    const row = event.target.closest('tr'); // Find the closest row
    const table = row.closest('table'); // Find the closest table
    const rowIndex = Array.from(table.querySelectorAll('tbody tr')).indexOf(row); // Get the row index
    
    const confirmed = confirm('Are you sure you want to accept this application?');
    
    if (confirmed) {
        row.remove(); // Remove the row from the table
    }
}

// Add a click event listener to all accept buttons
const acceptButtons = document.querySelectorAll('.btn-success');
acceptButtons.forEach(button => {
    button.addEventListener('click', handleAcceptClick); // Use handleAcceptClick for accept buttons
});

// Add a click event listener to all delete buttons
const deleteButtons = document.querySelectorAll('.btn-danger');
deleteButtons.forEach(button => {
    button.addEventListener('click', handleDeleteClick); // Use handleDeleteClick for delete buttons
});


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


    document.addEventListener("DOMContentLoaded", function () {
    // العثور على الخلية والزر باستخدام المعرفات
    const cell = document.querySelector(".center .view-solution-btn");
    const row = cell.closest("tr");
    const cellWidth = row.cells[5].offsetWidth; // احتسب عرض الخلية
    
    // قم بتعيين ارتفاع وعرض الزر ليكون نفس حجم الخلية
    cell.style.width = cellWidth + "px";
    cell.style.height = row.offsetHeight + "px";
});

	</script>
	
	<script src="../assets/components/library/bootstrap/js/bootstrap.min.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/breakpoints/breakpoints.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/animations.init.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/holder/holder.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/sidebar.main.init.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/sidebar.collapse.init.js?v=v1.2.0"></script>
<script src="../assets/components/helpers/themer/assets/plugins/cookie/jquery.cookie.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/core.init.js?v=v1.2.0"></script>	
</body>
</html>
 <?php }
else {
      header('Location:index.php');
    
 
}

?>  
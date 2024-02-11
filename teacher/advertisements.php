 <!DOCTYPE html>
<html class="app">
 <?php 
 session_start();
 if ( $_SESSION['valid'] != 2)  
       header('Location:../Pallms/signInUp.php');

 
require('../DB/DB.php');

     $db = new DB(); 
      
 $userid =  $_SESSION['id']; 
        

    if(isset($_POST['submit']) or  isset($_POST['submitDB'])){ 

    	$courseId=$_POST['courseId'];
    	echo $courseId;
 ?>

<!-- <![endif]-->
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

<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
<style type="text/css">
</head>
<style>
	/* ستايل للزر التبديلي */
	.toggle-button {
		/*background-color:primary;*/
		color: #fff;
		border: none;
		padding: 10px 20px;
		cursor: pointer;
	}

	/* ستايل لعرض التعليقات عند النقر */
	.comments {
	visibility: hidden;
	}
	.comments2 {
		visibility: hidden;
  }
  .comments-container{
	display: none;
  }
  .comments-container2{
	display: none;
  }

    .active3 {

    background-color: #cb4040;
    color: #fff;
        }
		body,strong,label,button
	{
		font-size: 18px;
		color: #333333;
        font-family: 'Poppins', sans-serif;
        letter-spacing: 0.5px;
        overflow-x: hidden;
        font-weight: 500 !important;
    }

	.content-heading 
    {
        margin: 0 auto;
        text-align: center;
        padding: 20px !important; /* Adjust the padding as needed */
    }
 
</style>

 <script> 
    $(function(){
      $("#includedMenu").load("menu.php");
 
    });

    </script> 	
</head>
<body>

	  <div id="includedMenu"></div>

<div id="content">
	<div class="layout-app">
 <div class="col-table">
	
	<h1 class="bg-white text-primary content-heading border-bottom text-center">Course Classroom </h1>
	<div class="bg-white text-center  innerAll border-bottom">
	

	<ul class="menubar">
		<li class="active">
			<form class="form-horizontal" action="advertisements.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		<button  type="submit"    name ="submit"  style = "   background: #ededed;
    color: #3b3b3b;
    font-weight: 600;
    padding: 3px;
     
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none; "   > Posts </button>
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
     "   > Assignments </button>
				</form> 

 

		</li>
		<li>
		 


			<form class="form-horizontal" action="cementEvaluation.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		<button  type="submit"    name ="submit"  style = " text-decoration: none;
		background-color: inherit;
    color: #878787;
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none;
     "   > Assignment Grading </button>
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
					
					<div class="col-md-11" style="margin-left: 75px;">
						<div class="col-separator">

							<div class="row row-app">
								
								<div class="col-md-12" style="border: 1px defult">
                                    
									<div class="col-separator col-separator-last box">


										<div class="widget widget-tabs widget-tabs-gray border-bottom-none">
										
							<div class="widget-body">
								  <form  class="form-horizontal" action="../DB/addadvertisementsDB.php" method="POST" enctype="multipart/form-data">  
									<div class="tab-content">
									<div class="tab-pane active" id="account-details" >
		  							<textarea id="contenttextarea" style="border-radius: 10px;" class="wysihtml5 form-control" name="content" rows="2" placeholder="Share New Post ..." required></textarea>
									<input type="text"  name="courseId" id="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
											 
										<!-- Form actions -->
										<div class="separator top">
    										<button type="submit" name="submit" class="btn btn-primary" style="display: inline-block; border-radius: 10px;">Post <i class="fa fa-fw fa-check"></i></button>
    										<input type="text" name="fileStatus" value="2" readonly id="fileStatus" hidden>
											<input type="file" name="file" id="file" style="display: none;" onchange="displayFileName()" />
											<button type="button" class="btn btn-info" onclick="document.getElementById('file').click(); displayFileName();" style="display: inline-block; border-radius: 10px;">Add file <i class="fa fa-plus"></i></button>
											<p id="file-name" style="display: inline-block; margin-left: 5px;"></p>
										</div>

										<!-- // Form actions END -->
										
									</div>
									<!-- // Tab content END -->
									
									
													</div>
												 </form> 
											</div>
										</div>
                                        <div class="innerAll border-bottom bg-gray" style="margin-top:2px;" >
                                

                                         </div>
										 <!--Adv1-->
<?php


$result =$db->getCourseadvertisements($courseId);

		foreach ($result as $item) 
 { ?>										 
 <div id="h<?php echo $item['id']; ?>">
<div class="innerAll">
   
	<div class=" innerAll email-content">
		<div class="pull-right btn-group btn-group-sm">
		<form action="edit_advertisements.php" method="POST" style="float: right;">
    <input type="text" name="dvertisementId" id="dvertisementIdId" value="<?php echo $item['id'] ?>" hidden readonly/>
    <input type="text" name="courseId" id="courseId" value="<?php echo $courseId; ?>" hidden readonly/>

	<button title="Edit post" type="submit" name="submit" style="border-radius: 50px; padding: 5px 10px; margin-left: 3px; width: 35px; height: 35px;" id="edit-icon" class="btn btn-success">
    	<i class="fa fa-pencil"></i>
	</button>
</form>

<a title="Delete Post" onclick="deleteadvertisement('h<?php echo $item['id']; ?>')" class="btn btn-primary" style="border-radius: 50px; padding: 5px 10px; margin-left: 3px; width: 35px; height: 35px;">
    <i class="fa fa-trash-o"></i>
</a>


			 
		</div>
		<div class="from">
			 <img  src="<?php echo $_SESSION['img']; ?>" style ="width: 50px; height:50px;object-fit:cover;" alt="" class="img-circle pull-left"> 
           		<div class="media-body">
					<a href="" class="strong" style="margin-left: 20px; pointer-events: none;">
						<?php echo $_SESSION['name'] ;?>
						 </a>
					<br><small><i style="margin-left: 20px;" class="fa fa-fw icon-calendar-2"></i><?php echo $item['DateAdded']   ; ?></small>
				</div>

		</div>
		
	</div>
</div>
								<div>

						<div id="u<?php echo $item['id']; ?>">
				<div class="innerAll">
					<div class="innerlr" id="editable-paragraph" >
						<p style="margin-left: 90px;" contenteditable="false" >
							<?php echo $item['content']   ; ?> 
						</p>
					</div>
				</div>	

				
				
			<div class="pull-right"  id="editable-file"  style="display:none;" >
				<input type="file" name="file" id="file<?php echo $item['id']; ?>" style="display: none;" onchange="displayFileName()" />
				<button type="button" class="btn btn-default"  onclick="document.getElementById('file'<?php echo $item['id']; ?>).click();"><i class="fa fa-plus"></i> Add file</button>
					 <p id="file-name"></p>
				 </div>
										</div>

						<?php 				
								if($item['file'] != "null") {  ?>		
						<div class="innerAll  border-top">
							<div class="media inline-block margin-none">
								<div class="innerLR">
									<i class="fa fa-paperclip pull-left fa-2x"></i>
									<div class="media-body">
										<div> 
								<a download target="_blank" href="<?php echo $item['file']   ; ?>" class="strong text-regular"> view file  </a>
										</div>
 									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							 

						</div>

						<?php } ?>
								</div>



							


							
								<div class="col-separator-h box"></div>
								<div>
								<div class="innerAll " >
									<button type="button" class="btn btn-info text-center"  id="b<?php echo $item['id']; ?>"
									 style="width:100%; border-radius: 10px; " onclick="toggleComments(this.id)">Comments</button>
			<div class="comments-container" id="comments-container<?php echo $item['id']; ?>">

			<div class="comments" id="c<?php echo $item['id']; ?>">


			 
				<?php 
$advertisementsId = $item['id']; 
$result2 =$db->getadvertisementsccomments($advertisementsId);

		foreach ($result2 as $item2) 

      
         { 

           ?>
				<div  class="innerAll border-bottom" id="h<?php echo $item2['id']; ?>">
					<span  class="media">
							<?php 

 $advertisementsccommentsuserId = $item2['userId'];  

if ($userid ===  $advertisementsccommentsuserId)
					{ 	?>
						 <div  class="pull-right btn-group btn-group-sm"   >
						<button title="Delete comment" style="border-radius: 50px; padding: 5px 10px; margin-left: 3px; width: 35px; height: 35px;"   onclick="deleteComment('h<?php echo $item2['id']; ?>')" class="btn btn-primary"><i  class="fa fa-trash-o"></i></button>
					</div>
					<?php } ?>
						<img style ="width: 50px; height:50px;object-fit:cover;"  src ="<?php echo $item2['imagePath']; ?>" alt="" class="thumb img-responsive img-circle pull-left" />
						
						<span  class="media-body">
							<h4 style="margin-left: 70px;"  class=" strong"><?php echo $item2['firstName']. " " .$item2['lastName']   ; ?><i class="icon-flag text-primary icon-2x"></i>  <br><small><i class="fa fa-fw icon-calendar-2"></i>
							<?php echo $item2['DateAdded']   ; ?>  </small></h4>
							<p  style="margin-left: 70px;">  <?php echo $item2['Comment']   ; ?>   </p>
						</span>
							 <div class="clearfix"></div>

					</span>
				</div>

<?php  } ?>
				
			</div>
			</div>
								
								  <br >
									<form class="form-horizontal" action="../DB/addadvertisementsComment.php" method="POST" enctype="multipart/form-data" >
									<input type="text"  name="advertisementsId" id="courseId" value="<?php echo $advertisementsId;  ?>" hidden readonly/> 
									<input type="text"  name="courseId" id="courseId" value="<?php echo $courseId;  ?>" hidden readonly/> 
									<br>
									<input type="text"  name="Comment"  class="pull-left" name="comment" style="width: 89%; height: 40px; border-radius: 10px; border:1px solid #C0C0C0;"  placeholder="Add Comment ..." required />
									<button  type="submit"    name ="submit"   class="btn btn-primary text-center pull-right" style="width:10%; height: 40px; border-radius: 10px;">Share</button>
									</form>	
								
							   </div>
							   </div>
							   <br>
							   <br>
							

							   <div class="col-separator-h"></div>
							   <div class="col-separator-h"></div>
							   <!--adv2-->

	</div>
	 

<?php } ?>





					 
									   <br>
									   <br>
									   
								
									   <div class="col-separator-h box"></div>
									   <div class="innerAll text-center">
										<p>End of posts</p>
									   </div>

									    </div>
										
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


	
       
  

		//file
		function displayFileName() {
          		const fileInput = document.getElementById('file');
				const fileNameDisplay = document.getElementById('file-name');

            	if (fileInput.files.length > 0) {
              	const fileName = fileInput.files[0].name;
             	 fileNameDisplay.textContent = 'Selected file: ' + fileName;
             	  document.getElementById('fileStatus').value='1';
				} else {
           		fileNameDisplay.textContent = '';
           		document.getElementById('fileStatus').value='2';
         		}
    	 }
		//comments
		function toggleComments(id) {

			var commentsid = "c"+id.substring(1);
		var	container  = "comments-container"+id.substring(1);
    var comments = document.getElementById(commentsid);
    var container = document.getElementById(container);

   

 

      if (comments.style.visibility === "hidden") {
        comments.style.visibility = "visible"; // إذا كانت مخفية، قم بإظهارها
        container.style.display = "block"; // إذا كانت مخفية، قم بإظهار المساحة
    } else {
        comments.style.visibility = "hidden"; // إذا كانت مرئية، قم بإخفائها
        container.style.display = "none"; // إذا كانت مرئية، قم بإخفاء المساحة
    }
    
}

 
   			function deleteadvertisement(advertisementId) {
 
     swal({
  title: "This action cannot be undone",
  text: "Are you sure you want to delete this post?",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "red",
  confirmButtonText: "Yes",
  closeOnConfirm: true
}, function(){
    var advertisementElement = document.getElementById(advertisementId);
     var advertisementIdv = advertisementId.substring(1);
     console.log (advertisementIdv);

      advertisementElement.parentNode.removeChild(advertisementElement);
 
   var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 
 
  
 
             }
        };
        xmlhttp.open("GET", "../DB/deleteadvertisement.php?advertisementIdv=" + advertisementIdv , true);
        xmlhttp.send();



     
     
    });
}



 
    

    function deleteComment(commentId) {

	
	 swal({
  title: "This action cannot be undone",
  text: "Are you sure you want to delete this comment?",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "red",
  confirmButtonText: "Yes",
  closeOnConfirm: true
}, function(){
    var commentElement = document.getElementById(commentId);
     var commentIdv = commentId.substring(1);
     console.log (commentIdv);

      commentElement.parentNode.removeChild(commentElement);
 
   var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 
 
 
 
             }
        };
        xmlhttp.open("GET", "../DB/deleteadvertisementsComment.php?commentIdv=" + commentIdv , true);
        xmlhttp.send();
 


     
        
    });
}


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
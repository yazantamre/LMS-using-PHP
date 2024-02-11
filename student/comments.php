<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 app"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 app"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 app"> <![endif]-->
<!--[if gt IE 8]> <html class="app"> <![endif]-->
<!--[if !IE]><!--><html class="app"><!-- <![endif]-->
<head>
<title>Academic Center</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	

	<link rel="stylesheet" href="../assets/css/admin/module.admin.page.email.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="../assets/images/icon.png"  sizes="32x32"  rel="icon">


	 <?php 
 session_start();
 if ($_SESSION['valid'] != 3)  
       header('Location:../Pallms/signInUp.php');

   
 
require('../DB/DB.php');

     $db = new DB(); 
      
      
     $userid =  $_SESSION['id']; 
        

 if(isset($_POST['submit']) or  isset($_POST['submitDB'])){ 

    	$courseId=$_POST['courseId'];
    	$assigmentId= $_POST['assigmentId'];
    


 ?>
	<script src="../assets/components/library/jquery/jquery.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/jquery/jquery-migrate.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/modernizr/modernizr.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/less-js/less.min.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.2.0"></script>	
<link rel="stylesheet" type="text/css" href="styles.css">
<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
<style type="text/css">
</head>
<style>
	  
.active3 {

    background-color: #cb4040;
    color: #fff;
        }
        body {
            font-family: Arial, sans-serif;
          
        }
        #comments {
            width: 80%;
            margin: 0 auto;
       
        }
        .comment {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin: 20px 0;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            background-color: white;
        }
        .user-info {
            display: flex;
            align-items: center;
        }
        .user-info img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .comment h3 {
            margin: 0;
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

  /* تمرير عمودي */
  .scroll-container {
            overflow-y: scroll; /* إضافة تمرير عمودي فقط عند الضرورة */
            max-height: 70vh; /* تعيين ارتفاع أقصى للعرض الذي يمكن عرضه */
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




	<div id="content"><div class="layout-app">
<div class="col-table">
	
	<h1 class="bg-white text-primary content-heading border-bottom text-center">Course page </h1>
	<div class="bg-white text-center  innerAll border-bottom">
	 



	<ul class="menubar">
				<li class="active">
			<form class="form-horizontal" action="advertisements.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		<button  type="submit"    name ="submit"  style = "  text-decoration: none;
		background-color: inherit;
    color: #878787;
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none; "   > posts </button>
				</form> 


</li>

	<li>



	<form class="form-horizontal" action="assayments.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		<button  type="submit"    name ="submit"  style = " background: #ededed;
    color: #3b3b3b;
    font-weight: 600;
    padding: 3px;
     
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none; 
     "    > Assignments </button>
				</form> 

 

		</li>


	<li>



	<form class="form-horizontal" action="teacher.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		<button  type="submit"    name ="submit"  style = "  text-decoration: none;
		background-color: inherit;
    color: #878787;
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none; "  > Teacher </button>
				</form> 

  

		</li>

 
	
		</ul>
	
        
</div>



						


	
<div class="scroll-container">
	

<div  style="text-align: center; "  class="comment">
  



														
															
															
   

        
        
  
	
    <div id="comments">
        <!-- تعليق 1 -->

        			<?php 

$result2 =$db->getCourseaassigmentcomments($assigmentId);

		foreach ($result2 as $item2) 

      
         { 

           ?>

        <div class="comment" id="h<?php echo $item2['id']; ?>">
          
            <div class="user-info">

               <img style="border-radius: 100%; width:50px;height: 50px;object-fit:cover;" src="<?php echo $item2['imagePath']; ?>" alt="" width="35" class="thumb img-responsive img-circle pull-left" />
                <p class=" strong"> <?php echo $item2['firstName'] . " " .$item2['lastName']   ; ?> <i class="icon-flag text-primary icon-2x"></i>  <br><small><i class="fa fa-fw icon-calendar-2"></i><?php echo $item2['DateAdded']   ; ?></small></p>

                                        <?php 

 $advertisementsccommentsuserId = $item2['userId'];  

if ($userid ===  $advertisementsccommentsuserId)
                    {   ?> 
          <div class="pull-left btn-group btn-group-sm"   >
            <br><br>    
                <button  onclick="deleteComment('h<?php echo $item2['id']; ?>')" class="btn btn-primary"><i class="fa fa-trash-o"></i></button>
           </div> 
<?php  } ?>
             </div>
            <br>
            <p >
            	
            	 <?php echo $item2['Comment']   ; ?>
            </p>
        </div>

        <!-- تعليق 2 -->
         
<?php  } ?>





        <!-- نموذج لكتابة تعليق جديد -->
       
    </div>
  
    <form  style="margin-left: 110px;" 

class="form-horizontal" action="../DB/addaAssigmentComment.php" method="POST" enctype="multipart/form-data"
    >
       
<input type="text"  name="assigmentId" id="" value="<?php echo $assigmentId;  ?>" hidden readonly/> 
	<input type="text"  name="courseId" id="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>

        <!-- ازالة حقل الاسم -->
        <input  id="comment-text" type="text" name="comment"   placeholder="Add Comment ..." style="width: 1000px; height: 40px; border-radius: 10px; border:1px solid #C0C0C0; margin-left:110px;"  placeholder="Add Comment ..." required />
 <br><br>
        <button class="btn btn-primary" type="submit"    name ="submit" style=" margin-right: 10px;border-radius: 10px;"  > share</button>
    </form>

	

</div>
</div>

<script>
	
    
 
        															
   																	
    // الأكواد جافاسكريبت لإضافة التعليقات
    const commentForm = document.getElementById("comment-form");
        const commentsContainer = document.getElementById("comments");

        commentForm.addEventListener("submit", function (e) {
            e.preventDefault();

            // احصل على قيمة التعليق من النموذج
            const commentText = document.getElementById("comment-text").value;

            // إنشاء عنصر التعليق
            const newComment = document.createElement("div");
            newComment.classList.add("comment");

            const userInfo = document.createElement("div");
            userInfo.classList.add("user-info");

            const userImage = document.createElement("img");
            userImage.src = "avatar3.jpg"; // يمكنك تغيير الصورة حسب الاحتياج
            userImage.alt = "المستخدم الجديد"; // اسم المستخدم الثابت

            const userName = document.createElement("h3");
            userName.textContent = "المستخدم الجديد"; // اسم المستخدم الثابت

            const commentContent = document.createElement("p");
            commentContent.textContent = commentText;

            // إضافة العناصر إلى التعليق
            userInfo.appendChild(userImage);
            userInfo.appendChild(userName);
            newComment.appendChild(userInfo);
            newComment.appendChild(commentContent);

            // إضافة التعليق إلى الصفحة
            commentsContainer.appendChild(newComment);

            // مسح محتوى النموذج
            document.getElementById("comment-text").value = "";
        });



   
        function deleteComment(commentId) {

   

     swal({
  title: "Are you sure?",
  text: "You will not be able to recover your comment !",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
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
        xmlhttp.open("GET", "../DB/deleteAssigmentComment.php?commentIdv=" + commentIdv , true);
        xmlhttp.send();



     
     
      
    });
}



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
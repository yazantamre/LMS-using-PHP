 <!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 app"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 app"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 app"> <![endif]-->
<!--[if gt IE 8]> <html class="app"> <![endif]-->
<!--[if !IE]><!--><html class="app"><!-- <![endif]-->
<head>
<?php 
session_start();
if ( $_SESSION['valid'] != 2)  
header('Location:../Pallms/signInUp.php');



require('../DB/DB.php');

$db = new DB(); 




if(isset($_POST['submit']) or  isset($_POST['submitDB'])){ 

$courseId=$_POST['courseId'];
$assigmentId=$_POST['assigmentId'];
$assigmentevId=$_POST['assigmentevId'];


 
?>
<title>course page</title>

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
</head>
  <style type="text/css">
    .active3 {

    background-color: #cb4040;
    color: #fff;
        }
 


/* تحديد أسلوب الإطار الافتراضي بدون تحديد */
.highlighted {
border: 2px solid rgb(161, 15, 15);
}
.aram{

text-align: left; /* يضبط النص إلى اليسار في الخلية */
padding-left: 50;
font-size: 25px;
}
label {
font-size: 18px;
margin-right: 10px; /* قيمة التباعد اليميني */
border: 1px solid #000;
}




.ase{
padding: 25px; /* تباعد داخلي للإطار */
display: inline-block; /* جعل الإطار مظللاً حول النص */
color:#3d3939; 
text-align: center;
font-size: 20px; 
border-radius: 5%;
border: 1px solid #cfcccc;
width: 300px; /* العرض الثابت للمربع */
height: 30px; /* الارتفاع الثابت للمربع */
background-color: #f5f0f0; /* لون خلفية المربع */






}
.editable {
border: 3px solid rgb(200, 26, 26);
}
.button-container {
text-align: center;

}
.aram{
border: 2px solid #6a6767;/* سمك الإطار ولونه */
padding: 20px; /* تباعد داخلي للإطار */


color:#c33222; 
border-radius: 10%; 
font-size: 20px; 
width: 102%;
height: 100%;
text-align: left;



}
table {
margin: 0 auto; /* هذا يساعد في توسيط الجدول في الصفحة */
}
.al{
border: 1px solid #6a6767;
padding: 10px;
height: 50px;
width: 217px;



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




<div id="content"><div class="layout-app">
<div class="col-table">

<h1 class="bg-white text-primary content-heading border-bottom text-center">Course page</h1>
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
     "     > advertisements </button>
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
     "    > Assigment </button>
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
    border: none; "   > Assigment Evaluation </button>
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
<div class="col-separator-h" ></div>

<div class="col-table-row" >

<div class="col-app col-unscrollable" style="margin-left: 15px;">

<div class="col-app">
<div class="row row-app email">

<div class="col-md-12">
<div class="col-separator">

<div class="row row-app">

<div class="col-md-12">

<div class="col-separator col-separator-last box">


<div class="widget widget-tabs widget-tabs-gray border-bottom-none">

 

	<div class="widget-body">
		<form class="form-horizontal">
			<div class="tab-content">

				<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
				<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
				    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
								
							


									






			
				<!-- Tab content -->
				<div class="tab-pane active" id="account-details">
				
					
					
					
					
					<!-- Form actions -->
<div class="separator top  "  >

						


<div class="innerAll  " style="margin-top: 5px; " >

<h4 class="innerAll border-bottom margin-bottom-none"><strong> Assigment Evaluation :</strong></h4>
    
</div>

	

<div class="innerAll">
<div class="list-group-item">
	<span class="media">
		<span class="media-body">
			
			<div class="innerAll  tickets">
<div class="row">
                	<?php

$assigmentmark = 0 ;


$no = 1;
	$result1 =$db->getaStudentassigmentEvaluation($assigmentevId);

		foreach ($result1 as $item) 
{

		  $result2 =$db->getassigmentmark($item['assigmentId']);
  		foreach ($result2 as $item2) 
{
	$assigmentmark =  $item2['mark'] ;
 }
 		 ?> 

	
    <div class="col-sm-10">
        <ul class="media-list">
            <li class="media">
                  <div class="pull-left">
                    <div class="center">
                        
                     </div>
                </div>
                <a class="pull-left" href="#">
                  
                  <img class="media-object" style="border-radius: 30px;" src="../assets/images/people/50/1.jpg" alt="..." >
                <div class="media-body">

					<h4 class="text-primary"><?php echo $item['firstName'].$item['lastName']; ?></h4>total mark : <?php echo $assigmentmark; ?>
					
					<h5 class="text-primary" id="markH"> Student  mark:  <?php echo $item['mark']; ?></h5>
                    <div class="clearfix"></div>
					<small><i class="icon-time-clock fw"></i> on: <?php echo $item['timeAdded']; ?></small> <small><i class="fa fa-fw icon-calendar-2"></i><?php echo $item['DateAdded']; ?></small>
					<div class="clearfix"></div>

					<div class="innerAll   " >
						<div class="media inline-block margin-none">
							<div class="innerLR bg-gray border-left">
								<i class="fa fa-paperclip pull-left fa-2x"></i>
								<div class="media-body">
									<div  ><a target="_blank" href="<?php echo $item['solutionFile']; ?>" class="strong text-regular" download>solution File </a></div>
									  
								</div>
							</div>
						</div>
						 
                 </div>
            </li>
        </ul>


    </div>
  <?php 
 
            } ?>
	<div class="pull-right">
		<a href="" class="btn btn-success btn-xs btn-show-textbox text-center" style="width: 149px; height: 30px; font-weight: bold; font-size:medium;"><i class="fa fa-check"></i> ADD MARK </a>


	</div>
    <div class="pull-right" id="solvedTextbox" style="display: none;">
        <input class="form-control" id="solvedText" style="width:149px ;" type="number"   placeholder="Add Mark ...">
		<div class="pull-right">
        <button id="saveButton"  onclick="saveChanges()"  class="btn btn-success"><i class="fa fa-check"></i>Save</button>
        <button id="closeButton" class="btn btn-danger "><i class="fa fa-times"></i>Close</button>
		</div>
    </div>







</div> 
														
														
		</span>
		
	</span>
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
	var btnShowTextbox = document.querySelector(".btn-show-textbox");
	var solvedTextbox = document.getElementById("solvedTextbox");
	var solvedText = document.getElementById("solvedText");
	var saveButton = document.getElementById("saveButton");
	var closeButton = document.getElementById("closeButton");

	btnShowTextbox.addEventListener("click", function (e) {
		e.preventDefault();
		solvedTextbox.style.display = "block";
	});

	solvedText.addEventListener("input", function () {
		if (solvedText.value.trim() !== "") {
			saveButton.style.display = "inline-block";
			closeButton.style.display = "inline-block";
		} else {
			saveButton.style.display = "none";
			closeButton.style.display = "none";
		}
	});

 
	closeButton.addEventListener("click", function () {
		solvedText.value = ""; // إفراغ محتوى مربع النص
		saveButton.style.display = "none";
		closeButton.style.display = "none";
		solvedTextbox.style.display = "none";
		event.preventDefault();
	});
});

 
  function saveChanges( ) {
       
  var  txt="Are you sure if you want to  update Course aassigment Mark?";

      var cMark= solvedText.value;
       var assigmentmark= "<?php echo $assigmentmark; ?>";
        var assigmentId=0;
       var studentId =0;
       var  assigmentevId="<?php echo $assigmentevId; ?>";
      cMark= parseInt(cMark);
         assigmentmark= parseInt(assigmentmark);
      

 if(cMark <=assigmentmark )

{
 	  swal({
  title: "Are you sure?",
  text: txt,
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, Update  mark!",
  closeOnConfirm: true
},
function(){
 document.getElementById("markH").innerHTML ="Student Mark="+cMark;


        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                

             }
        };
    xmlhttp.open("GET", "../DB/updateCourseaassigmentMark.php?assigmentId=" + assigmentId +" && cMark=" + cMark +" && studentId=" + studentId +" && assigmentevId=" + assigmentevId , true);
        xmlhttp.send();
});
        } 
  else
  {

  	  sweetAlert('full mark :'+assigmentmark, "Please enter a mark equal to or less than the full mark", "info");
   }
    
solvedText.value=null ;
   	saveButton.style.display = "none";
		closeButton.style.display = "none";
		solvedTextbox.style.display = "none";

  event.preventDefault();

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
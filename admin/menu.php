
 
    <?php
       
 session_start();
  ?>
<head>
  <title></title>
  <style type="text/css"> 
  	.sidebar>.sidebarMenuWrapper {
    overflow-y: auto; }
	</style> </head>
 

<div class="navbar navbar-fixed-top navbar-primary main" role="navigation">
		<div class="navbar-header pull-left">
			<div  class="navbar-brand">

				<a href="index.php" class="appbrand innerL">&nbsp&nbsp&nbsp ACADEMIC CENTER</a>
			</div>
		</div>
		<ul class="nav navbar-nav navbar-right hidden-xs">
			<li><a title="Home screen" href="../Pallms/index.php" class="menu-icon"><i style="color: #fff" class="fa fa-home"></i></a></li>
			<li><a title="Sign out" href="../DB/logout.php" class="menu-icon"><i style="color: #fff" class="fa fa-sign-out"></i></a></li>
		</ul>
		</div>
		

		<div id="menu " class="hidden-print hidden-xs">
			<div class="sidebar sidebar-inverse" >
				<div class="user-profile media innerAll" >
					<img style="border-radius: 100%; width:50px;height: 50px; object-fit:cover" class="pull-left" src="<?php echo $_SESSION['img']; ?>">
					<div style="margin-top: 4%;" class="media-body">
						<h4 style="color: white;"><?php echo $_SESSION['name'] ;?> </h4>	
					</div>
					
				</div>
				<div class="sidebarMenuWrapper">
					<ul class="list-unstyled">
						<li class="active1"><a href="index.php"><i class=" icon-projector-screen-line"></i><span>Dashboard</span></a></li>
						<li class="active2"><a href="myAccount.php"><i class=" icon-user-1"></i><span>My account</span></a></li>
						<li class="active3"><a href="addPost.php"><i class=" icon-comment-add"></i><span>Add post</span></a></li>
						<li class="active4"><a href="addCourse.php"><i class=" icon-document-add"></i><span>Add course</span></a></li>
					 
						<li class="active6"><a href="addTeacher.php"><i class=" icon-add-symbol"></i><span>Add teacher</span></a></li>
						<li class="active11"><a href="posts.php"><i class=" glyphicon glyphicon-cog"></i><span>Posts management</span></a></li>
						<li class="active7"><a href="teachers.php"><i class=" glyphicon glyphicon-cog"></i><span>Teachers management</span></a></li>
					 	<li class="active8"><a href="students.php"><i class=" glyphicon glyphicon-cog"></i><span>Students management</span></a></li>
						<li class="active9"><a href="courses.php"><i class=" glyphicon glyphicon-cog"></i><span>Courses management</span></a></li>
						<li class="active10"><a href="enrollment.php"><i class=" glyphicon glyphicon-cog"></i><span>Enrollment applications</span></a></li>
					</ul>
				</div>
			</div>
			</div>

 
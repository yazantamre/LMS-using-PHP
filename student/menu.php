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
				<div class="navbar-brand">
					<div class="pull-left">
						<a href="" class="toggle-button toggle-sidebar btn-navbar"></a>
					</div>
					<a href="index.php" class="appbrand innerL text-center">Academic Center</a>
				</div>
			</div>
		 
			<ul class="nav navbar-nav navbar-right hidden-xs">
				<li><a title="Home screen" href="../Pallms/" class="menu-icon"><i style="color: #fff" class="fa fa-home"></i></a></li>
				<li><a title="Sign out" href="../DB/logout.php" class="menu-icon"><i style="color: #fff" class="fa fa-sign-out"></i></a></li>
			</ul>
</div>

	<div id="menu" class="hidden-print hidden-xs">
	<div class="sidebar sidebar-inverse">
		<div class="user-profile media innerAll">
			<img style="border-radius: 100%; width:50px;height: 50px;object-fit:cover;" class="pull-left" src="<?php echo $_SESSION['img']; ?>">
					<div style="margin-top: 4%;" class="media-body">
						<h4 style="color: white;"><?php echo $_SESSION['name'] ;?> </h4>	
					</div>
			
		</div> 
		<div class="sidebarMenuWrapper">
			<ul class="list-unstyled">
				<li class="active1" ><a href="index.php"><i class=" icon-projector-screen-line"></i><span>Dashboard</span></a></li>

				<li  class="active2" ><a href="profile.php"><i class="icon-user-1"></i><span> My Profile</span></a></li>
				<li  class="active3"><a href="Courses.php"><i class="glyphicon glyphicon-book"></i><span>Courses </span></a></li>
				<li  class="active4" ><a href="old courses.php"><i class="glyphicon glyphicon-file"></i><span>My Old Courses</span></a></li>
            </ul>
		</div>
	</div>
</div>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title><?= $section;?> || <?= $title;?> :: Administrator</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		


		<!-- page specific plugin styles -->
		<script src="<?php echo base_url(); ?>assets/admin_assets/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin_assets/js/bootstrap.min.js"></script>

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin_assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?php echo base_url(); ?>assets/admin_assets/js/ace-extra.min.js"></script>


		<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?php echo base_url(); ?>assets/admin_assets/js/html5shiv.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin_assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="<?php echo base_url(); ?>" target="_blank" class="navbar-brand">
						<small>
							<i class="fa fa-home"></i>
							OMZ Services Administrator Dashboard
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<!-----notification-->
						<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">0</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									1
								</li>

								<li class="dropdown-content">
									
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>
<!-----notification-->
						<li class="green dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">0</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									5 Messages
								</li>
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									5 Messages
								</li>

								
							</ul>
						</li>
<!-----notification--><!-----notification-->
						<!-- <li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url(); ?>assets/admin_assets/images/avatars/logo.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Admin
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Change Password
									</a>
								</li>

								

								<li class="divider"></li>

								
							</ul>
						</li> -->

						<li>
									<a href="<?php echo base_url(); ?>Page/admin_logout	">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="">
						<a href="<?php echo base_url(); ?>admin/dashboard">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					

					<!-- ------ Dropdown two---- -->
				
					</li>
						


					<li class="arrow">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>

							<span class="menu-text">
								Members
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

							

							<li class="">
								<a href="<?php echo base_url(); ?>admin/add_service">
									<i class="menu-icon fa fa-caret-right"></i>
									Create Profile
								</a>

								<b class="arrow"></b>
							</li>


							<li class="">
								<a href="<?php echo base_url(); ?>admin/staff_table">
									<i class="menu-icon fa fa-caret-right"></i>
									Staff Profile
								</a>

								<b class="arrow"></b>
							</li>

							
						</ul>
					</li>




					<!----Deop another-->
					<li class="arrow">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil"></i>

							<span class="menu-text">
								 Blog
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo base_url(); ?>admin/add_news">
									<i class="menu-icon fa fa-caret-right"></i>
									Add News
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url(); ?>admin/blog_table">
									<i class="menu-icon fa fa-caret-right"></i>
									 Blog Table
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<!-- --------Dropdown Three--- -->
					<li class="arrow">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-comment"></i>

							<span class="menu-text">
								 Report
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
						

							<li class="">
								<a href="<?php echo base_url(); ?>admin/report">
									<i class="menu-icon fa fa-caret-right"></i>
									Contact Report
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url(); ?>admin/request">
									<i class="menu-icon fa fa-caret-right"></i>
									Services Request
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo base_url(); ?>admin/applicant">
									<i class="menu-icon fa fa-caret-right"></i>
									Applicant Form
								</a>

								<b class="arrow"></b>
							</li>

							
								

						
						</ul>
					</li>
					<!-- -------------Dropdown Four---- -->


					



					<li class="arrow">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-cogs"></i>

							<span class="menu-text">
								General Settings
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

							<li class="">
								<a href="<?php echo base_url(); ?>admin/settings">
									<i class="menu-icon fa fa-caret-right"></i>
									System Info
								</a>

								<b class="arrow"></b>
							</li>

							


							
							
						</ul>
					</li>

					<!-- -------dropdown three---------------->
					
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="<?php echo base_url(); ?>admin">Dashboard</a>
							</li>

							<li>
								<a href="#"><?=$section; ?></a>
							</li>
							<li class="active"><?=$page ?></li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
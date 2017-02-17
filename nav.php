<?php include('appfunctions.php'); ?>

<!DOCTYPE html> <html lang="en"> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1" /> 
	<meta name="description" content="Neon Admin Panel" /> 
	<meta name="author" content="Laborator.co" /> 
	<link rel="icon" href="assets/images/favicon.ico"> 
	<title>lalala | Dashboard</title> 
	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1"> 
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css" id="style-resource-2"> 
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" id="style-resource-3"> 
	<link rel="stylesheet" href="assets/css/bootstrap.css" id="style-resource-4"> 
	<link rel="stylesheet" href="assets/css/neon-core.css" id="style-resource-5"> 
	<link rel="stylesheet" href="assets/css/neon-theme.css" id="style-resource-6"> 
	<link rel="stylesheet" href="assets/css/neon-forms.css" id="style-resource-7"> 
	<link rel="stylesheet" href="assets/css/custom.css" id="style-resource-8"> 
	<script src="assets/js/jquery-1.11.3.min.js"></script>  
</head> 
<body class="page-body page-fade" data-url="http://demo.neontheme.com"> 
	<div class="page-container">
		<!-- menu-->  
		<div class="sidebar-menu"> 
			<div class="sidebar-menu-inner"> 
				<header class="logo-env"> 
					<!-- logo --> 
					<div class="logo"> 
						<a href="index.php"> 
							<img src="assets/images/logo%402x.png" width="120" alt="" /> 
						</a> 
					</div> 
					<!-- logo collapse icon --> 
					<div class="sidebar-collapse"> 
						<a href="#" class="sidebar-collapse-icon">
							<!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition --> 
							<i class="entypo-menu"></i> 
						</a> 
					</div> 
					<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) --> 
					<div class="sidebar-mobile-menu visible-xs"> 
						<a href="#" class="with-animation">
							<!-- add class "with-animation" to support animation --> 
							<i class="entypo-menu"></i> 
						</a> 
					</div> 
				</header> 
				<ul id="main-menu" class="main-menu"> 
					<li> 
						<a href="index.php">
							<i class="entypo-gauge"></i>
							<span class="title">Dashboard</span>
						</a>  
					</li>

					<li> 
						<a href="transactions.php">
							<i class="entypo-credit-card"></i>
							<span class="title">Transactions</span>
							<span class="badge badge-success badge-roundless">v2.0</span>
						</a> 
					</li>


					<li> 
						<a href="index.php">
							<i class="entypo-user"></i>
							<span class="title">My Profile</span>
						</a> 
					</li> 

					<li> 
						<a href="Dashboard/refferal/index.html">
							<i class="entypo-suitcase"></i>
							<span class="title">Refferal Wallet</span>
						</a> 
					</li>

					<li> 
						<a href="Dashboard/Testimonies/index.html">
							<i class="entypo-users"></i>
							<span class="title">Testimonies</span>
						</a> 
					</li>
					<li class="has-sub"> 
						<a href="mailbox/main/index.html">
							<i class="entypo-mail"></i>
							<span class="title">Mailbox</span>
							<span class="badge badge-secondary">8</span>
						</a> 
						<ul> 
							<li> 
								<a href="mailbox/main/index.html">
									<i class="entypo-inbox"></i>
									<span class="title">Inbox</span>
								</a> 
							</li> 
							<li> 
								<a href="mailbox/compose/index.html">
									<i class="entypo-pencil"></i>
									<span class="title">Compose Message</span>
								</a> 
							</li> 
							<li> 
								<a href="mailbox/message/index.html">
									<i class="entypo-attach"></i>
									<span class="title">View Message</span>
								</a> 
							</li> 
						</ul> 
					</li> 
				</ul> 
			</div> 
		</div> 
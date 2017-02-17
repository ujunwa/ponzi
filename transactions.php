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
						<a href="dashboard/main/index.html"> 
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
						<a href="index.html">
							<i class="entypo-gauge"></i>
							<span class="title">Dashboard</span>
						</a>  
					</li>

					<li> 
						<a href="transactions.html">
							<i class="entypo-credit-card"></i>
							<span class="title">Transactions</span>
							<span class="badge badge-success badge-roundless">v2.0</span>
						</a> 
					</li>


					<li> 
						<a href="dashboard/profile/index.html">
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

		<div class="main-content"> 
			<div class="row"> 
				<!-- Profile Info and Notifications --> 
				<div class="col-md-6 col-sm-4">
				</div>
				<!-- Raw Links -->

 				<div class="col-md-6 col-sm-4 clearfix hidden-xs"> 
 					<ul class="list-inline links-list pull-right">  
 						<li class="sep"></li> 
 						<li> 
 							<a href="extra/login/index.html">Log Out <i class="entypo-logout right"></i> </a> 
 						</li> 
 					</ul> 
 				</div> 
 			</div> <hr />  
 			<ol class="breadcrumb bc-3" > 
								<li> 
									<a href="index.html"><i class="fa-home"></i>Dashboard</a> 
								</li> 
								<li> 
									<a href="transactions.html">Transactions</a> 
								</li>  
							</ol> 
							<h1>Transactions</h1> 
							<em>Below is a compilation of all your transactions on lalalala</em>

			
			<hr/>
			<!--transactions-->

			<div class="row">
				<div class="col-sm-8"> 
					<div class="panel panel-primary"> 
						<!--div class="panel-heading"> 
							<div class="panel-title"><h3>Inward Peer Details</h3></div> 
							<div class="panel-options"> 
								<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg">
									<i class="entypo-cog"></i>
								</a> 
								<a href="#" data-rel="collapse">
									<i class="entypo-down-open"></i>
								</a> 
								<a href="#" data-rel="reload">
									<i class="entypo-arrows-ccw"></i>
								</a> 
								<a href="#" data-rel="close">
									<i class="entypo-cancel"></i>
								</a> 
							</div> 
						</div--> 
						<table class="table table-bordered table-responsive"> 
							<thead> 
								<tr> 
									<th>#</th> 
									<th>Name</th> 
									<th>Amount(₦)</th> 
									<th>Direction</th> 
								</tr> 
							</thead> 
							<tbody> 
								<tr> 
									<td>1</td> 
									<td>Art Ramadani</td> 
									<td>10,000</td> 
									<td>in</td> 
								</tr> 
								<tr> 
									<td>2</td> 
									<td>Art Ramadani</td> 
									<td>10,000</td> 
									<td>out</td> 
								</tr>
							</tbody> 
						</table> 
					</div> 
				</div> 
			</div> 
			<br /> 

		<!-- Footer --> 
		<footer class="main"> 
			<div class="pull-right"> 
				<a href="http://themeforest.net/item/neon-bootstrap-admin-theme/6434477?ref=Laborator" target="_blank">
					<strong>Purchase this theme for $24</strong>
				</a>
			</div>
				&copy; 2017 <strong>lalalala</strong> Make your money work the way it should</footer> 
	</div>


		<!-- Imported styles on this page --> 
		<link rel="stylesheet" href="assets/js/jvectormap/jquery-jvectormap-1.2.2.css" id="style-resource-1"> 
		<link rel="stylesheet" href="assets/js/rickshaw/rickshaw.min.css" id="style-resource-2"> 
		<script src="assets/js/gsap/TweenMax.min.js" id="script-resource-1"></script> 
		<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script> 
		<script src="assets/js/bootstrap.js" id="script-resource-3"></script> 
		<script src="assets/js/joinable.js" id="script-resource-4"></script> 
		<script src="assets/js/resizeable.js" id="script-resource-5"></script> 
		<script src="assets/js/neon-api.js" id="script-resource-6"></script> 
		<script src="assets/js/cookies.min.js" id="script-resource-7"></script> 
		<script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js" id="script-resource-8"></script> 
		<script src="assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js" id="script-resource-9"></script> 
		<script src="assets/js/jquery.sparkline.min.js" id="script-resource-10"></script> 
		<script src="assets/js/rickshaw/vendor/d3.v3.js" id="script-resource-11"></script> 
		<script src="assets/js/rickshaw/rickshaw.min.js" id="script-resource-12"></script> 
		<script src="assets/js/raphael-min.js" id="script-resource-13"></script> 
		<script src="assets/js/morris.min.js" id="script-resource-14"></script> 
		<script src="assets/js/toastr.js" id="script-resource-15"></script> 
		<script src="assets/js/neon-chat.js" id="script-resource-16"></script> 
		<!-- JavaScripts initializations and stuff --> 
		<script src="assets/js/neon-custom.js" id="script-resource-17"></script> 
		<!-- Demo Settings --> 
		<script src="assets/js/neon-demo.js" id="script-resource-18"></script> 
		<script src="assets/js/neon-skins.js" id="script-resource-19"></script> 
		<script type="text/javascript">
		 var _gaq = _gaq || [];
		 _gaq.push(['_setAccount', 'UA-28991003-7']);
		 _gaq.push(['_setDomainName', 'demo.neontheme.com']);
		 _gaq.push(['_trackPageview']);
		 (function() {
		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		 })();
		</script> 



		<!-- Imported styles on this page --> 
		<link rel="stylesheet" href="assets/js/dropzone/dropzone.css" id="style-resource-1">  
		<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script> 
		<script src="assets/js/bootstrap.js" id="script-resource-3"></script> 
		<script src="assets/js/joinable.js" id="script-resource-4"></script> 
		<script src="assets/js/resizeable.js" id="script-resource-5"></script> 
		<script src="assets/js/neon-api.js" id="script-resource-6"></script> 
		<script src="assets/js/cookies.min.js" id="script-resource-7"></script> 
		<script src="assets/js/fileinput.js" id="script-resource-8"></script> 
		<script src="assets/js/dropzone/dropzone.js" id="script-resource-9"></script> 

		<!--timer-->
	<script>
			// Set the date we're counting down to
		var countDownDate = new Date("Jan 5, 2018 15:37:25").getTime();

			// Update the count down every 1 second
		var x = setInterval(function() {

	    // Get todays date and time
	    var now = new Date().getTime();
	    
	    // Find the distance between now an the count down date
	    var distance = countDownDate - now;
	    
	    // Time calculations for days, hours, minutes and seconds
	    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	    
	    // Output the result in an element with id="demo"
	    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
	    + minutes + "m " + seconds + "s ";
	    
	    // If the count down is over, write some text 
	    if (distance < 0) {
	        clearInterval(x);
	        document.getElementById("demo").innerHTML = "EXPIRED";
	    }
		}, 1000);
	</script>
</body> 
		<!-- very stressful dashboard -->
</html>
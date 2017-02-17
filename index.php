<?php include('nav.php'); ?>
<?php include('top-nav.php'); ?>

	<!--plans-->
<?php echo $mcg; ?>
<div class="row"> 
	<div class="col-sm-3 col-xs-6"> 
		<div class="tile-stats tile-red"> 
			<div class="icon">
				<i class="entypo-users"></i>
			</div> 
			<div class="num" data-start="0" data-end="83" data-postfix="" data-duration="1500" data-delay="0">0</div> 
			<h4 class="white">Basic (₦10,000)</h4><hr/> 
			<!--p><h4>Donate!!</h4></p-->
		<form method="Post" action="">
			<button type="submit" class="btn btn-primary">DONATE</button> 
			<input type="hidden" name="INSERT" value="1">
			<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">

		</form>

		</div> 
	</div> 

	<div class="col-sm-3 col-xs-6"> 
		<div class="tile-stats tile-green"> 
			<div class="icon">
				<i class="entypo-users"></i>
			</div> 
			<div class="num" data-start="0" data-end="135" data-postfix="" data-duration="1500" data-delay="600">0</div> 
			<h4 class="white">Standard (₦20,000)</h4> <hr/>
			
		<form method="Post" action="">
			<button type="submit" class="btn btn-primary">DONATE</button> 
			<input type="hidden" name="INSERT" value="2">
			<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">

		</form>
		</div> 
	</div>

	<div class="clear visible-xs"></div> 
	<div class="col-sm-3 col-xs-6"> 
		<div class="tile-stats tile-aqua"> 
			<div class="icon">
				<i class="entypo-users"></i>
			</div> 
			<div class="num" data-start="0" data-end="23" data-postfix="" data-duration="1500" data-delay="1200">0</div> 
			<h4 class="white">Advanced (₦50,000)</h4> <hr/>
			
		<form method="Post" action="">
			<button type="submit" class="btn btn-primary">DONATE</button> 
			<input type="hidden" name="INSERT" value="3">
			<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">

		</form>
		</div> 
	</div>

	<div class="col-sm-3 col-xs-6"> 
		<div class="tile-stats tile-blue"> 
			<div class="icon">
				<i class="entypo-users"></i>
			</div> 
			<div class="num" data-start="0" data-end="52" data-postfix="" data-duration="1500" data-delay="1800">0</div> 
			<h4 class="white">Pro (₦100,000)</h4> <hr/>
			
		<form method="Post" action="">
			<button type="submit" class="btn btn-primary">DONATE</button> 
			<input type="hidden" name="INSERT" value="4">
			<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">

		</form>
		</div> 
	</div> 
</div> 

<hr /> 
	

			<div class="row"> 
				<div class="col-sm-4"> 
					<div class="panel panel-primary">
						<div class="panel-heading"> 
							<div class="panel-title"><h3>Outward Peer Details</h3></div>
						</div>
						<table class="table table-bordered table-responsive"> 
							<thead> 
								<tr> 
									<th class="padding-bottom-none text-center"><b>Kindly Donate the sum before your time runs out </b><br /> <br />
									<!--Timer-->
									<h3><p id="demo"> </p></h3>
										<span class="monthly-sales"></span> 
									</th> 
								</tr> 
							</thead> 
							<tbody>
								<tr> 
									<td class="panel-heading"> 
										<h4><b>Amount &ndash;</b> 10,000</h4>
									</td> 
								</tr> 
								<tr> 
									<td class="panel-heading"> 
										<h4><b>Name &ndash;</b> Jones benson</h4>
									</td> 
								</tr> 
								<tr> 
									<td class="panel-heading"> 
										<h4><b>Bank Name &ndash;</b> GTB</h4>
									</td> 
								</tr>
								<tr> 
									<td class="panel-heading"> 
										<h4><b>Account Holder &ndash;</b> Jones Ello </h4>
									</td> 
								</tr>
								<tr> 
									<td class="panel-heading"> 
										<h4><b>Account Number &ndash;</b> 0182739271 </h4>
									</td> 
								</tr>
								<tr> 
									<td class="panel-heading"> 
										<h4><b>Payme.ng &ndash;</b> <a href="www.payme.ng/johndoe" target="blank">www.payme.ng/johndoe</a> </h4>
									</td> 
								</tr>
							</tbody> 
						</table> 
					</div> 
				</div>

				<div class="col-sm-8">
						<form role="form" class="form-horizontal form-groups-bordered"> 
								<div class="form-group"> 
									<!--label class="col-sm-3 control-label">Image Upload</label--> 
									<div class="col-sm-4 col-xs-12"> 
										<div class="fileinput fileinput-new" data-provides="fileinput"> 
											<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput"> 
												<img src="http://placehold.it/200x150" alt="..."> 
											</div> 
											<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div> 
											<div> 
												<span class="btn btn-white btn-file"> 
													<span class="fileinput-new">Select image</span> 
													<span class="fileinput-exists">Change</span> 
													<input type="file" name="..." accept="image/*"> 
												</span> 
												<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> 
											</div> 
										</div> 
									</div>
									
									<div class="col-sm-4 col-md-6 col-xs-12">
										<div class="form-group">
											<label class="col-sm-4 col-xs-12 col-md-6 control-label">Payment Method:</label> 
											<div > 
												<select class="form-control col-sm-4 col-xs-8 col-md-4"> 
													<option>Payme.ng</option> 
													<option>Bank Teller</option> 
													<option>Mobile Trasfer</option> 
													<option>Internet banking</option> 
													<option>Others</option> 
												</select> 
												<br/>	
											</div> 
											<div>
											<button type="button" class="btn btn-primary">confirm</button>
											</div>
										</div>
									</div>
								</div> 
						</form> 
				</div>
			</div>
					<!--confirmation form-->
				<!--div class="col-sm-8 col-xs-12 col-md-8" >

					<div class="panel panel-primary" data-collapsed="0"> 
						<div class="panel-heading"> 
							<div class="panel-title"><h3>Confirmation Panel</h3></div> 
						</div> 
						<div class="panel-body"> 
							<form role="form" class="form-horizontal form-groups-bordered"> 
								<div class="form-group"> 
									<!--label class="col-sm-3 control-label">Image Upload</label--> 
									<!--div class="col-sm-4 col-xs-12"> 
										<div class="fileinput fileinput-new" data-provides="fileinput"> 
											<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput"> 
												<img src="http://placehold.it/200x150" alt="..."> 
											</div> 
											<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div> 
											<div> 
												<span class="btn btn-white btn-file"> 
													<span class="fileinput-new">Select image</span> 
													<span class="fileinput-exists">Change</span> 
													<input type="file" name="..." accept="image/*"> 
												</span> 
												<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a> 
											</div> 
										</div> 
									</div>
									
									<div class="col-sm-4 col-md-4 col-xs-12">
										<div class="form-group">
											<label class="col-sm-4 col-xs-12 col-md-4 control-label">Payment Method</label> 
											<div > 
												<select class="form-control col-sm-4 col-xs-8 col-md-2"> 
													<option>Payme.ng</option> 
													<option>Bank Teller</option> 
													<option>Mobile Trasfer</option> 
													<option>Internet banking</option> 
													<option>Others</option> 
												</select> 
												<br/>	
											</div> 
											<button type="button" class="btn btn-primary">confirm</button>
										</div>
									</div>
								</div> 
							</form> 
						</div> 
					</div>
				</div> 
			</div-->


			<hr/>
			<!--inward funds-->

			<div class="row">
				<div class="col-sm-8"> 
					<div class="panel panel-primary"> 
						<div class="panel-heading"> 
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
						</div> 
						<table class="table table-bordered table-responsive"> 
							<thead> 
								<tr> 
									<th>#</th> 
									<th>Name</th> 
									<th>Phone Number</th> 
									<th>Amount(₦)</th> 
								</tr> 
							</thead> 
							<tbody> 
								<tr> 
									<td>1</td> 
									<td>Art Ramadani</td> 
									<td>070608947382</td> 
									<td>10,000</td> 
								</tr> 
								<tr> 
									<td>2</td> 
									<td>Art Ramadani</td> 
									<td>070608947382</td> 
									<td>10,000</td> 
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
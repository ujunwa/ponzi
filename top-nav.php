		<div class="main-content"> 
			<div class="row"> 
				<!-- Profile Info and Notifications --> 
				<div class="col-md-6 col-sm-8 clearfix"> 
					<ul class="user-info pull-left pull-none-xsm"> 
						<!-- Profile Info --> 
						<li class="profile-info dropdown">
							<!-- add class "pull-right" if you want to place this from right --> 
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
								<img src="assets/images/thumb-1%402x.png" alt="" class="img-circle" width="44" /><?php echo $_SESSION["name"]; ?>
							</a> 
							<ul class="dropdown-menu"> 
								<!-- Reverse Caret --> 
								<li class="caret"></li> 
								<!-- Profile sub-links --> 
								<li> 
									<a href="extra/timeline/index.html"> 
										<i class="entypo-user"></i>Edit Profile
									</a> 
								</li> 
								<li> 
									<a href="mailbox/main/index.html"> 
										<i class="entypo-mail"></i>Inbox
									</a> 
								</li> 
								 
								<li> 
									<a href="#"> 
										<i class="entypo-clipboard"></i>Tasks
									</a> 
								</li> 
							</ul> 
						</li> 
					</ul> 
					<ul class="user-info pull-left pull-right-xs pull-none-xsm"> 
						<!-- Message Notifications --> 
						<li class="notifications dropdown"> 
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> 
								<i class="entypo-mail"></i> 
									<span class="badge badge-secondary">10</span> 
							</a> 
							<ul class="dropdown-menu">  
								<li> 
									<ul class="dropdown-menu-list scroller"> 
										<li class="active"> 
											<a href="#"> 
												<span class="image pull-right"> 
													<img src="assets/images/thumb-2%402x.png" width="44" alt="" class="img-circle" /> 
												</span> 
												<span class="line"> 
													<strong>Salma Nyberg</strong>- 2 days ago
												</span> 
												<span class="line desc small">Oh he decisively impression attachment friendship so if everything. </span> 
											</a> 
										</li> 
										<li> 
											<a href="#"> 
												<span class="image pull-right"> 
													<img src="assets/images/thumb-3%402x.png" width="44" alt="" class="img-circle" /> 
												</span> 
												<span class="line">Hayden Cartwright- a week ago</span> 
												<span class="line desc small">Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.</span>
											</a> 
										</li>  
									</ul> 
								</li>
								<li class="external"> 
								 	<a href="mailbox/main/index.html">All Messages</a> 
								</li>
							</ul> 
						</li> 



						<!-- Task Notifications --> 
						<li class="notifications dropdown"> 
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> 
								<i class="entypo-list"></i> 
								<span class="badge badge-warning">1</span> 
							</a> 
								<ul class="dropdown-menu"> 
									<!-- notifications--> 
									<li class="top"> 
										<p>Notifications</p> 
									</li> 
									<li> 
										<ul class="dropdown-menu-list scroller"> 
											<li> 
												<a href="#"> 
													<span class="task"> 
													<span class="desc">You have been paired to Donate</span></span>
												</a> 
											</li> 

											<li> 
												<a href="#"> 
													<span class="task"> 
													<span class="desc">You have been paired to recieve a Donation</span></span>
												</a> 
											</li> 
										</ul> 

									</li>
								</ul> 
						</li> 
					</ul> 
				</div> 
				<!-- Raw Links -->

 				<div class="col-md-6 col-sm-4 clearfix hidden-xs"> 
 					<ul class="list-inline links-list pull-right">  
 						<li class="sep"></li> 
 						<li> 
 							<a href="logout.php">Log Out <i class="entypo-logout right"></i> </a> 
 						</li> 
 					</ul> 
 				</div> 
 			</div> <hr />  


 		<script type="text/javascript">
				jQuery(document).ready(function($)
				{
				// Sample Toastr Notification
				setTimeout(function()
				{
				var opts = {
				"closeButton": true,
				"debug": false,
				"positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",
				"toastClass": "black",
				"onclick": null,
				"showDuration": "300",
				"hideDuration": "1000",
				"timeOut": "5000",
				"extendedTimeOut": "1000",
				"showEasing": "swing",
				"hideEasing": "linear",
				"showMethod": "fadeIn",
				"hideMethod": "fadeOut"
				};
				toastr.success("You have been awarded with 1 year free subscription. Enjoy it!", "Account Subcription Updated", opts);
				}, 3000);
		</script>
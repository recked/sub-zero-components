<?php 
$page_title = "Sub Zero Components - Admin";
include ('is/header.php'); 
include ('is/dash.php'); 
?>

		<!-- stuff -->
		<div class="container  "><!--  container-->
			<div class="row space">
				<div class="row">
			
					<div class="threecol "><!--sidebar col-->
						<div id="sidebar">
							<div><h3><a href="#" class='super' id='apanel'>Administrator Panel</a></h3></div>
							<div>
								<ul>
									<li><a href="#" class='see' id='make'>Add Products</a></li>
									<li><a href="#" class='see'  id='pro' >Manage Products</a></li>
									<li><a href="#"class='see' id='users'>Manage Users</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="ninecol last"> <!--user info col-->
						<div id="admin">
							<h1>Welcome, Administrator InsertUserName!</h1>
								<div id='superuser'>
									<ul>
										<li><a href="#"lala class='see' id='make'>Add Products</a></li>
										<li><a href='#' class='see'  id='pro'>Manage Products</a></li>
										<li><a class='see' id='users' href='#'>Show Users</a></li>
									</ul>
								</div>
						</div>
						<div id="mmake" class='show'>
							<h1>Add Products</h1>
							<?php include ('is/addp.php'); ?>
						</div>
						<div id="mpro" class='show'>
							<h1>Manage Products</h1>
							<?php include ('is/managep.php'); ?>
						</div>
						<div id="musers" class='show'>
							<h1>All Users</h1>
							<?php include ('is/manageu.php'); ?>
						</div>
						
					</div>
				</div><!--end row-->
				
				</div>
		</div>
<?php include ('is/footer.php'); ?>
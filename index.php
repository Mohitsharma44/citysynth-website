<?php include_once('login.php');?>
<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CitySynth</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>    
	<style type="text/css">
		.carousel {
			overflow: hidden;
		}
		.carousel .item {
			-webkit-transition: opacity 1s;
			-moz-transition: opacity 1s;
			-ms-transition: opacity 1s;
			-o-transition: opacity 1s;
			transition: opacity 1s;
		}
		.carousel .active.left, .carousel .active.right {
			left:0;
			opacity:0;
			z-index:2;
		}
		.carousel .next, .carousel .prev {
			left:0;
			opacity:1;
			z-index:1;
		}


		div.c-wrapper{
			width: 80%; /* for example */
			margin: 0;
		}

		.carousel-inner > .item > img, 
		.carousel-inner > .item > a > img{
			width: 100%; /* use this, or not */
			margin: 0;
		}

		#myCarousel{
			float:right;
			width:65%;
			overflow:hidden;
		}

		#text{
			float:left;
			width:35%;
			overflow:hidden;
		} 

		.carousel-control.left, .carousel-control.right {
			background-image: none;
		}

		p.italic {font-style:italic;float: left;}

	</style>

	<div class="navbar navbar-inverse default navbar-fixed-top">
		<!--If the top bar moves, change static to fixed and at the end of this dic class, adjust the next div class with some padding-->
		<style type="text/css">
			p{
				margin: 0px 0px 0px 0px;
			}
			div{
				margin: 0px 0px 0px 0px;
			}
		</style>
		<div class="container">
			<a href="#" class="navbar-brand"><p style="font-size: 22px;font-weight: 500;font-family: 'Open Sans', sans-serif; align="left" ">CITYSYNTH</br></p><p style="font-size:12px; align="left" ">&nbsp;THE URBAN GALAXY</p></a>
			<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
				<span class = icon-bar></span>
				<span class = icon-bar></span>
				<span class = icon-bar></span>
			</button>


			<div class="collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right">
					<li>
						Welcome,
						<?php
						if (isset($_SESSION['user']))
							echo "<a>Hello ".$_SESSION['user']."</a>"."<a href='logout.php'>Logout</a>";
						?>

					</li>
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#myModal" data-toggle="modal">Login/ Signup</a></li>
					<li class="dropdown">
						<a href="#" class = "dropdown-toggle" data-toggle = "dropdown">Time Lapse Videos <b class="caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href="#">Manhattan</a></li>
							<li><a href="#">Brooklyn</a></li>
						</ul></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>

			</div>
		</div> 

		<div class = "navbar navbar-default navbar-fixed-bottom">

			<div class = "container">

				<p class="navbar-text pull-left">Site Built by Mohit</p>
				<a href = "./signup.php" class="navbar-btn btn-success btn pull-right">Volunteer with us!</a>

			</div>

		</div>



		<div id="myCarousel" class="carousel container slide">
			<h2></br></h2>
			<ol class="carousel-indicators">
				<li data-target = "#myCarousel" data-slide-to = "0" class="active"> </li>
				<li data-target = "#myCarousel" data-slide-to = "1"> </li>
				<li data-target = "#myCarousel" data-slide-to = "2"> </li>
			</ol>

			<div class="carousel-inner">

				<div class="item active" >

					<img src="img/a.jpg" alt = "Error..a.." class="img-resposive">
					<div class="carousel-caption">
						<h3>Something on Image 1</h3>
					</div>

				</div>

				<div class="item" >

					<img src="img/b.jpg" alt = "Error..b.." class="img-resposive">
					<div class="carousel-caption">
						<h3>Something on Image 2</h3>
					</div>
				</div>

				<div class="item" >

					<img src="img/c.jpg" alt = "Error..c.." class="img-resposive">
					<div class="carousel-caption">
						<h3>Something on Image 3</h3>
					</div>

				</div>	

			</div>


			<a class="carousel-control left" href="#myCarousel" data-slide="prev">
				<img src="img/left.png" height="30%" width="50%" style="margin:200px 0px" />
			</a>

			<a class="carousel-control right" href="#myCarousel" data-slide="next">
				<img src="img/right.png" height="30%" width="50%" style="margin:200px 0px"/>
			</a>

		</div>

		<div id="text">
			<p></br></br></br>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
			</p>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="myModalLabel">Sign In to Citysynth</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<div class="checkbox">
										<label>
											<input type="checkbox"> Remember me
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-success">Sign in</button>
									<a href = "./signup.php" class="navbar-btn btn btn-primary">Register</a>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<p class="italic">Signing in will give you access to the live feed <br/>from 
							the cameras of other volunteers.</p>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>

			<script type="text/javascript">
				$(document).ready(function() {
					$('.carousel').carousel({interval: 5000});
				});
			</script>


		</body>
		</html>
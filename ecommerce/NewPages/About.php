<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sports Shop</title>
		
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">	
		<!-- Animate CSS -->
		<link href="css/animate.min.css" rel="stylesheet">
		<!-- Basic stylesheet -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		<link href="css/style-color.css" rel="stylesheet">
	</head>
	
	<body>
		
		<!-- wrapper -->
		<div class="wrapper" id="home">
		
			<!-- header area -->
			<header>
				<!-- primary menu -->
				<nav class="navbar navbar-fixed-top navbar-default">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<!-- logo area -->
							<a class="navbar-brand" href="#home">
								<!-- logo image -->
								<img class="img-responsive" src="img/logo/logo.png" alt="" />
							</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								 <li><a href="./NewPages/about.php">About</a></li>
				                  <li><a href="../products.php">Products</a></li>
				                  <li><a href="../cart.php">View Cart</a></li>
				                  <li><a href="../orders.php">My Orders</a></li>
				                  <li><a href="./NewPages/contact.html">Contact</a></li>
                          
						          <?php

						          if(isset($_SESSION['username'])){
						        	echo'<li><a href="orders.php">My Orders</a></li>';
                        			echo '<li><a href="logout.php">Log Out</a></li>';
						          }
						          else{
						            echo '<li><a href="login.php">Log In</a></li>';
						            echo '<li><a href="register.php">Register</a></li>';
						          }
						          ?>

							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>	
			</header>
			<!--/ header end -->
			
			<!-- banner area -->
			<div class="banner">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="img/banner/b1.jpg" alt="...">
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-one">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class=""></i> About us!</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Lorem ipsum dolor sit amet, consectetur elit. Lorem ipsum dolor sit amet, consectetur elit</h3>

								</div>
							</div>
						</div>
						<div class="item">
							<img src="img/banner/b2.jpg" alt="...">
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-two">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class=""></i> Trust us...</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Lorem ipsum dolor sit amet, consectetur elit.</h3>
									<!-- button -->
									<audio controls>
										<source src="./img/song.ogg" type="audio/ogg">
										<source src="./img/song.mp3" type="audio/mpeg">
									</audio>
								</div>
							</div>
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="fa fa-arrow-left" aria-hidden="true"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="fa fa-arrow-right" aria-hidden="true"></span>
					</a>
				</div>
			</div>
			<!--/ banner end -->
			
			<!-- block for animate navigation menu -->
			<div class="nav-animate"></div>
			
			<!-- Hero block area -->
			<div id="latestalbum" class="hero pad" style="background-color: black">
				<div class="container">
					<!-- hero content -->
					<div class="hero-content " style="color: gray">
						<!-- heading -->
						<h2>About us</h2>
						<hr>
					</div>
					<!-- hero play list -->
					<div class="hero-playlist">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="playlist-content">
									<p style="color: gray;font-size: 18px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>	
									<p style="color: gray;font-size: 18px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
									<p style="color: gray;font-size: 18px">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
								</div>

							</div>
							<div class="col-md-6 col-sm-6">
								<!-- play list -->
								<div class="playlist-content">
									<ul class="list-unstyled">
										<li class="playlist-number">
											<!-- song information -->
											<div class="song-info">
												<!-- song title -->
												<h4>One Day I am goona fly</h4>
												
												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Singer</strong>: Dawn</p>
											</div>
											<!-- music icon -->
											<audio controls style="padding-left: 30px;">
											  <source src="./img/song.ogg" type="audio/ogg">
											  <source src="./img/song.mp3" type="audio/mpeg">
											</audio>
											<div class="clearfix"></div>
										</li>
										<li class="playlist-number">
											<!-- song information -->
											<div class="song-info">
												<!-- song title -->
												<h4>One Day I am goona fly</h4>
												
												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Singer</strong>: Dawn</p>
											</div>
											<!-- music icon -->
											<audio controls style="padding-left: 30px;">
											  <source src="./img/song.ogg" type="audio/ogg">
											  <source src="./img/song.mp3" type="audio/mpeg">
											</audio>
											<div class="clearfix"></div>
										</li>
										<li class="playlist-number">
											<!-- song information -->
											<div class="song-info">
												<!-- song title -->
												<h4>One Day I am goona fly</h4>
											
												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Singer</strong>: Dawn</p>
											</div>
											<!-- music icon -->
											<audio controls style="padding-left: 30px;">
											  <source src="./img/song.ogg" type="audio/ogg">
											  <source src="./img/song.mp3" type="audio/mpeg">
											</audio>
											<div class="clearfix"></div>
										</li>
										<li class="playlist-number">
											<!-- song information -->
											<div class="song-info">
												<!-- song title -->
												<h4>One Day I am goona fly</h4>
												
												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Singer</strong>: Dawn</p>
											</div>
											<!-- music icon -->
											<audio controls style="padding-left: 30px;">
											  <source src="./img/song.ogg" type="audio/ogg">
											  <source src="./img/song.mp3" type="audio/mpeg">
											</audio>
											<div class="clearfix"></div>
										</li>
										<li class="playlist-number">
											<!-- song information -->
											<div class="song-info">
												<!-- song title -->
												<h4>One Day I am goona fly</h4>
											
												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Singer</strong>: Dawn</p>
											</div>
											<!-- music icon -->
											<audio controls style="padding-left: 30px;">
											  <source src="./img/song.ogg" type="audio/ogg">
											  <source src="./img/song.mp3" type="audio/mpeg">
											</audio>
											<div class="clearfix"></div>
										</li>
										<li class="playlist-number">
											<!-- song information -->
											<div class="song-info">
												<!-- song title -->
												<h4>One Day I am goona fly</h4>
												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Singer</strong>: Dawn</p>
											</div>
											<!-- music icon -->
											<audio controls style="padding-left: 30px;">
											  <source src="./img/song.ogg" type="audio/ogg">
											  <source src="./img/song.mp3" type="audio/mpeg">
											</audio>
											<div class="clearfix"></div>
										</li>
										<li class="playlist-number">
											<!-- song information -->
											<div class="song-info">
												<!-- song title -->
												<h4>One Day I am goona fly</h4>
												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Singer</strong>: Dawn</p>
											</div>
											<!-- music icon -->
											<audio controls style="padding-left: 30px;">
											  <source src="./img/song.ogg" type="audio/ogg">
											  <source src="./img/song.mp3" type="audio/mpeg">
											</audio>
											<div class="clearfix"></div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ hero end -->
       	<footer style="background-color: rgb(45,45,45);">
				<div class="container">
					<!-- social media links -->
					<div class="social">
						<a class="h-facebook" href="#"><i class="fa fa-facebook"></i></a>
						<a class="h-google" href="#"><i class="fa fa-google-plus"></i></a>
						<a class="h-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
						<a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
					</div>
					<!-- copy right -->
					<p class="copy-right">&copy; copyright 2018, All rights are reserved.</p>
				</div>
			</footer>
			<!-- footer end -->
			
		</div>
		
		<script src="./NewPages/js/jquery.js"></script>	
		<script src="./NewPages/js/bootstrap.min.js"></script>
		<script src="js/vendor/jquery.js"></script>
    	<script src="js/foundation.min.js"></script>



    
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
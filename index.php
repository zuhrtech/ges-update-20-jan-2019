<?php
session_start();
include "db.php";

$activeuser = '';

if(!isset($_SESSION) || !$_SESSION['ges_session']){
    $rand = rand(111111,999999);
    $_SESSION['ges_session'] = "guest".$rand;
    header('location: http://test.ges.zuhrtech.com/');
}else{
    $activeuser = $_SESSION['ges_session'];


    
}



?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Global Education System</title>
	<!-- Meta tag Keywords -->
	<link rel="icon" href="http://ges.zuhrtech.com/icon/ges%20t1.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="front/css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="front/css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<!-- banner slider -->
	<link rel="stylesheet" href="front/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="front/css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="http://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese"
	 rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
    <script src="js/jquery-2.2.3.min.js"></script>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
					<!-- logo -->
					<div id="logo">
					    
						<a  href="www.zuhrtech.com">
						    <img class="pull-left" src="http://ges.zuhrtech.com/icon/ges%20t1.png" style="height:90px; width:190px; margin-top:-11px" />
						    </a>
					</div>
					<!-- //logo -->

					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="#" class="active">Home</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="">About Us</a></li>
								<li><a href="#">Courses</a></li>
								<li><a href="#">Contact Us</a></li>
								<?php
								 
								if( strpos($_SESSION['ges_session'], 'guest') !== false){
								    ?>
								    
								<li><a href="http://test.ges.zuhrtech.com/account.php?register">Register </a></li>
								<li><a href="javascript:void(0)"  data-toggle="modal" data-target="#loginpopup">Login</a></li>
								<?php
								}else{
								    
								             
								             $access = $_SESSION['ges_access'];
								             $check2 = "select Scren_Name from User_table where Email = '".$activeuser."' ";
                                             $result2 = mysqli_query($con,$check2);
                                             $uname = mysqli_fetch_object($result2)->Scren_Name;
                                             
                                             
								
								    ?>
                                    <li class="active mx-lg-4 mx-md-3 my-md-0 my-2 ">
									
									<label for="drop-2" class="toggle toogle-2"><?php echo $uname; ?> <span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#"><?php echo $uname; ?> <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
										<?php if($access == "Both" || $access == "Teacher"){
										?>
										<li><a href="http://test.ges.zuhrtech.com/teacher" class="drop-text">Teacher`s Dashboard</a></li>
										<?php
										} 
										if($access == "Both" || $access == "Student"){
										?>
										<li><a href="http://test.ges.zuhrtech.com/student" class="drop-text">Student`s Dashboard</a></li>
										<?php } ?>
										
								<li><a href="http://test.ges.zuhrtech.com/newsession.php">Logout</a></li>
									</ul>
								</li>

  
								<?php
								}
								?>
								
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
		<div class="banner_w3lspvt">
			<div class="csslider infinity" id="slider1">
				<input type="radio" name="slides" checked="checked" id="slides_1" />
				<input type="radio" name="slides" id="slides_2" />
				
				<ul class="banner_slide_bg">
					<li>
						<div class="container">
							<div class="w3ls_banner_txt text-right ml-auto pr-xl-0 pr-sm-4 pr-5">
								<h3 class="w3ls_pvt-title text-wh text-uppercase let mb-2">Start Teaching Today</h3>
								<p>
								Explore the opportunities to go out and find highly motivated, high-paying students who want 
								to improve their skills. You will also know how to 
								create great lessons that help students learn and make them want to come back for more.
								</p>
								<a href="javascript:void(0)"  data-toggle="modal" data-target="#loginpopup" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Login</a>
								<a href="http://test.ges.zuhrtech.com/account.php?register" style="max-width: 150px;" class="btn button-style button-style-2 ml-2 mt-sm-5 mt-4">Register
									</a>
							</div>
						</div>
					</li>
					<li>
						<div class="container">
							<div class="w3ls_banner_txt text-right ml-auto pr-xl-0 pr-sm-4 pr-5">
								<h3 class="w3ls_pvt-title text-wh text-uppercase let mb-2">Start Learning Today</h3>
								<p>
								Our vision is to empower all students to apply their acquired skills and knowledge, and to rely upon their personal attributes to lead productive lives and to become contributing members of the global community.
								</p>
								<a href="javascript:void(0)"  data-toggle="modal" data-target="#loginpopup" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Login</a>
								<a href="http://test.ges.zuhrtech.com/account.php?register" style="max-width: 150px;" class="btn button-style button-style-2 ml-2 mt-sm-5 mt-4">Register</a>
							</div>
						</div>
					</li>
					
				</ul>
				<div class="arrows">
					<label for="slides_1"></label>
					<label for="slides_2"></label>
				
				</div>
				<div class="navigation">
					<div>
						<label for="slides_1"></label>
						<label for="slides_2"></label>
					\
					</div>
				</div>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->
<!---728x90--->

	<!-- about -->
	<div class="what py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title-w3 mb-sm-4 mb-3 text-bl text-center font-weight-bold">Welcome to Global Education System</h3>
			<p class="mx-auto wstyles text-center mb-sm-5 mb-4">
			    Our mission is to empower all students to apply their acquired skills and knowledge, and to rely upon their personal attributes to lead productive lives and to become contributing members of the global community. Our mission is to provide a high-quality, comprehensive, and meaningful education for all students.
			    </p>
			<img src="front/images/lib.jpg" alt="" class="img-fluid">
		</div>
	</div>
	<!-- //about -->
<!---728x90--->

	<!-- services -->
	<section class="services bg-li py-5" id="services">
		<div class="container py-xl-5 py-lg-3">
			<div class="row py-xl-3">
				<div class="col-lg-4">
					<h3 class="title-w3 text-bl mb-3 font-weight-bold">Our Vision</h3>
					<p class="title-sub-2 mb-4">
					    
An investment in knowledge always pays the best interest. 
					    </p>
					<p>
					    Our mission is to empower all students to apply their acquired skills and knowledge,
					    and to rely upon their personal attributes to lead productive lives and to become contributing members of the global community.
					    Our mission is to provide a high-quality, comprehensive, and meaningful education for all students. 
					    </p>
				</div>
				<div class="col-lg-8 mt-lg-0 mt-5">
					<div class="row">
						<div class="col-md-6">
							<div class="bottom-gd-ser p-4">
								<div class="row">
									<div class="col-sm-3 bottom-gd-icon text-center">
										<span class="fa fa-trademark" aria-hidden="true"></span>
									</div>
									<div class="col-sm-9 bottom-gd-content text-left mt-sm-0 mt-4">
										<h4 class="mb-3">Symbol Of Trust</h4>
										<p>An investment in knowledge always pays the best interest.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 my-md-0 my-4">
							<div class="bottom-gd2-active p-4">
								<div class="row">
									<div class="col-sm-3 bottom-gd-icon text-center">
										<span class="fa fa-wheelchair-alt" aria-hidden="true"></span>
									</div>
									<div class="col-sm-9 bottom-gd-content text-left mt-sm-0 mt-4">
										<h4 class="mb-3">Academic Exercises</h4>
										<p>An investment in knowledge always pays the best interest.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-md-5">
						<div class="col-md-6">
							<div class="bottom-gd2-active p-4">
								<div class="row">
									<div class="col-sm-3 bottom-gd-icon text-center">
										<span class="fa fa-hourglass-half" aria-hidden="true"></span>
									</div>
									<div class="col-sm-9 bottom-gd-content text-left  mt-sm-0 mt-4">
										<h4 class="mb-3">On Time Preparation</h4>
										<p>An investment in knowledge always pays the best interest.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 mt-md-0 mt-4">
							<div class="bottom-gd-ser p-4">
								<div class="row">
									<div class="col-sm-3 bottom-gd-icon text-center">
										<span class="fa fa-thumbs-o-up" aria-hidden="true"></span>
									</div>
									<div class="col-sm-9 bottom-gd-content text-left mt-sm-0 mt-4">
										<h4 class="mb-3">Industry Best Teachers</h4>
										<p>An investment in knowledge always pays the best interest.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //services -->
<!---728x90--->



	<!-- blog -->
	<div class="blog_w3ls pb-5" id="blog">
		<div class="py-xl-5 py-lg-3">
			<h3 class="title-w3 text-bl text-center font-weight-bold">Top Courses</h3>
			<p class="title-sub mb-5 text-center">Latest Courses</p>
			<div class="blog-grids pt-xl-4">
				<div class="container">
					<div class="row">
						<!-- blog grid -->
						<div class="col-lg-4 col-md-6">
							<div class="card border-0 med-blog">
								<div class="card-header p-0">
									<img class="card-img-bottom" src="front/images/php.jpg" alt="Card image cap">
								</div>
								<div class="card-body border border-top-0">
									<a href="#" class="blog-title-in card-title m-0">How to learn online with GES</a>
									<p class="theme-color">Starting From : Jan 06 2019</p>
									<p class="my-3">Cras ultricies ligula sed magna dictum porta auris blandita.</p>
									<a href="#" class="btn button-style-3 text-color let">Read More</a>
								</div>
							</div>
						</div>
						<!-- //blog grid -->
						<!-- blog grid -->
						<div class="col-lg-4 col-md-6 mt-md-0 mt-5">
							<div class="card border-0 med-blog">
								<div class="card-header p-0">
									<img class="card-img-bottom" src="front/images/php.jpg" alt="Card image cap">
								</div>
								<div class="card-body border border-top-0">
									<a href="#" class="blog-title-in card-title m-0">How to Teach online with GES</a>
									<p class="theme-color">Starting From : Jan 06 2019</p>
									<p class="my-3">Cras ultricies ligula sed magna dictum porta auris blandita.</p>
									<a href="#" class="btn button-style-3 text-color let">Read More</a>
								</div>
							</div>
						</div>
						<!-- //blog grid -->
						<!-- blog grid -->
						<div class="col-lg-4 col-md-6 mx-auto mt-lg-0 mt-5">
							<div class="card border-0 med-blog">
								<div class="card-body border right-blog-wthree">
									<a href="" class="blog-title-in card-title">Atomic, Nuclear, and Particle Physics.</a>
									<p class="theme-color">Starting From : Jan 06 2019</p>
									<a href="" class="blog-title-in card-title mt-4">Web Development.</a>
									<p class="theme-color">Starting From : Jan 06 2019</p>
									<a href="" class="blog-title-in card-title mt-4">Cyber Security Expert Course.</a>
									<p class="theme-color">Starting From : Jan 06 2019</p>
								</div>
							</div>
						</div>
						<!-- //blog grid -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //blog -->

	

	<!-- copyright -->
	<div class="cpy-right text-center py-3">
		<p>© 2018 All rights reserved | Developed by
			<a href="http://zuhrtech.com/"> ZuhrTech Inc.</a>
		</p>
	</div>
	<!-- //copyright -->

	<!-- move top icon -->
	<a href="#home" class="move-top text-center"></a>
	<!-- //move top icon -->
	<script src="http://test.ges.zuhrtech.com/js/bootstrap.min.js"></script>







<div class="modal fade" id="loginpopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
     
     
     
     
     
     
       <form action="http://test.ges.zuhrtech.com/account.php"  method="post" >
                      
               
                    
                  <div class="form-group">
                    <label for="password">Select</label>
                   
                    <select class="form-control" name="utype" required>
                        <option value="Student">Student</option>
                        <option value="Teacher">Teacher</option>
                    </select>
                  </div>   
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input style="background-color:rgba(246, 248, 253,0.4)" type="email"  name="uemail" class="form-control" required placeholder="Enter your email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                   
                    <input style="background-color:rgba(246, 248, 253,0.4)" type="password" class="form-control" name="upassword" required placeholder="Enter your password">
                  </div>
                  <div class="form-group">
                        <button type="submit"  class="btn btn-success btn-block btn-lg mb-2">Login</button>           
                  </div>
                 
                
  
        
           </form>    
     
     
     
     
     
     
      </div>
      
    </div>
  </div>
</div>























</body>



</html>
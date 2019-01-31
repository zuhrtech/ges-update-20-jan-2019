<?php

require_once('../access.php');
include "../db.php";

$check = "select Scren_Name from User_table where Email = '".$_SESSION['ges_session']."' ";
$result = mysqli_query($con,$check);
$uname = mysqli_fetch_object($result)->Scren_Name;

$switch = '<a href="profile" class="dropdown-item mt-3"><h5><i class="fas fa-link mr-3"></i>Upgrade  Profile</h5></a>';
if($_SESSION['ges_access'] == "Both"){
$switch = '<a href="http://test.ges.zuhrtech.com/teacher" class="dropdown-item mt-3"><h5><i class="fas fa-link mr-3"></i>Switch Profile</h5></a>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Global Education System</title>
    <link rel="icon" href="http://ges.zuhrtech.com/icon/ges%20t1.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="http://test.ges.zuhrtech.com/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="http://test.ges.zuhrtech.com/css/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="http://test.ges.zuhrtech.com/css/pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="http://test.ges.zuhrtech.com/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="http://test.ges.zuhrtech.com/css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="http://test.ges.zuhrtech.com/css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="http://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>


<body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h6>
                    <a href="http://test.ges.zuhrtech.com">Global Education System</a>
                </h6>
                <span>GES</span>
            </div>
            
            <ul class="list-unstyled components">
                <li class="">
                    <a href="http://test.ges.zuhrtech.com/student/">
                        <i class="fas fa-th-large"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-laptop"></i>
                        Classes
                        
                    </a>
                   
                </li>
             
              
                <li>
                    <a href="http://test.ges.zuhrtech.com/student/courses">
                        <i class="far fa-window-restore"></i>
                        Courses
                    </a>
                </li>
                <li>
                    <a href="http://test.ges.zuhrtech.com/student/profile">
                        <i class="fas fa-user"></i>
                        Profile
                        
                    </a>
                </li>
                <li>
                    <a href="http://test.ges.zuhrtech.com/student/enrollments">
                        <i class="far fa-map"></i>
                        Enrollments
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header float-left">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                 <h5 class="float-left" style="margin-left:20px; margin-top:10px">Student Dashboard</h5>
                    <ul class="top-icons-agileits-w3layouts float-right">
                      
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://test.ges.zuhrtech.com/student/profile" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                                <?php echo $uname; ?>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <img src="data:image/png;base64,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"
                                        class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h4 class="sub-title-w3-agileits"><?php echo $uname; ?></h4>
                                        <a href="http://test.ges.zuhrtech.com/student/profile"><?php echo $_SESSION['ges_session']; ?></a>
                                    </div>
                                </div>
                                <a href="http://test.ges.zuhrtech.com/student/profile" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-user mr-3"></i>My Profile</h4>
                                </a>
                               <?php echo $switch; ?>
                             
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="http://test.ges.zuhrtech.com/newsession.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->
            <div class="container-fluid">
                <div class="row">
                    
                    
                    
                    
                    
                    
                    
                    <?php
                    
                    
                    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
			$url = explode('/',$url);
			$url = array_slice($url,2);
			
			
			
			if($url[0] == null){
			    echo "no param";
			}else{
			    
			
			$file = $url[0].'.php';
			if(file_exists($file) && $file != 'index.php'){
			    include $file;
			}else{
			    ?>
			         <div class="outer-w3-agile mt-3 col-lg-12">
                <div class="card text-center">
                    
                    <div class="card-body">
                        <h5 class="card-title">Oops! Error 404</h5>
                        <p class="card-text">Error Message.</p>
                        <a href="http://test.ges.zuhrtech.com/student" class="btn more mt-3">Go Dashboard</a>
                    </div>
                    
                </div>
            </div>

			    <?php
			}
			
			
			}        
                    
                    ?>
                    
                    
                    
                    
                    
                    
                    
                    
                </div>
            </div>
          
          
         
         
         
         
         
            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© All Rights Reserved | Developed by
                    <a href="http://www.zuhrtech.com"> Zuhrtech Inc. </a>
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='http://test.ges.zuhrtech.com/js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- loading-gif Js -->
    <script src="http://test.ges.zuhrtech.com/js/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->
    <!-- profile-widget-dropdown js-->
    <script src="http://test.ges.zuhrtech.com/js/script.js"></script>
    <!--// profile-widget-dropdown js-->


    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="http://test.ges.zuhrtech.com/js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>



</html>
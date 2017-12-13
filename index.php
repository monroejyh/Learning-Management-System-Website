<!DOCTYPE>

<?php
session_start();
include("functions/functions.php");
include("includes/db.php");

?>

<html lang="en" >
<head>
  <title>Homepage_sample</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://use.fontawesome.com/1e6a9a1261.js"></script>

    <link rel="stylesheet" href="jquery.rateyo.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.0.1/jquery.rateyo.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.0.1/jquery.rateyo.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular-route.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
 
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/base/jquery-ui.css" rel="stylesheet">
  <script src="app.js"></script>
  <link href="homepage_format.css" rel="stylesheet"/>
  <link href="plugins.css" rel="stylesheet"/>
<style>


@media (max-width: 993px) {
    .carousel-caption {
        display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
	.image-word{
		display:none;
	}
  .intro{
    font-size: 120%;
  }
  .container3{
    font-size: 80%;
  }
  .intro{
    display: none;
  }
  .dropdown-menu{
  background-color:#424141;

}
.navbar-dark .navbar-nav .dropdown-menu .nav-link {
    color: rgb(189, 186, 181);
    font-size:11px;
}

}

@media (max-width:768px)and (min-width:366px){
#table1 {
	display:none;
	}
#table2{
	display:block;
}
.container{
	padding:10px 10px;
}
h2{
	font-size:180%;
}
.containerimage{
	margin-top:4%;
}	
.containerword{
	position:relative;
	margin-top:4%;
}

.product-box {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .product-box:hover {
        background-color: #f8f8f8;
    }
    .product-box:hover a {
        color: #333 !important;
    }
 
    .feature_box .service {
        border-bottom: 1px solid #eee;
    }

.intro{
	display:none;
}
.dropdown-menu{
	background-color:#424141;
}
.navbar-dark .navbar-nav .dropdown-menu .nav-link {
    color: rgb(189, 186, 181);
}


}

@media only screen and (max-width:365px){
#table1 {
	display:none;
	}
#table2{
	display:block;
}
.container{
	padding:10px 10px;
}
h2{
	font-size:110%;
}
.containerimage{
}	
.containerword{
	position:relative;
	margin-top:10%;
}
.intro{
	display:none;
}
.containerword ul li{
	display:table-cell;
}
.containerword ul li span{
	vertical-align:middle;
	display:inline-block;
}
.dropdown-menu{
	background-color:#424141;
}
.navbar-dark .navbar-nav .dropdown-menu .nav-link {
    color: rgb(189, 186, 181);
}
}

@media only screen and (max-width:360px){
#table1 {
	display:none;
	}
#table2{
	display:block;
}
.container{
	padding:10px 10px;
}
h2{
	font-size:110%;
}
.containerimage{
}	
.containerword{
	position:relative;
	margin-top:10%;
}
.intro{
	display:none;
}
.containerword ul li{
	display:table-cell;
}
.containerword ul li span{
	vertical-align:middle;
	display:inline-block;
}
.container3{
	display:none;
}
.dropdown-menu{
	background-color:#424141;
}
.navbar-dark .navbar-nav .dropdown-menu .nav-link {
    color: rgb(189, 186, 181);
}
}
</style>  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" ng-controller="mainController">

<form  method ="post" enctype = "multipart/form-data" id = "signUpModal" class = "modal fade" role = "dialog"> <!-- Sign Up Modal Window -->
        <div class = "modal-dialog">
      
          <div class = "modal-content">
            <div class = "modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Sign Up - We Collaborate
            </div>
        
            <div class="modal-body">
                <div ng-show="message" class="alert alert-danger" role="alert">{{message}}</div>
              <span>Enter your name : <input ng-model="user.name" type = "text" placeholder = "Name" name = "c_name" class="form-control"  /></span>
              <span>Preferred username : <input ng-model="user.username" type = "text" placeholder = "Username" name = "c_username" class="form-control"/></span>
                  <span>Enter your email ID : <input ng-model="user.name" type = "text" placeholder = "alice@wonderland.com" name = "c_email" class="form-control"  /></span>
              <span>Enter your password : <input ng-model="user.password" name ="c_password" type = "password" class="form-control"/></span>
              <span>Insert image : <input name = "customer_image" type= "file" class="form-control"/></span>
            </div>
        
            <div class="modal-footer">
              <button ng-click="signup(user)" type = "submit" name="register" value = "register" class = "btn btn-primary">Sign Up</button>
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </form> <!-- end of sign up Modal -->
  
      <form method ="post" enctype = "multipart/data" id = "loginModal" class = "modal fade" role = "dialog"> <!-- Log in Modal Window -->
        <div class = "modal-dialog">
      
          <div class = "modal-content">
            <div class = "modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Login - We Collaborate</h4>        
            </div>
        
            <div class="modal-body">
              <span>Enter your Username : <input ng-model="user.username" type = "text" placeholder = "Name" class="form-control" id = "name25" /></span>
              
              <span>Enter your password : <input ng-model="user.password" type = "password" class="form-control" id = "password25" /></span>
              
            </div>
        
            <div class="modal-footer">
              <button ng-click="login(user)" type = "submit" class = "btn btn-primary" id= "loginInButton">Login</button>
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </form> <!-- end of log in Modal -->
    
<nav class="navbar-expand-lg navbar navbar-dark bg-inverse fixed-top"> 
        <a class="navbar-brand" href="#">WeCollbrate</a>       
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false" aria-controls="navcollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> 
        </button>
        <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <?php getCategory(); ?>
      </ul>
      </li>
      <li>
          <div id ="form" class="input-group">
            <form method="get" action="results.php" enctype="multipart/form-data">
              <input type="text" name="user_query" placeholder="Search Course" />
              <input type="submit" name="search" value="Search"/>
              </form> 
          </div>
      </li>

                <div class="collapse navbar-collapse" id="myNavbar">                  
                    <ul class="nav navbar-nav navbar-right">
                  <li ng-show="showCurrentUser"><a href="#">
                    <span
                    ng-show="showCurrent" class="glyphicon glyphicon-user"></span>
                    Welcome Guest</a></li>
                      <li ng-hide="showCurrentUser"><a data-target="#signUpModal" data-toggle="modal" href="#signUpModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                      <?php cart(); ?>
                      <li><a href="cart.php"> Cart : <?php total_items(); ?></a></li>
                      <li ng-hide="showCurrentUser"><a data-target="#loginModal" data-toggle="modal" href="#loginModal" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                      <li ng-show="showCurrentUser"><a ng-click="logout()" href=""><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>

                </div>
        </div>

<?php


global $mysqli;

if(isset($_POST['register'])){

  $ip = getIp();
  $c_name = $_POST['c_name'];
  $c_password = $_POST['c_password'];
  $c_email = $_POST['c_email'];
  $c_username = $_POST['c_username'];
  $customer_image = $_FILES['customer_image']['name'];
  $customer_image_tmp = $_FILES['customer_image']['tmp_name'];

  move_uploaded_file($customer_image_tmp, "customer/customer_images/$customer_image");

  $insert_c = "insert into customer (customer_ip, customer_name, customer_password, customer_email, customer_username, customer_image) values('$ip', '$c_name',
  '$c_password', '$c_email', '$c_username', '$customer_image')";

 //echo $insert_c;

$run_c = mysqli_query($mysqli, $insert_c);

$sel_cart = "select * from cart where ip_add = '$ip'";

$run_cart = mysqli_query($mysqli, $sel_cart);

$check_cart = mysqli_num_rows($run_cart);

if($check_cart == 0){

  $_SESSION['customer_email'] = $c_email;

  echo "<script>alert('Account has been created successfully!')</script>";

  echo "<script>window.open('customer/my_account.php', '_self')</script>";


}

else{


  $_SESSION['customer_email'] = $c_email;

  echo "<script>alert('Account has been created successfully!')</script>";

  echo "<script>window.open('checkout.php', '_self')</script>";

}

}

    ?>

    </nav>

<div class="text-center headcontainer row" id="#kkk">
<div class="col-xl-6 col-lg-6 col-md-4 col-sm-4 col-12 containerword text-center" width="50%">
  <br><h2><strong>Learning Management System You'll Love</strong></h2>
  <p class="intro"><em>An easy to set up and use learning management system that will fulfill all your corporate training needs.</em></p>
  

<div >
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          I forgot my login/password and/or I am having issues with my login, what do I do?
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        Please visit the Search Opportunities page and click on the "Retrieve Password" link. If you created a profile with us, using a unique email address, you will receive an email that will direct you to reset your password. If the system does not recognize your email, or if you don't receive an email to reset your password, your profile does not exist in our system.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          How do I apply for a job/internship?
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                        To apply for a job and/or an internship, please visit the Search Opportunities page to view and apply for any opportunities at BPL. In order to be considered for any position, you need to create a candidate profile with a completed application.To apply for a job and/or an internship, please visit the Search Opportunities page to view and apply for any opportunities at BPL. In order to be considered for any position, you need to create a candidate profile with a completed application.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Can I contact the HR Department regarding my application?
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">
                        Because of the volume of applications the Library receives, the HR Department is unable to answer individual inquiries. Please log into your profile to edit your candidate information, update your application/resume, and view the status of your application for a particular job.Because of the volume of applications the Library receives, the HR Department is unable to answer individual inquiries. Please log into your profile to edit your candidate information, update your application/resume, and view the status of your application for a particular job.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  <br>
</div>
<div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-12 containerimage" width="50%">
                            <div class="slider-area">

                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                            

                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner img-rounded" role="listbox">

                                        <div class="carousel-item active">
                                            <img src="images/image3.jpg" alt="">
                                        </div>

                                        <div class="carousel-item">
                                            <img src="images/image4.jpg" alt="">
                                        </div>

                                        <div class="carousel-item">
                                            <img src="images/image5.jpg" alt="">
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
</div>

<div>
<div class="container-fluid bg-3 text-center d-none d-lg-block" id="jumbo">  
<div class="jumbotron">  
  <div class="row">
  	     
    <div class="col-sm-4 offset-sm-0">
        <div class="section3">
            <span> <img src="images/LMS-image3.jpg" class="img-responsive" style="width:15%" alt="Image">
            <p>Learn Online</p></span>
             </div>
    </div>
      
    <div class="col-sm-4 offset-sm-0">
        <div class="section3">
            <span><img src="images/LMS-image5.jpg" class="img-responsive" style="width:15%" alt="Image">
            <p>Interact with other students</p></span></div>
    </div>
    
      <div class="col-sm-4 offset-sm-0">
        <div class="section3">
            <span><img src="images/LMS-image6.jpg" class="img-responsive" style="width:15%" alt="Image">
            <p>Fully Responsive</p></span>
		</div>
    </div>
	</div>
  </div>
</div>
</div>

<div class="text-center content" style="margin-top:40px">
  <h2><strong>POPULAR COURSES</strong></h2><br>
  <div class="row">
 <?php
   getCourses()
   ?> 
   <?php getCatCourses();?>
</div>
</div>




<div class="text-center" style="margin-top:40px">
  <h2><strong>POPULAR CATEGORIES</strong></h2><br>
  <div class="row">
  <div class="col-xs-12 col-sm-3">
    <div class="rounded-circle">
      <a href="#"><img src="images/mathIcon.png" alt="Math" width="50%"></a>
      <p><strong>Math</strong></p><br>
    </div>
  </div>
  <div class="col-xs-12 col-sm-3">
    <div class="rounded-circle">
      <a href="#"><img src="images/webIcon.png" alt="Web Development" width="50%"></a>
      <p><strong>Web Development</strong></p><br>
    </div>
  </div>
  <div class="col-xs-12 col-sm-3">
    <div class="rounded-circle">
      <a href="#"><img src="images/musicIcon.png" alt="Music" width="50%"></a>
      <p><strong>Music</strong></p><br>
    </div>
  </div>
  <div class="col-12 col-sm-3">
    <div class="rounded-circle">
      <a href="#"><img src="images/statisticsIcon.png" alt="Statistics" width="50%"></a>
      <p><strong>Statistics</strong></p><br>
    </div>
  </div>
</div>
</div>

<div class="text-center" style="margin-top:40px; margin-bottom:30px">
  <h2><strong>OUR TEAM MEMBERS</strong></h2><br>
	<div class="row">
                  <div class="container-fluid project-bg">
                     <div class="row text-center">
                           <div class="col-md-3 col-sm-6 col-12 col-lg-3">
                              <div class="team-member">
                                 <img class="rounded-circle" src="team/member1.jpeg" alt="">
                                 <h5>Jhansi Kambalapally</h5>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6 col-12 col-lg-3">
                              <div class="team-member">
                                 <img class="rounded-circle" src="team/member2.jpeg" alt="">
                                 <h5>Sheetal Singh</h5>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6 col-12 col-lg-3">
                              <div class="team-member">
                                 <img class="rounded-circle" src="team/member1.jpeg" alt="">
                                 <h5>Zhan Zhang</h5>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6 col-12 col-lg-3">
                              <div class="team-member">
                                 <img class="rounded-circle" src="team/member2.jpeg" alt="">
                                 <h5>Menglu Zhu</h5>
                              </div>
                           </div>
                    </div>
				</div>
				</div>
			</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>


<footer class="text-center">

  <p><a href="">About us</a>&emsp;|&emsp;<a href="">Contact us</a>&emsp;|&emsp;<a href="">Help</a></p>
  <div class="socio-copyright"> 
  <div class="social">
    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>&nbsp;
    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>&nbsp;
    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>&nbsp;
	<a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>&nbsp;
  </div>
  </div>

  <p>Copy Right &copy; <a href="http://www.northeastern.edu/" data-toggle="tooltip" title="Visit northeastern">http://www.northeastern.edu/</a></p> 
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:zhang.zhan2@husky.neu.edu">zhang.zhan2@husky.neu.edu</a></p> 
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

	
</body>

</html>
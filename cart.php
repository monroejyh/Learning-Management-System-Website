<!DOCTYPE>

<?php
session_start();

include("functions/functions.php");

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

<?php

include("header.php");

?>



<div class="text-center content" style="margin-top:100px;">
  <h2><strong>POPULAR COURSES</strong></h2><br>
  
 <form action = "" method ="post"  enctype = "multipart/form-data">
<table class= "table-responsive" align ="center" width ="1000" border="2" bgColor = "cornsilk">

<tr align = "center">
  <th>Remove</th>
  <th>Product(s)</th>
  <th>Quantity</th>
  <th>Total Price</th>
</tr>

<?php

$total = 0;

 global $mysqli;

 $ip = getIp();

 $sel_price = "select * from cart where ip_add = '$ip'";

 $run_price = mysqli_query($mysqli, $sel_price);

 while($c_price = mysqli_fetch_array($run_price)){

  $course_id = $c_price['course_id'];

  $course_qty = $c_price['qty'];

  $c_price = "select * from course where course_id = '$course_id'";

  $run_course_price = mysqli_query($mysqli, $c_price);

  while($cc_price = mysqli_fetch_array($run_course_price)){

    //$course_price = array($cc_price['course_price']);
    $course_title = $cc_price['course_title'];
    $course_image = $cc_price['course_image'];
    $single_price = $cc_price['course_price'];
    

    $sub_total_price = $single_price * $course_qty;
    $course_price = array($sub_total_price);
    $values = array_sum($course_price);

    $total += $values;


 

?>

<tr align = "center">
  <td> <input type = "checkbox" name = "remove[]" value = "<?php echo $course_id; ?>" /><input type="hidden" name = "product_adjust_id[]" value = "<?php echo $course_id; ?>" /></td>
  <td <?php echo $course_title ?> <br/>
  <img src = "admin/course_images/<?php echo $course_image;?>" width = "60" height = "100" /></td>
  <td><input type="text" size = "4" name ="qty[]" value = "<?php echo $course_qty; ?>"></td>
  <?php
   $ip = getIp();

  if((isset($_POST['update_cart'])) AND $_POST['remove'] == "")
    {

      $i = 0;

      $new_qty = $_POST['qty'];
      foreach($_POST['product_adjust_id'] as $pro_adj_id){
          $new_qty = $_POST['qty'][$i];
           $update_qty = "update cart set qty = '$new_qty' where ip_add = '$ip' and course_id = '$pro_adj_id'";
          $run_qty = mysqli_query($mysqli, $update_qty);
          ++$i;
      }

      echo "<script>window.location.href = window.location.href</script>";
     
    
    }

  ?>

  <td><?php echo "$" . $single_price ?></td>

  </tr>
<?php   } } ?>

  <tr align = "right">
    <td colspan="4"> <b>Sub Total: </b></td>
    <td colspan="4"><?php echo "$" . $total; ?> </td>
    <td></td>
  </tr>

  <tr>

   <td> <input type = "submit" name = "update_cart" value = "Update cart"/></td>
   <td><input type ="submit" name="continue" value = "Continue Shopping"/></td>
   <td><button><a href = "checkout.php">Checkout</a></button></td>
   
  </tr>
</table>
 </form>

 <?php

global $mysqli;

$ip = getIp();

if(isset($_POST['update_cart'])){

  foreach($_POST['remove'] as $remove_id){

    $delete_course = "delete from cart where course_id = '$remove_id' AND ip_add = '$ip'";

    $run_delete = mysqli_query($mysqli, $delete_course);

    if($run_delete){

      echo "<script>window.open('cart.php', '_self')</script>";
    }


  }

}

if(isset($_POST['continue'])){

  echo "<script>window.open('index.php', '_self')</script>";
}



?>

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
<?php

session_start();

?>


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

  $ip = getIp();

if(isset($_POST['register'])){


  $c_name = $_POST['c_name'];
  $c_password = $_POST['c_password'];
  $c_email = $_POST['c_email'];
  $c_username = $_POST['c_username'];
  $customer_image = $_FILES['customer_image']['name'];
  $customer_image_tmp = $_FILES['customer_image']['tmp_name'];

  move_uploaded_file($customer_image_tmp, "customer/customer_images/$customer_image");

  $insert_c = "insert into customer (customer_ip, customer_name, customer_password, customer_email, customer_username, customer_image) values('$ip', $c_name',
  '$c_password', '$c_email', '$c_username', '$customer_image')";

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


<div>
<form method ="post" enctype = "multipart/data" id = "loginModal" class = "modal fade" role = "dialog"> <!-- Log in Modal Window -->
        <div class = "modal-dialog">
      
          <div class = "modal-content">
            <div class = "modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Login - We Collaborate</h4>        
            </div>
        
            <div class="modal-body">
              <span>Enter your Username : <input ng-model="user.username" type = "text" placeholder = "Name" class="form-control" id = "name" /></span>
              
              <span>Enter your password : <input ng-model="user.password" type = "password" class="form-control" id = "password" /></span>

              <span>Enter your email: <input ng-model="user.password" type = "email" class="form-control" id = "email" /></span>
              
              <span><a href = "checkout.php?forgot_pass">Forgot Password?</a></span>
            </div>
        
            <div class="modal-footer">
              <button ng-click="login(user)" type = "submit" class = "btn btn-primary" id= "loginInButton">Login</button>
              <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>

        <h2> <a href = "cutomer_register.php">New? Register Here</a></h2>
      </form> <!-- end of l


</div>
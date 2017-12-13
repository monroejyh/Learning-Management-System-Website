<?php

session_start();
include("functions/functions.php");
include("includes/db.php");
include('header.php');

global $mysqli;
$get_user = "select * from users where user_id = 1";
$run_user = mysqli_query($mysqli, $get_user);
$row_user = mysqli_fetch_array($run_user);

$username = $row_user['username'];
$password = $row_user['password'];
$email = $row_user['email'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile_sample</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://use.fontawesome.com/1e6a9a1261.js"></script>
  <link href="homepage_format.css" rel="stylesheet"/>
  <link href="search.css" rel="stylesheet"/>

</head>

<style>
    .inputClass{
        width: 100%;
        margin-bottom: 2%;
        height: 40px;
    }
    .borderBottom{
         border-bottom:1px solid #b5abab;
    }

    #myPage{
        padding-top:50px;
    }
</style>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="row" style="border:1px solid #b5abab; margin:2% 10% 0 10%;">


    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3" style="border-right:1px solid #b5abab; text-align:center;">
        <a href="#profileDetails" id="profileDetailsA">Profile</a><br>
        <a href="#accountDetails" id="accountDetailsA">Account</a><br>
        <a href="#myCourses" id="myCoursesA">My Courses</a>

    </div>

    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9"  style=" padding:0;">
        <div id="profileDetails">
            <div style="text-align:center; margin-top:2%;">
                <h5>Profile</h5>
                <span>Add information about yourself to share on your profile</span>
            </div>
            <hr class="borderBottom">
            <div style="margin:1% 10% 0 10%;">
                <span class="inputClass">Basics:
                    <input type="text" placeholder="First Name" name="firstName" id="firstName" class="inputClass">
                    <input type="text" placeholder="Last Name" name="lastName" id="lastName" class="inputClass">
                    <input type="text" placeholder="Headline" name="headline" id="headline" max="60" class="inputClass">
                </span>
                <span class="inputClass">
                    Biography:
                    <input type="text" placeholder="Biography" name="biography" id="biography" class="inputClass">
                </span>
                <select name="language" id="language" class="inputClass">
                    <option value="English">English(US)</option>
                    <option value="French">French</option>
                </select>
            </div>
            <hr class="borderBottom">
            <div style="margin:1% 10% 0 10%;">
                <span>
                    Links:
                    <input type="text" placeholder="Website (http(s)://..)" name="w ebsiteUrl" id="websiteUrl" class="inputClass">
                </span>
            </div>
            <hr class="borderBottom">
            <div style="margin:1% 10% 3% 10%; text-align:center;">
                <input type="button"  on-click="" value="SAVE">
            </div>
        </div>

        <div id="accountDetails">
            <div style="text-align:center; margin-top:2%;">
                <h5>Account</h5>
                <span>Edit your account settings and change your password here</span>
            </div>
            <hr class="borderBottom">
            <div style="margin:1% 10% 0 10%;">
                <span>
                    Username:
                    <input type="text" value="<?php echo $username;?>" name="" id="" class="inputClass" readonly>
                    Email:
                    <input type="text" value="<?php echo $email;?>" name="" id="" class="inputClass" readonly>
                </span>
            </div>
            <hr class="borderBottom">
            <div style="margin:1% 10% 0 10%;">
                <span class="inputClass">
                    Current Password:
                    <input type="text" placeholder="Enter Current Password" name="currentPassword" id="currentPassword" class="inputClass" required>
                    New Password:
                    <input type="text" placeholder="Enter New Password" name="newPassword" id="newPassword" class="inputClass" required>
                    Retype New Password:
                    <input type="text" placeholder="Re-type New Password" name="reNewPassword" id="reNewPassword" class="inputClass" required>
                </span>
            </div>
            <hr class="borderBottom">
            <div style="margin:1% 10% 3% 10%; text-align:center;">
                <input type="button"  on-click="" value="Change Password">
            </div>
        </div>

        <div class="text-center content" id="myCourses" style="margin-top:2%;">
            <h5>My Courses</h5><br>
            <div class="row">
                <?php getMyCourses()?> 
            </div>
        </div>
    
    </div>
</div>

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

<script>
    $(document).ready(function(){
        $("#accountDetails").hide();
        $("#myCourses").hide();

        $("#profileDetailsA").click(function(){
            $("#profileDetails").show();
            $("#accountDetails").hide();
            $("#myCourses").hide();
        });
        $("#accountDetailsA").click(function(){
            $("#accountDetails").show();
            $("#profileDetails").hide();
            $("#myCourses").hide();
        });
        $("#myCoursesA").click(function(){
            $("#accountDetails").hide();
            $("#profileDetails").hide();
            $("#myCourses").show();
        });
    });
</script>



</body>

</html>
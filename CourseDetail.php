<!DOCTYPE html>

<?php

include("functions/functions.php");

?>

<html lang="en" ng-app="BostonPublicLibrary">
<head>
  <title>Homepage_sample</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://use.fontawesome.com/1e6a9a1261.js"></script>
  	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<link href="coursedetail_format.css" rel="stylesheet"/>
	<link href="plugins.css" rel="stylesheet"/>
	<link rel="Stylesheet" type="text/css" href="
http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css
" />
<script  type="text/javascript" src="
http://ajax.microsoft.com/ajax/jquery/jquery-1.4.2.min.js">
</script>
<script type="text/javascript" src="
http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js">
</script>
<script src = "app.js"></script>
<script type="text/javascript">
    $(function ()    {
        $('<div>').dialog({
            modal: true,
            open: function ()
            {
                $(this).load('CourseDetail.php');
            },         
            height: 400,
            width: 400,
            title: 'Dynamically Loaded Page'
        });
    });
</script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" ng-controller="mainController">

<?php

include("header.php");

?>
<div style="margin-top:60px;margin-bottom:10px">
	Classification > Music >
</div>

<div id="instruction" class='headcontainer row' id='#kkk'>

	<?php 

	global $mysqli;

if(isset($_GET['course_id'])){

	$course_id = $_GET['course_id'];

	$get_courses = "select * from course where course_id = '$course_id'";

	$run_courses = mysqli_query($mysqli, $get_courses);

	while($row_courses = mysqli_fetch_array($run_courses)){

	 	$course_id = $row_courses['course_id'];
	// 	$course_cat = $row_courses['course_cat'];
	 	$course_title = $row_courses['course_title'];
	 	$course_price = $row_courses['course_price'];
		$course_image= $row_courses['course_image'];
		$course_video = $row_courses['course_video'];
		$course_desc = $row_courses['course_desc'];

		echo "<div class='col-xl-6 col-lg-6 col-md-8 col-sm-8 col-12 containerword text-center' width='50%'>
<img src='admin/course_images/$course_image' width ='400' height = '300'/>
</div>
<div class='col-xl-6 col-lg-6 col-md-4 col-sm-4 col-12 containerword' width='50%''>
	<h2><strong>$course_title</strong></h2>
	<p>Instructor: Rob Mayzes</p>
	<p>
		<span class='fa fa-star checked'></span>
		<span class='fa fa-star checked'></span>
		<span class='fa fa-star checked'></span>
		<span class='fa fa-star'></span>
		<span class='fa fa-star'></span>
		<span> | </span>
		<span><i class='fa fa-graduation-cap' style='color:orange' aria-hidden='true'></i> 23,000</span>
		<span> | </span>
		<span><i class='fa fa-language' style='color:orange' aria-hidden='true'></i> English</span>
	</p>
	<p>Become a master at using Logic Pro X. Learn how to produce music and record & edit audio to a professional standard.</p>
	<hr>
	<button type='button' class='btn btn-secondary btn-lg btn-block'>Enroll Now</button>
  <br>



</div>";
	}

if($course_video){
echo "  <iframe src = '$course_video' width ='700' height ='325'></iframe>";
}

}



	?>
</div>

<div class="row container">
<main class="col-sm-10 col-md-10 col-lg-10"><div class="rc-Header bt3-row align-horizontal-center" data-reactid="88">
	<div id="description" class="content">
        <h2>Description</h2>
		<hr>
		<p>Hi! Welcome to the Web Developer Bootcamp, the <strong>only course you need to learn web development. <span></span></strong>There are a lot of options for online developer training, but this course is without a doubt the most comprehensive and effective on the market.  Here's why:</p><ul><li>This is the only online course taught by a professional bootcamp instructor.</li><li><strong>94% of my bootcamp students go on to get full-time developer jobs</strong>. Most of them are complete beginners when I start working with them.</li><li>The previous 2 bootcamp programs that I taught cost <strong>$14,000 and $21,000</strong>.  This course is just as comprehensive but with brand new content for a fraction of the price.</li><li>Everything I cover is up-to-date and relevant to today's developer industry.<strong> No PHP or other dated technologies. This course does not cut any corners.</strong></li><li>This is the only complete beginner full-stack developer course that covers NodeJS.</li><li>We build 13+ projects, including a <strong>gigantic production application </strong>called YelpCamp. No other course walks you through the creation of such a substantial application.</li><li>The course is <strong>constantly updated</strong> with new content, projects, and modules.  Think of it as a subscription to a never-ending supply of developer training.</li><li>You get to meet my dog Rusty!</li></ul><p>When you're learning to program you often have to sacrifice learning the exciting and current technologies in favor of the "beginner friendly" classes.  With this course, you get the best of both worlds.  This is a course designed for the complete beginner, yet it covers some of the most exciting and relevant topics in the industry.</p><p>Throughout the course we cover tons of tools and technologies including:</p><ul><li><span><strong>HTML5</strong></span></li><li><span><strong>CSS3</strong></span></li><li><span><strong>JavaScript</strong></span></li><li><span><strong>Bootstrap</strong></span></li><li>SemanticUI</li><li>DOM Manipulation</li><li><span><strong>jQuery</strong></span></li><li>Unix(Command Line) Commands</li><li><span><strong>NodeJS</strong></span></li><li>NPM</li><li><span><strong>ExpressJS</strong></span></li><li>REST</li><li><span><strong>MongoDB</strong></span></li><li>Database Associations</li><li><span><strong>Authentication</strong></span></li><li>PassportJS</li><li>Authorization</li></ul><p>This course is also unique in the way that it is structured and presented. Many online courses are just a long series of "watch as I code" videos.  This course is different. I've incorporated everything I learned in my years of teaching to make this course not only more effective but more engaging. The course includes:<br></p><ul><li>Lectures</li><li>Code-Alongs</li><li>Projects</li><li>Exercises</li><li>Research Assignments</li><li>Slides</li><li>Downloads</li><li>Readings</li><li>Too many pictures of my dog Rusty</li></ul><p>If you have any questions, please don't hesitate to contact me.  I got into this industry because I love working with people and helping students learn.  Sign up today and see how fun, exciting, and rewarding web development can be!</p>
		<div class="audience" data-purpose="course-audience">
            <div class="audience__title">
                Who is the target audience?
            </div>
            <ul class="audience__list">
                <li>This course is for anyone who wants to learn about web development, regardless of previous experience</li>
                <li>It's perfect for complete beginners with zero experience</li>
                <li>It's also great for anyone who does have some experience in a few of the technologies(like HTML and CSS) but not all</li>
                <li>If you want to take ONE COURSE to learn everything you need to know about web development, take this course</li>
            </ul>
        </div>
    </div>
	
	<div id="curriculum" class="content">
		<h2>Course Curriculum</h2>
		<hr>
		<table border=1 class="curriculumtable">
			<tr>
				<td colspan="3">&nbsp;
				<i class="fa fa-plus-square-o dropdown" aria-hidden="true" data-toggle="collapse" data-target=".test" aria-expanded="false" aria-controls=".test"></i>
				&nbsp;&nbsp;Course Introduction</td>
				<td >2 Lectures</td>
				<td>07:01</td>
			</tr>
			<tr class="dropDownTextArea collapse test">
				<td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-video-camera" aria-hidden="true"></i>&nbsp;&nbsp;Introduction</td>
				<td>02:44</td>
			</tr>
			<tr class="dropDownTextArea collapse test">
				<td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-video-camera" aria-hidden="true"></i>&nbsp;&nbsp;Building a Song In Under 120 Seconds</td>
				<td>04:04</td>
			</tr>
			<tr>
				<td colspan="3">&nbsp;
				<i class="fa fa-plus-square-o dropdown" aria-hidden="true" data-toggle="collapse" data-target=".test2" aria-expanded="false" aria-controls=".test2"></i>
				&nbsp;&nbsp;Introduction to Logic Pro X</td>
				<td >6 Lectures</td>
				<td>16:46</td>
			</tr>
			<tr class="dropDownTextArea collapse test2">
				<td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-video-camera" aria-hidden="true"></i>
				&nbsp;&nbsp;Introduction to 'Interface and Basics'</td>
				<td>02:00</td>
			</tr>
			<tr class="dropDownTextArea collapse test2">
				<td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-video-camera" aria-hidden="true"></i>
				&nbsp;&nbsp;What is a DAW?</td>
				<td>02:28</td>
			</tr>
			<tr class="dropDownTextArea collapse test2">
				<td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-video-camera" aria-hidden="true"></i>
				&nbsp;&nbsp;Why Logic Pro?</td>
				<td>02:00</td>
			</tr>
			<tr class="dropDownTextArea collapse test2">
				<td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-video-camera" aria-hidden="true"></i>
				&nbsp;&nbsp;Creating a Project</td>
				<td>02:00</td>
			</tr>
			<tr class="dropDownTextArea collapse test2">
				<td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-video-camera" aria-hidden="true"></i>
				&nbsp;&nbsp;Understanding The Interface</td>
				<td>02:00</td>
			</tr>
			<tr class="dropDownTextArea collapse test2">
				<td colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-video-camera" aria-hidden="true"></i>
				&nbsp;&nbsp;Understand Channels</td>
				<td>02:00</td>
			</tr>
		</table>
	</div>
	
	<div id="instructor" class="content">
		<h2>About the Instructor</h2>
		<hr>
		<div class="row">
			<div width="50%" class="col-md-3 col-lg-3">
				<img src="team/member1.jpeg">
				<div style="text-align:center">
					<p>Rob Mayzes</p>
					<p>Musician & Entrepreneur</p>
				</div>
			</div>
			<div width="50%" class="col-md-9 col-lg-9">
			- Professional mixer and musician. Founder of Musician on a Mission, an online learning resource for musicians and home recordists with over 25,000 subscribers.

- Successful entrepreneur and co-founder of Sweet Marketing, a global social media management agency.

I worked in a range of studios in London thorough my teenage years and early twenties, both as an professional engineer and musician...

But then my interests shifted to building businesses, and eventually teaching!

So, now I want to help YOU to achieve your biggest music and business goals. Let's do this :)
			</div>
		</div>
	</div>
			
			
	<div id="feedback" class="content">
		<h2>Student Feedback</h2>
		<hr>
		<div>
			<div class="row">
				<div width="50%" class="col-md-6 col-lg-6">
				<h4>Total Rating</h4>
				</div>
				<div width="50%" class="col-md-6 col-lg-6">
					<p>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					3</p>
				</div>
			</div>
			<hr>
			<div class="row">
				<div width="50%" class="col-md-6 col-lg-6">
				<h4>Reviews</h4>
				</div>
				<div width="50%" class="col-md-6 col-lg-6">
				<p>2,800 Comments&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="tooltip" title="pop up new window in the current window">see all</a></p>
				</div>
			</div>
			<hr>
			<div>
				<div>
					<p>Very much enjoying the content. Some edits have been missed, but it doesn't get in the way too much. A little more indication as to exactly the content of each lecture would be useful when you want to go back and search for a particular skill.</p>
					<p>Cameron Goodall  13 days ago</p>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
					<hr>
				</div>
				<div>
					<p>I have been doing music from time to time since 15 years. During this time I have had soooo many questions.. of course.. this is not my area... but it´s something I really enjoy to do... I would recommend this course 100%...</p>
					<p>Luis Santana  21 days ago</p>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<hr>
				</div>
				<div>
					<p>Toller Kurs. Ich kann aber wirklich gut englisch. Könnte mir vorstellen mit Schulenglisch schwer zu verstehen, da Rob oft silben "verschluckt". Daher einen halben Stern Abzug. Inhalt finde ich sehr gelungen.
Mein Logic Level: Anfänger.</p>
					<p>Roman Stark  3 months ago</p>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<hr>
				</div>
			</div>
		</div>
		
		
		
		
		
		
		
		
		
	</div>	
		
</main>

<section class="hidden-xs col-sm-2 col-md-2 col-lg-2">
	<div id="sideBar" class="card" style="width: 250px; ">
		<div class="inner-container" >
			<div class="list-group">
				<a href="#description" class="list-group-item list-group-item-action">Description</a>
				<a href="#curriculum" class="list-group-item list-group-item-action">Courses Curriculum</a>
				<a href="#instructor" class="list-group-item list-group-item-action">About Instructor</a>
				<a href="#feedback" class="list-group-item list-group-item-action">Student Feedback</a>
			</div>
			<div class="enroll-button-container" style="background-color:#F7F7F7">
				<div class="enroll-button-inner bgcolor-white text-center" >
					<h5>
					<span >Music + Audio Production in Logic Pro X - The Complete Guide</span></h5>
					<button class="btn btn-secondary btn-lg btn-block">
					Enroll Now
					</button>
				</div>
			</div>
		</div>
	</div>
</section>
</div>






<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
				scrollFunction();
				sidescrollFunction();
				};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

function sidescrollFunction() {
	var distanceToTop = document.documentElement.scrollTop || document.body.scrollTop;
	var visibleHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight; 
    
	if (distanceToTop >= document.getElementById("instruction").clientHeight) {
		document.getElementById("sideBar").style.top = "80px";
        document.getElementById("sideBar").style.position = "fixed";
    } 
	else {
		document.getElementById("sideBar").style.position = "relative";
		document.getElementById("sideBar").style.top = "0px";
        document.getElementById("sideBar").style.display = "block";
    }
	
	if(distanceToTop >= document.documentElement.scrollHeight -visibleHeight -document.getElementById("footer").clientHeight){
		document.getElementById("sideBar").style.position = "relative";
		document.getElementById("sideBar").style.display = "block";
	}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


</script>

<footer class="text-center" id="footer">

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
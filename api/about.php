<?php
include("functiona.php");
$f = new functiona();
session_start();
$admin=0;
if(isset($_SESSION["admin"]))
  $admin=$_SESSION["admin"];

$sql = "select * from article";
$result = $f->tabledata($sql);
//print_r($result);
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Joyfest</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/jpg" sizes="16x16" href="../img/icon.png">
<!--Css files-->

      <!--Css files-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
      <link href='../css/rotating-card.css' rel='stylesheet' />
      <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/landing.css">
      <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>

  <body>
    <style type="text/css">
        body{
            background-image: url("bg.png");
            background-repeat: auto;
        }
	</style>
    <div id="custom-bootstrap-menu" class="navbar navbar-sinwar" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navbar-menubuilder">
				<ul class="nav nav-justified ">
					<li><a href="../index.php">HOME</a>
					</li>
					<li><a href="event.php">EVENTS</a>
					</li>
					<li><a href="gallery.php">GALLERY</a>
					</li>
					<li><a href="articles.php">ARTICLES</a>
					</li>
					<li><a href="members.html">COMMITTEE</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
    <a  name="about"></a>
      <div class="content-section-a" style="margin-top:5%; margin-left:5%; margin-right:5%; border: solid 3px #e65c00;">

          <div class="container">
              <div class="row">
                <div class="col-md-1"></div>	
                  <div class="col-md-5">
						<hr class="section-heading-spacer">
						<div class="clearfix"></div>
						<h2 class="section-heading">What is Joyfest?</h2>
						<p class="lead">Joy Fest is a national movement where students do acts of giving, and get together as one for the underprivileged.Colleges students, teachers, principals, and NGOs come together for a noble cause. 500,000 students will be part of the Largest Youth Movement. Volunteers in 20 cities and 500 colleges!</p>
                  </div>
                  <div class="col-md-5">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Our Aim</h2>
                    <blockquote class="lead">The main aim of JOYFEST, an initiative of JAM Magazine is to sensitise the youth to the issues related to the underprivileged and to connect to them at a human level. JOYFEST will bring together the youth of India in the spirit of the Joy of Giving.</blockquote>
                  </div>
                  <div class="col-md-1"></div>
              </div>

          </div>
          <!-- /.container -->


          <div class="container">

              <div class="row">
                <div class="col-md-1"></div>
                  <div class="col-md-5">
                      <hr class="section-heading-spacer">
                      <div class="clearfix"></div>
                      <h2 class="section-heading">Where we Are???</h2>
                      <p class="lead">This is the place where we mostly conducting our activities...</p>
                  </div>
                  <div class="col-md-5" >
                      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14883.097210042662!2d72.7855616!3d21.1613784!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x238a612304b01088!2sSardar+Vallabhbhai+National+Institute+of+Technology!5e0!3m2!1sen!2sin!4v1445519799867" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
              </div>
              <div class="col-md-1"></div>

          </div>
          <!-- /.container -->

      </div>
      <!-- /.content-section-a -->

      <!--Contact form -->
      <div class="content-section-b">

          <div class="container">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading">Contact Us</h2>



            <form action="contact.php" method="post" class="form col-md-12 center-block">
            <input type="text" class="form-control input-lg" name="name" placeholder="Your name" required><br>
            <input type="text" class="form-control input-lg" name="email" placeholder="Your Email" required><br>
            <textarea name="comments" rows="3" class ="form-control input-lg ckeditor" id="editor1" placeholder="Comment here"></textarea><br>
            <input type="submit" name="cmd" class="btn btn-primary btn-xl btn-block" value="Submit">
            </form>
          </div>
      </div>

      <!--Contact form ends-->
<!--Js files-->
    <script type="text/javascript" src="../js/imagenav.js"></script>
    <script type="text/javascript" src="../js/custom.js"></script>
    <script src="../js/index.js"></script>
  </body>
</html>

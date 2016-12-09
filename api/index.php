<?php
include("api/functiona.php");
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
<html lang="en">
<head>
  <!--meta tags-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>JoyFest</title>

  <!--google fonts-->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>

  <!--css links-->
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">

  <!--icon-->
  <link rel="icon" href="#">
  <!--font awesome icons-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!--bootstrap links-->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <!--<script type="text/javascript" src="open.js"></script>-->
  <script src="js/jquery.min.js"></script>
  <!--script for smiles-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
  <script type="text/javascript">
  // Wait for window load
  $(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
  </script>
 </head>
 <body>
  <!--preloader-->
  <div class="se-pre-con">
    <h2 style="margin:20%; color:#e65c00; text-align:center; font-weight:bold;">JOYFEST 2K16</h2>
  </div>
   <div id="custom-bootstrap-menu" class="navbar navbar-sinwar" role="navigation">
     <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav ">
                <li><a href="about.php">ABOUT</a>
                </li>
                <li><a href="event.php">EVENTS</a>
                </li>
                <li><a href="gallery.php">GALLERY</a>
                </li>
                <li><a href="articles.php">ARTICLES</a>
                </li>
                <li><a href="ngo.html">NGOs</a>
                </li>
            </ul>
        </div>
    </div>
  </div>
   <div class="fullscreen-bg">
    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        <source src="video/joyfest.mp4" type="video/mp4">
        <source src="video/joyfest.ogv" type="video/ogg">
        <source src="video/joyfest.webm" type="video/webm">
    </video>
   </div>
   <article class="landing">
        <div class="landing-content">
            <img src="images/joy.png" width="40%" height="20%" class="animated pulse">
            <!--<p class="dates">Coming soon....</p>-->
            <!--<p class="dates">February 19<sup>th</sup>, 20<sup>th</sup> and 21<sup>st</sup></p>-->
        </div>
    </article>
    <br><br><br><br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="social" style="float:right;">
            <a href="https://www.facebook.com/joyfest.svnit/" class="btn btn-default" style="color: #e65c00;"><i class="fa fa-facebook fa-3x" style="padding-left:5px; padding-right:5px;"></i></a>
            <a href="https://youtu.be/zz9dnHDlxEM"  class="btn btn-default" style="color: #e65c00;"><i class="fa fa-youtube fa-3x" style="padding-left:5px; padding-right:5px;"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div style="float:right; margin-top:5px;">
            <a href="members.html" class="btn btn-default" style="color: #e65c00; line-height:50px;"><h3>COMMITTEE</h3></a>
          </div>
        </div>
      </div>
    </div>
    </body>
 </html>
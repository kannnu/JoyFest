<?php
include("functiona.php");
$f = new functiona();
session_start();
$admin=0;
if(isset($_SESSION["admin"]))
	$admin=$_SESSION["admin"];

$sql = "select * from article order by article_id desc";
$result = $f->tabledata($sql);
//print_r($result);
function truncate($mytext,$id) {
    //Number of characters to show
    $chars = 200;
    $mytext = substr($mytext,0,$chars);
    $mytext = substr($mytext,0,strrpos($mytext,' '));
  //  $mytext = $mytext." <a href='read.php?id=$id'>read more...</a>";
    return $mytext;
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JoyFest</title>
  <link rel="icon" type="image/jpg" sizes="16x16" href="../img/icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Google Webfonts -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- Salvattore -->
  <link rel="stylesheet" href="css/salvattore.css">
  <!-- Theme Style -->
  <link rel="stylesheet" href="css/stile.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  </head>
  <body>
    <style type="text/css">
        body{
            background-image: url("bg.png");
            background-repeat: auto;
        }
   </style>
    <!--Navbar Code-->
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
  <!--header of articles file-->
  <header id="fh5co-header" role="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a class="navbar-brand" href="articles.php">Articles</a>    
        </div>
      </div>
    </div>
  </header>
  <!-- END .header -->
  
<!--main contanier of articles-->
  <div id="fh5co-main">
    <div class="container">
      <div class="row">
        <div id="fh5co-board" data-columns>
         <?php
          foreach($result as $article)
         {
           echo '
          <div class="item">
            <div class="animate-box">
              <a href="images/joy.png" class="image-popup fh5co-board-img" title="'.$article[2].'"><img src="images/joy.jpg" alt="JoyFest Article"></a></div>
            <div class="fh5co-desc">'.$article[1].'</div>
          </div>
        ';
        }
        ?>
          </div>
        </div>
      </div>
  </div>
  <!--<div id="fh5co-main">
    <div class="container">

      <div class="row">

        <div id="fh5co-board" data-columns>

          <div class="item">
            <div class="animate-box">
              <a href="images/joy.png" class="image-popup fh5co-board-img" title="Hey you i wannna say one thing to you that i hate peoop;e who dont take me seriouslylore  lorem"><img src="images/joy.jpg" alt="JoyFest Article"></a></div>
            <div class="fh5co-desc">2-4-15 Sinwar Prem</div>
          </div>
        </div>
        </div>
       </div>
  </div>-->
  <!--END main-->

  <!--Footer-->
  <footer id="fh5co-footer">
    
    <div class="container">
      <div class="row row-padded">
        <div class="col-md-12 text-center">
          <p class="fh5co-social-icons">
            <a href="#"><i class="icon-facebook-lg"></i></a>
            <a href="#"><i class="icon-youtube-lg"></i></a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!--END footer-->

  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <!-- Salvattore -->
  <script src="js/salvattore.min.js"></script>
  <!-- Main JS -->
  <script src="js/main.js"></script>
  </body>
</html>
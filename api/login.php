<?php
//opening page
include("functiona.php");
session_start();
$f = new functiona();
//received values from form
if(isset($_POST["uname"])) $u_name=$_POST["uname"];
if(isset($_POST["password"])) $password=$_POST["password"];
if(isset($_POST["article_head"])) $article_head=$_POST["article_head"];
if(isset($_POST["article_body"])) $article_body=$_POST["article_body"];
if(isset($_POST["title"])) $title=$_POST["title"];
if(isset($_POST["content"])) $content=$_POST["content"];
if(isset($_POST["event_date"])) $date=$_POST["event_date"];
if(isset($_POST["email"])) $email=$_POST["email"];
if(isset($_POST["comment"])) $comment=$_POST["comment"];
if(isset($_POST["cmd"])) $cmd=$_POST["cmd"];
if(isset($_POST["gallery_title"])) $gtitle=$_POST["gallery_title"];
if(isset($_POST["gallery_description"])) $gdecription=$_POST["gallery_description"];
if(isset($_POST["img[]"])) $gimg=$_POST["img[]"];
if(isset($_POST["gallery_year"])) $gyear=$_POST["gallery_year"];

if($cmd=='Log In')
{
	if(!isset($u_name) || !isset($password))
	{
		header("Location: ../html/login.html");
	}
	else
	{
		$row=array();
		$sql = "Select admin_id, admin_password from login where admin_name = '$u_name'";
		$result = $f->tabledata($sql);
		$result = $result[0];
		$encrypted_password=md5($password);
		if($result[1]==$encrypted_password)
		{
			$_SESSION['admin'] = $result[1];
   			header("Location: admin_home.php");
		}
		else
		{
			//$q="Wrong username or password.";
			header("Location: ../html/login.html");
		}
	}
}

else if($cmd=='Upload article')
{
	$today = getdate();
	$date=$today[year]."-".$today[mon]."-".$today[mday];
	$sql = "insert into article values ('','$article_head','$article_body','$date')";
	$f->exe($sql);
	header("Location: index.php");
}
else if($cmd=='Create event')
{
	$sql = "insert into article values ('','$article_head','$article_body','$date')";
	$f->exe($sql);
	header("Location: index.php");
}
else if($cmd=='Create event')
{
	$path=$todir.basename($_FILES['img']['name']);
	$path1=$todir.$_FILES['img']['name'];
         move_uploaded_file( $_FILES['img']['tmp_name'],$path1);
	$sql = "insert into article values ('','$title','$path1','$content','$date')";
	$f->exe($sql);
	header("Location: index.php");
}
else if($cmd=='Comment')
{
	$sql = "insert into comment values ('','$u_name','$email','$comment')";
	$f->exe($sql);
	header("Location: index.php");
}
?>

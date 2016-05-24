<?php
session_start();
if(isset($_SESSION['name'])){
	header("location: admin/index.php");
	exit();
}


$msg = "";
if(isset($_POST['username'])){
	$admin = $_POST['username'];
	$password = $_POST['password'];
	$admin = stripslashes($admin);
	$password = stripslashes($password);
	$admin = strip_tags($admin);
	$password = strip_tags($password);
	if((!$admin) || (!$password)){
		$msg = "<p style='color: #CC0; font-weight: bold;'>Логин или пароль неверный!</p>";
	}else{
		$admin = mysql_real_escape_string($admin);
		$password = md5($password);
		include_once("connect.php");
		$sql = mysql_query("SELECT * FROM admin WHERE name='$admin' AND password='$password' LIMIT 1");
		$count = mysql_num_rows($sql);
		if($count > 0){
			while($row = mysql_fetch_array($sql)){
				$s_id = $row['id'];
				$s_name = $row['name'];
				$s_pass = $row['password'];
				$_SESSION['id'] = $s_id;
				$_SESSION['name'] = $s_name;
				$_SESSION['password'] = $s_pass;
				mysql_query("UPDATE admin SET last_log=now() WHERE name='$s_name' LIMIT 1");
				
			}
			header("location: admin/index.php");
				exit();
		}else{
			$msg = "<p style='color: #C00; font-weight: bold;'>Логин или пароль неверный!</p>";
		}
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Admin</title>

	<meta name="description" content="..." />
	<meta name="keywords" content="..." />

	<style type="text/css" media="all">
		@import url("css/style.css");
		@import url("css/nivo-slider.css");
		@import url("css/custom-nivo-slider.css");
		@import url("css/jquery.fancybox.css");
	.wrapper h1 {
	font-family: "Times New Roman", Times, serif;
	font-size: 36px;
	color: #FFF;
	font-weight: bold;
}
    .wrapper h {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}
    </style>
	
	<!--[if lt IE 8]><style type="text/css" media="all">@import url("css/ie.css");</style><![endif]-->

</head>




<body>
	
	<div id="bgc">
							
		<div class="wrapper">		<!-- wrapper begins -->



  <h>
    <h1>AiBa </h1>
</h>         


		  <div id="header">
		    <ul>
			  <li><a href="index.php" class="active">Главная страница</a></li>
					<li><a href="page.php">О нас</a></li>
					<li><a href="portfolio.php">Меню</a></li>
					<li><a href="blog_post.php">Отзывы</a></li>
                    <li><a href="contact.php">Письмо начальству</a></li>
					 <li><a href="vxod.php">Вход</a></li>
					<li><a href="login.php">Регистрация</a></li>
			</ul>
		  </div>		<!-- #header ends -->
			
			
			
			
			
			
			
			
			
			
			<div id="holder">
			
			<h1 align=center>Администрация</h1>
			<br/>
			
				
<form action="admin.php" method="post" enctype="multipart/form-data">
<table width="100%" cellpadding="3" cellspacing="3" border="3">
            <table width="100%" cellpadding="3" cellspacing="3" border="0">
                <tr>
                    <td align="center" colspan="2"><h2>Вход</h2></td>
                </tr>
                <tr>
                    <td align=center><label>Логин:
					<input type="text" name="username" class="text_input" maxlength="20" /></td>
                </tr>
                <tr>
                    <td align="center"><label>Пароль:</label>
					<input type="password" name="password" class="text_input" maxlength="20" /></td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><input type="submit" name="submit" id="button" value="Входите!"/></td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><?php echo $msg; ?></td>
                </tr>
            </table>
</table>
        </form>
			
			
			</div>		<!-- #holder ends -->
			
			
			
			
			
			
			
			
			<div id="logos">
				<ul>
					<li><a href="http://meyramgroup.kz/ru/meyram-group/bahchi-saray/about_restaurant.html/"><img src="img/22.png" alt="photo" /></a></li>
					<li><a href="http://meyramgroup.kz/ru/meyram-group/kok-saray-2/o-restorane.html/"><img src="img/33.png" alt="photo" /></a></li>
					<li><a href="http://meyramgroup.kz/ru/meyram-group/macaroni/o-restorane.html/"><img src="img/44.png" alt="photo" /></a></li>
					<li><a href="http://meyramgroup.kz/ru/meyram-group/tandir/o-restorane.html/"><img src="img/55.png" alt="photo" /></a></li>
				</ul>
			</div>		<!-- #logos ends -->
			
			
			
			
			
			
			
			
			
			
			<div id="footer">
			  <p class="right">Все права защещины: asssel009@gmail.com</p>
			</div>		<!-- #footer ends -->
			
			
		
		</div>		<!-- wrapper ends -->
		
	
	</div>




	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="js/jquery.easing.pack.js"></script>
	<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
	<script type="text/javascript" src="js/filter.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	
	<!-- Twitter badge-->
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
	<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/enstyled.json?callback=twitterCallback2&amp;count=1"></script>
	
		
</body>
</html>
<?php
include_once("check_log.php");
include_once("connect.php");

$email = "";
$password = "";
$msg_error = "";

$msg = "";
if(isset($_POST['email'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password = stripslashes($password);
	$password = strip_tags($password);
	if((!$email) || (!$password)){
		$msg_error = "<p style='color: #CC0; font-weight: bold;'>Логин или пароль неправильный!</p>";
	}else{
		$email = mysql_real_escape_string($email);
		$password = md5($password);
		include_once("connect.php");
		$sql = mysql_query("SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1");
		$count = mysql_num_rows($sql);
		if($count > 0){
			while($row = mysql_fetch_array($sql)){
				$s_id = $row['id'];
				$s_email = $row['email'];
				$s_pass = $row['password'];
				$_SESSION['id'] = $s_id;
				$_SESSION['email'] = $s_email;
				$_SESSION['password'] = $s_pass;
				mysql_query("UPDATE users SET last_log=now() WHERE email='$s_email' LIMIT 1");
				
			}
			header("location: index.php");
				exit();
		}else{
			$msg_error = "<p style='color: #C00; font-weight: bold;'>Логин или пароль неправильный!</p>";
		}
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Войти</title>

	<meta name="description" content="..." />
	<meta name="keywords" content="..." />

	<style type="text/css" media="all">
		@import url("css/style.css");
		@import url("css/nivo-slider.css");
		@import url("css/custom-nivo-slider.css");
		@import url("css/jquery.fancybox.css");
	</style>
	
	<!--[if lt IE 8]><style type="text/css" media="all">@import url("css/ie.css");</style><![endif]-->

</head>




<body>
	
	<div id="bgc">
							
		<div class="wrapper">		<!-- wrapper begins -->



			  <div id="header">
				<h1><a href="#"><span>Ресторан AiBa</span></a></h1>
				
				<ul>
					<li><a href="index.php" class="active">Главная страница</a></li>
					<li><a href="page.php">О нас</a></li>
					<li><a href="portfolio.php">Меню</a></li>
					<li><a href="blog_post.php">Отзывы</a></li>
                    <li><a href="contact.php">Письмо начальству</a></li>
					<?php
	      if($status == 1){
			  echo '
			      <li>
                                <div id="cart_header">
                                    <a href="zakaz.php" style="text-decoration:none; color: #FFF;">Заказать</a> | <a href="logout.php" style="text-decoration:none; color: #FFF;">Выход</a>
                                </div>
                                </li>
			  ';
		  }else{
			 echo ' <li><a href="vxod.php">Вход</a></li>
					<li><a href="login.php">Регистрация</a></li>';
		  }
	  ?>
				</ul>
			</div>		<!-- #header ends -->
			
			
			
			<div id="holder">
			<li><a href="admin/index.php">Администрация</a></li>
			<h1 align=center>Вход</h1>
			<div align=center>
			                <form action="vxod.php" method="post">
                                <table cellpadding="3" cellspacing="3" border="0">
                                    <tr>
                                        <td><input type="email" name="email" class="text_input" style="width: 250px; height: 25px;" maxlength="80" placeholder="Логин"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="password" name="password" class="text_input" style="width: 250px; height: 25px;" maxlength="50" placeholder="Пароль"/></td>
                                    </tr>
                                    <tr>
                                        <td  align=center><input type="submit" name="submit" value="Войдите" id="button"/></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $msg_error; ?></td>
                                    </tr>
                                </table>
                            </form>
					</div>		
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
			  <p class="right">Все права защищены: bayan06.977@gmail.com</p>
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
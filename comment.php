<?php

include_once("connect.php");

$msg= "";
if(isset($_POST['full_name'])){
	$full_name = $_POST['full_name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];
	////////////////////////////////////////////////
	$full_name = strip_tags($full_name);
	$email = strip_tags($email);
	$comment = strip_tags($comment);
	////////////////////////////////////////////////
	$full_name = stripslashes($full_name);
	$email = mysql_real_escape_string($email);
	$comment = stripslashes($comment);
	////////////////////////////////////////////////
	if((!$full_name) || (!$email) || (!$comment)){
		$msg = "<p style='color: #C00; font-weight: bold; font-size: 18px; font-family: arial;'>Пополните все данные!</p>";
	}else{
		include_once("connect.php");
			$sql = mysql_query("INSERT INTO comment(full_name, email, comment, date) VALUES('$full_name','$email','$comment', now())");
			$msg = "<p style='color: #0C0; font-weight: bold;'>Отправлено!</p>";
	}
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Welcome to Barvilla</title>

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
    <h1>BarVilla </h1>
</h>         


		  <div id="header">
		    <ul>
			  <li><a href="index.php" class="active">Главная страница</a></li>
					<li><a href="contact.php">Сообщении</a></li>
					<li><a href="#">Пользователи</a></li>
					<li><a href="check.php">Отзывы</a></li>
                    <li><a href="#">Письмо начальству</a></li>
					<li><a href="logout.php">Выход</a></li>
			</ul>
		  </div>		<!-- #header ends -->
			
			
			
			
			
			
			
			
			
			
			<div id="holder">
			
			
			
			</div>		<!-- #holder ends -->
			
			
			
			
			
			
			
			
			<div id="logos">
				<ul>
					<li><a href="http://meyramgroup.kz/ru/meyram-group/barvilla/o-restorane.html/"><img src="img/1.png" alt="photo" /></a></li>
					<li><a href="http://meyramgroup.kz/ru/meyram-group/bahchi-saray/about_restaurant.html/"><img src="img/2.png" alt="photo" /></a></li>
					<li><a href="http://meyramgroup.kz/ru/meyram-group/kok-saray-2/o-restorane.html/"><img src="img/3.png" alt="photo" /></a></li>
					<li><a href="http://meyramgroup.kz/ru/meyram-group/macaroni/o-restorane.html/"><img src="img/4.png" alt="photo" /></a></li>
					<li><a href="http://meyramgroup.kz/ru/meyram-group/tandir/o-restorane.html/"><img src="img/5.png" alt="photo" /></a></li>
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
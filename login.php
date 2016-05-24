<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Registration</title>

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
			
			<h1 align=center>Регистрация</h1>
			<br/>
			
				<?php

include_once("connect.php");
include_once("check_log.php");
//////////////////////////////////////////////////
$full_name = "";
$city = "";
$phone = "";
$email = "";
$password = "";
$address = "";
$ip = "";
$msg = "";
if(isset($_POST['full_name'])){
	$full_name = $_POST['full_name'];
	$city = $_POST['city'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	
	///////////////////////////////
	$full_name = strip_tags($full_name);
	$city = strip_tags($city);
	//$phone = strip_tags($phone);
	$password = strip_tags($password);
	//$address = strip_tags($address);
	///////////////////////////////
	$full_name = stripslashes($full_name);
	$city = stripslashes($city);
	//$phone = stripslashes($phone);
	$password = stripslashes($password);
	//$address = stripslashes($address);
	//////////////////////////////
	$full_name = mysql_real_escape_string($full_name);
	$phone = $phone = stripslashes($phone);
	$email = mysql_real_escape_string($email);
	/////////////////////////////
	if((!$full_name)  || (!$city) || (!$phone) || (!$password) || (!$address) || (!$email)){
		$msg .= "Пополните все данные!<br/>";
	}else{
		include_once("connect.php");
		$email_check = mysql_query("SELECT email FROM users WHERE email='$email' LIMIT 1");
		$count_email = mysql_num_rows($email_check);
		if(strlen($full_name) < 10){
			$msg .= "Вставьте действительное имя.<br/>";
		}else if(strlen($phone) < 9){
			$msg .= "Введите действительный номер.<br/>";
		}else if(strlen($password) < 6){
			$msg .= "Пароль должен содержать минимум 6 символов.<br/>";
		}else if(strlen($address) < 12){
			$msg .= "Введите действительный адрес.<br/>";
		}else if(strlen($email) < 9){
			$msg .= "Введите действительный логин<br/>";
		}else if($count_email == 1){
			$msg .= "Этот логин уже занят другим ползователям.<br/>";
		}else{			
			$password = md5($password);
			$ip = $_SERVER['REMOTE_ADDR'];
			$sql = mysql_query("INSERT INTO users(full_name, city, phone, email, password, address, ip, signup) VALUES('$full_name','$city','$phone','$email','$password','$address','$ip',now())");
			header("location: success_register.php");
			exit();
		}
	}
}
?>
<form method="post" action="login.php" enctype="multipart/form-data">
                            <table width="100%" cellpadding="4" cellspacing="4" border="0">
                                <tr>
                                    <td align="right" width="150"><label>Полное имя*:</label></td>
                                    <td align="left"><input type="text" name="full_name" class="text_input" maxlength="255" /></td>
                                </tr>
                                <tr>
                                    <td align="right" width="150"><label>Город*:</label></td>
                                    <td align="left">
                                        <select name="city" class="text_input">
                                        <option value=""></option>
                                        <option value="Актау">Актау</option>
                                        <option value="Актобе">Актобе</option>
                                        <option value="Алматы">Алматы</option>
                                        <option value="Астана">Астана</option>
                                        <option value="Атырау">Атырау</option>
                                        <option value="Жезказган">Жезказган</option>
                                        <option value="Караганды">Караганды</option>
                                        <option value="Кокшетау">Кокшетау</option>
                                        <option value="Кызылорда">Кызылорда</option>
                                        <option value="Павлодар">Павлодар</option>
                                        <option value="Семипалатинск">Семипалатинск</option>
                                        <option value="Талдыкорган">Талдыкорган</option> 
                                        <option value="Тараз">Тараз</option> 
                                        <option value="Ускаменагорск">Ускаменагорск</option> 
                                        <option value="Шымкент">Шымкент</option> 
                                        </select>
                                    </td>
                                </tr>
                               <tr>
                                   <td align="right"><label>Телефон*:</label></td>
                                   <td align="left"><input type="number" name="phone" class="text_input" maxlength="11" /></td>
                               </tr>
                               <tr>
                                   <td align="right"><label>Логин*:</label></td>
                                   <td align="left"><input type="email" name="email" class="text_input" maxlength="100" /></td>
                               </tr>
                               <tr>
                                   <td align="right"><label>Пароль*:</label></td>
                                   <td align="left"><input type="password" name="password" class="text_input" maxlength="20" /></td>
                               </tr>
                               <tr>
                                   <td align="right"><label>Адрес*:</label></td>
                                   <td align="left">
                                       <textarea name="address" style="width:300px;height:80px;padding:5px;resize:none"></textarea>
                                   </td>
                               </tr>
                               <tr>
                                   <td align="center" colspan="2"><input type="submit" name="submit" id="button" value="Создать"/></td>
                               </tr>
                               <tr>
                                   <td align="center" colspan="2"><?php echo $msg; ?></td>
                              </tr>
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
			  <p class="right">Все права защещины: bayan06.977@gmail.com</p>
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
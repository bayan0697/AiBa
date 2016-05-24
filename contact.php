<?php

include_once("connect.php");
include_once("check_log.php");
///
$msg= "";
if(isset($_POST['msg_name'])){
	$msg_name = $_POST['msg_name'];
	$msg_email = $_POST['msg_email'];
	$msg_subject = $_POST['msg_subject'];
	$msg_message = $_POST['msg_message'];
	////////////////////////////////////////////////
	$msg_name = strip_tags($msg_name);
	$msg_email = strip_tags($msg_email);
	$msg_subject = strip_tags($msg_subject);
	$msg_message = strip_tags($msg_message);
	////////////////////////////////////////////////
	$msg_name = stripslashes($msg_name);
	$msg_email = mysql_real_escape_string($msg_email);
	$msg_subject = stripslashes($msg_subject);
	$msg_message = stripslashes($msg_message);
	////////////////////////////////////////////////
	if((!$msg_name) || (!$msg_email) || (!$msg_subject) || (!$msg_message)){
		$msg = "<p style='color: #C00; font-weight: bold; font-size: 18px; font-family: arial;'>Пополните все данные!</p>";
	}else{
		include_once("connect.php");
			$sql = mysql_query("INSERT INTO messages(msg_name, msg_email, msg_subject, msg_message, msg_date) VALUES('$msg_name','$msg_email','$msg_subject','$msg_message', now())");
			$msg = "<p style='color: #0C0; font-weight: bold;'>Отправлено!</p>";
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Blur Studio &#9679; Contact us</title>

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
                                
                                    <a href="zakaz.php" style="text-decoration:none; color: #FFF;">Заказать</a> | <a href="logout.php" style="text-decoration:none; color: #FFF;">Выход</a>
                                
                                </li>
			  ';
		  }else{
			 echo ' <li><a href="login.php">Регистрация</a></li><li><a href="vxod.php">Вход</a></li>';
		  }
	  ?>
				</ul>
			</div>		<!-- #header ends -->
			
			
			
			<div id="holder">
			
			
			
			
			
				<div class="pagetitle">
					<h2>Письмо начальству</h2>
				</div>
				
				
				
				
				
				
				
				
				
				<div id="content">
					
					
					
					
					<div id="wide" class="contact">
						
						<p>Эта страница создана для наших пользователей для того чтобы вы могли связаться с нами в любое время. Давать рефлексию и давать рекомендации для улучшения нашего ресторанного бизнеса. </p>
												
			
						<div class="clear sep"></div>
			
						
						<?php
							// This returns the success / error message.
							if(isset($_POST['mail'])) { echo $message; }
						?>
						
						<form action="contact.php" method="post">
						
							<fieldset class="left">
                                    <p>
                                        <td align="right" width="150"><label>Полное имя:</label></td>
                                        <td align="left"><input type="text" name="msg_name" class="text" maxlength="100" /></td>
                                    </p>
                                    <p>
                                        <td align="right"><label>Email адрес:</label></td>
                                        <td align="left"><input type="email" name="msg_email" class="text" maxlength="80" /></td>
                                    </p>
                                    <p>          
                                        <td align="right"><label>Телефон:</label></td>
                                        <td align="left"><input type="text" name="msg_subject" class="text" maxlength="50" /></td>
                                    </p>	
							</fieldset>
							
							<fieldset class="right">
								<p>
                                        <td align="right"><label>Сообщение:</label></td>
                                        <td align="left">
                                            <textarea name="msg_message" style="width:300px;height:100px;padding:5px;resize:none">
                                            </textarea>
                                        </td>
                                    </p>
                                    <p>
                                        <td align="center" colspan="2"><input type="submit" name="submit" id="button" value="Отправить"/></td>
                                    </p>
                                    <p>
                                        <td align="center" colspan="2"><?php echo $msg; ?></td>
                                    </p>
							</fieldset>
							
						</form>
						
					</div>		<!-- #wide ends -->
					
					
					
					
					
					
					
					
				</div>		<!-- #content ends -->
			
			
			
			
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
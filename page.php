
<?php

include_once("check_log.php");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>AiBa-About us</title>

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
 <h>
 <h1>&nbsp;</h1>
    <h1>AiBa
    </h1>
  </h>         



  <h1>&nbsp;</h1>
  <div id="header">
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
			 echo ' <li><a href="vxod.php">Вход</a></li>
			 
					<li><a href="login.php">Регистрация</a></li>';
		  }
	  ?>
				</ul>
			</div>		<!-- #header ends -->
			
			
			
			
		
			
			
		  <div id="holder">
			
			
			
			
			
				<div class="pagetitle">
					<h2>О нас</h2>
					<ul>
						<li>
						  <h5><a href="zakaz.php" class="quotelink">Сделать заказ!</a></h5>
						</li>
					</ul>
				</div>
				
				
				
				
				
				
				
				
				
				<div id="content">
					
					
					
					
					<div id="main">
						<p>Ресторан «AiBa» - Ресторан парковой кухни

В ресторане «AiBa» Вы можете заказать все, что готовится на открытом огне: гриль, барбекю, колбаски собственного приготовления, шашлыки. Это та кухня, которой мы привыкли баловать себя, выезжая с родными и друзьями на природу. Теперь она доступна и в городских условиях - в парке, у нас на Вилле.</p>
						
						<h3>Контакты</h3>
												
						<blockquote>
						  <div>Местоположение: Алматы, Желтоксан 9/2, за кинотеатром Казахстан</div>
						  <div>Номер: +7 778 5000303 / 301011</div>
						  <div>Время работы: вс-чт 12.00-24.00 / Пт-сб 12:00-01.00</div>
						</blockquote>
						
						<h4>Меню AiBa </h4>
						
						<p>Меню AiBa делится на несколько видов. мы рассматриваем потребности не только взрослых людей, которые приносят на основной доход, но и детей. У нас есть:</p>
						
						<ul>
							<li>Барное меню</li>
							<li>Основное меню</li>
							<li>Детское меню</li>
						</ul>
						
						<h5>Для того чтобы связаться с нами вам необходимо зарегестрироваться!</h5>
					  <p>Регестрация вам откроет: </p>
						<ol>
						  <li>Возможность заранее зарезервировать столик</li>
						  <li>Возможность оставлять отзывы</li>
						  <li>Связываться напрямую с начальсьвом ресторана путем обмена сообщений</li>
						</ol>
						
						<form action="" method="post">
							<p>
							  <label>Name/Login</label><br />
							<input type="text" class="text" /></p>
							
							<p><label>Message:</label><br />
							<textarea></textarea></p>
							
							<p><input type="submit" class="submit" value="Submit" /> <span>A note goes here</span></p>
						</form>
					</div>		<!-- #main ends -->
					
					
					
					
					
					
					
					
					<div id="side">
					
						<p><img src="img/8.jpg" width="283" height="269" alt="BarVilla" longdesc="img/8.jpg" /></p>
					
					
						<div id="twitter">
						  <ul id="twitter_update_list"><li>Твиты</li></ul>
							<p class="twt">Войти: <a href="http://twitter.com/enstyled/">Социальная сеть Твиттер</a></p>
						</div>
						
					</div>		<!-- #side ends -->
					
					
					
					
					
					
					
					
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
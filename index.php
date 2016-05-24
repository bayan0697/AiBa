<?php

include_once("check_log.php");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Welcome to AiBa</title>

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
   <h1>&nbsp;</h1>
   <h1>AiBa</h1>
</h>         


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
			
			
			
			
			
				<div id="slideshow" style="width:800; height:533;">
					<a href="portfolio.php"><img src="img/1.jpg" width="900" height="500" alt="AiBa" title="" /></a>
					<a href="portfolio.php"><img src="img/2.jpg" width="900" height="500" alt="AiBa" title="" /></a>
					<a href="portfolio.php"><img src="img/3.jpg" width="900" height="500" alt="AiBa" title="" /></a>
					<a href="portfolio.php"><img src="img/4.jpg" width="900" height="500" alt="AiBa" title="" /></a>
					<a href="portfolio.php"><img src="img/5.jpg" width="900" height="500" alt="AiBa" title="" /></a>
					<a href="portfolio.php"><img src="img/6.jpg" width="900" height="500" alt="AiBa" title="" /></a>
				</div>		<!-- #slideshow ends -->
				
				<div id="slideshowbtm">
				  <p><a href="zakaz.php" class="quotelink">Зарезервировать место!</a></p>
				  <p>&nbsp;</p>
				</div>
			
				
				
			  <div id="content" class="homepage">
					
					
					
					
					<div id="main">
						<h2>AiBa. Уникальный ресторан парковой кухни. Очередной шедевр компании Meyram Group. Уникальный ресторан уникален во всем!</h2>
						
						<p>В ресторане «AiBa» Вы можете заказать все, что готовится на открытом огне: гриль, барбекю, колбаски собственного приготовления, шашлыки. Это та кухня, которой мы привыкли баловать себя, выезжая с родными и друзьями на природу. Теперь она доступна и в городских условиях - в парке, у нас на Вилле.
                      <a href="page.php">Больше информации</a>					</p>
						<p><img src="img/7.jpg" width="565" height="350" alt="" longdesc="img/8.jpg" /></p>
					</div>		
					<!-- #main ends -->
					<div id="side">
					
					  <p><img src="img/8.jpg" width="283" height="269" alt="AiBa" longdesc="img/8.jpg" /></p>
					
					
					  <div id="twitter">
						  <ul id="twitter_update_list"><li>Твиты...</li></ul>
							<p class="twt">Войти: <a href="http://twitter.com/">Социальная сеть Твиттер</a></p>
						</div>
						
				  </div>		<!-- #side ends -->
					
							
				  <div id="services">
					
						<ul>
						
							<li class="design">
                            <h2>Меню ресторана</h2>
								<p>Меню ресторана рассчитано на самую разную аудиторию. Гости отмечают, что цены здесь вполне демократичные. Здесь можно заказать такой изысканный деликатес, как запеченные мидии «Гигант», а можно просто поностальгировать и выпить пива с вяленой воблой.
							  Кстати пива здесь тоже удивительное разнообразие – есть Hoegarden, но в тоже время есть родное Шымкентское, которое едва ли разливают еще где-то в Шымкенте, кроме ресторана AiBa. Вообще бар здесь впечатляет количеством напитков. Можно, пожалуй, сказать, что здесь самый большой выбор виски (около 20 видов), напитка, который с каждым годом становится все популярнее в Шымкенте. Богатый выбор вин – представлены вина чилийские, французские, итальянские. Разновидности меню.							</p>
							</li>
							
							
							<li class="middle build">
                            <h2>Сервис и кальян</h2>
								<p>Особой гордостью ресторана парковой кухни AiBa являются эксклюзивные дизайнерские кальяны Mistery. Их уникальный дизайн, насыщенный вкусный и густой дым навсегда меняют представление о курении среди всех, кто попробовал Mystery. Однако в ресторане AiBa есть еще один сюрприз для любителей кальянов. У всех гостей есть возможность приобрести эксклюзивное право на использование любой понравившейся модели кальяна на территории AiBa. При этом Вы автоматически получаете скидку 50%, каждый раз, когда заказываете кальян. Кальян будет закреплен за исключительно за Вами и Вам решать курить его самому, делиться с друзьями или приберегать для самых дорогих гостей.	Все	эти	условия	для	вас,	поскольку каждый посетитель важен для нас!</p>
							</li>
							
							
							<li class="manage">
                            <h2>Летняя площадка</h2>
								<p>Это самая большая летняя площадка в центре города, создающая ощущение присутствия на вилле. Этому же способствует и детская площадка, построенная специально для гостей, приходящих семьями, с детьми.
							  Уникальность ресторана выражена и в его дизайне. Но это уже лучше увидеть собственными глазами.							</p>
								<p><img src="img/9.jpg" width="294" height="200" alt=".," longdesc="img/9.jpg" /></p>
							</li>
							
						</ul>
						
				  </div>		<!-- #services ends -->
					
					
					
					
					
					
					
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
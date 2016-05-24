<?php

include_once("connect.php");
include_once("check_log.php");


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
<?php
							
							include_once("connect.php");
							
							$new_comments = "";
$sql2 = mysql_query("SELECT * FROM comment WHERE status='Показано' ORDER BY date DESC");
$count = mysql_num_rows($sql2);
if($count > 0){
	while($row = mysql_fetch_array($sql2)){
		$id = $row['id'];
		$full_name = $row['full_name'];
		$date = $row['date'];
		$comment = $row['comment'];
		$new_comments .= '
		    <div id="d_p">
			    ' . $full_name . '
				<br/>
				' . $date . '
				<br/>
				' . $comment .'
			</div>
			<br/>
			<div></div>
		';
	}
}else{
	$new_comments = '<p>В данный момент нет никаких комментарии!</p>';
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>AiBa-otzyvy</title>

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
					<h2>Здесь вы можете оставлять отзывы о нашем заведении и делиться с впечетлениями!</h2>
					
					<form action="" method="post">
						<input type="text" class="text" value="Искать..." />
					</form>
				</div>
				
				
				
				
				
				
				
				
				
				<div id="content">
					
					
					
					
					<div id="main" class="blogpost">
						
						<h3>Почему для нас так важны ваши отзывы?</h3>
					
						<p class="post_meta">Выслано: 16.05.2016 </p>
					
						<p>Для начала отсановимся на вопросе, что же такое отзывы? Отзыв-это выражение субьективного мнения людей относительно того что они повидали, пережили или же попробовали(как в нашем случае). Поэтому </p>

						<p>В чем же нам помогают отзывы и в чем помогают отзывы потребителям? В первую очередь можно сказать о том что ваши отзывы привлекают нам клиентов, но если быть более альтуистичными, то ваши отзывы помогают многим людям из других городов, туристам определиться с выбором места отдыха и	мест	с	хорошей	кухней.		</p>
						<div class="cmntshead">
						  <h3>Отзывы:&nbsp;</h3>
						</div>
						
						
						
						
						
						<div id="post_comments">
						
							<div class="comment">
							<?php echo $new_comments; ?>
							</div>
							
							
						</div>		<!-- .post_comments ends -->
						
						
						
						
						<form action="" method="post" id="comment_form">
							<h2>Что вы думаете о AiBa?</h2>
							<p><label>Полное имя:</label><input type="text" name="full_name" class="text" maxlength="100" /> 
							<span>(Обязательно)</span></p>
							
							<p><label>E-mail:</label> <input type="email" name="email" class="text" maxlength="80" /> 
							<span>(Обязательно)</span></p>
							
							<p><label>Комментарий:</label><textarea name="comment" style="width:300px;height:100px;padding:5px;resize:none">
                                            </textarea>
</p>
							
							<p class="formend"><input type="submit" class="submit" value="Отправить" /></p>
							<p>
                                        <td align="center" colspan="2"><?php echo $msg; ?></td>
                                    </p>
						</form>
						
						
					</div>		<!-- #main ends -->
					
					
					
					<div id="side">
					
					  <p><img src="img/8.jpg" width="283" height="269" alt="AiBa" longdesc="img/8.jpg" /></p>
					
					
					  <div id="twitter">
						  <ul id="twitter_update_list"><li>Твиты...</li></ul>
							<p class="twt">Войти: <a href="http://twitter.com/">Социальная сеть Твиттер</a></p>
						</div>
						
				  </div>
					
					
					
					
					<div id="side">
					
						<h2>Meyram group</h2>
						<ul class="categories">
							<li>AiBa</li>
							<li>Opus</li>
							<li>Maharaja</li>
							<li>Leard de mor</li>
							<li>KIsh-Mish</li>
							<li>El'dorro</li>
							<li>Restourant</li>
							<li>Kazakhstan</li>
						</ul>
						
						
						
						
						<ul class="ads">
							<li><a href="http://themeforest.net/?ref=enstyled"><img src="images/themeforest.gif" alt="ThemeForest" /></a></li>
							<li class="alt"><a href="http://activeden.net/?ref=enstyled"><img src="images/activeden.gif" alt="ActiveDen" /></a></li>
						</ul>
						<p>&nbsp;</p>
					</div>		
					<!-- #side ends -->
					
					
					
					
					
					
					
					
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
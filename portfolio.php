<?php
							
							include_once("connect.php");
                            include_once("check_log.php");
							
							$food1 = "";
$sql = mysql_query("SELECT * FROM menu ORDER BY data DESC");
$count = mysql_num_rows($sql);
if($count > 0){
	while($row = mysql_fetch_array($sql)){
		$id = $row['id'];
		$type = $row['type'];
		$meals = $row['meals'];
		$count = $row['count'];
		$food1 .= '
		    <div id="portfolio"> 
		    <table width=850 border=10px>
			<tr height=50px>
			<td width=163px>
			<div class="project_small logo">
			   <h3> ' . $type . '</h3>
			</div>	   
			</td>
            <td width=570>
			<div class="project_small logo">
			    <h3>' . $meals . '</h3>
			</div>		
			</td>
            <td width=100>
			<div class="project_small logo">
			    <h3>' . $count . '</h3>
			</div>	
			</td>			
			</tr>
			</table>
			</div>
		';
	}
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>AiBa-menu</title>

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
			 echo ' <li><a href="vxod.php">Вход</a></li><li><a href="login.php">Регистрация</a></li>';
		  }
	  ?>
	</ul>
</div>		<!-- #header ends -->
			
			
			
			
		  <div id="holder">
			
			
			
			
			
<div class="pagetitle">
				  <h2>Меню</h2>
					<ul id="portfolio_filter">
					  <li class="active"><a href="#" class="all">Общее</a></li>
						<li></li>
						<li></li>
						<li></li>
				  </ul>
			</div>
				
				
			<div id="content">
					
					
					
					
					<div id="portfolio">
						<?php echo $food1; ?>
						
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
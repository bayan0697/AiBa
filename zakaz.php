<?php

include_once("connect.php");
include_once("check_log.php");
$id=$_SESSION['id'];
$msg= "";
if(isset($_POST['numcart'])){
	$numcart = $_POST['numcart'];
	$infor = $_POST['infor'];
	////////////////////////////////////////////////
	$numcart = strip_tags($numcart);
	$infor = strip_tags($infor);
	////////////////////////////////////////////////
	$numcart = stripslashes($numcart);
	$infor = stripslashes($infor);
	////////////////////////////////////////////////
	if((!$numcart) || (!$infor)){
		$msg = "<p style='color: #C00; font-weight: bold; font-size: 18px; font-family: arial;'>Пополните все данные!</p>";
	}else{
		include_once("connect.php");
			$sql = mysql_query("INSERT INTO zakaz(numcart, infor, mem_id) VALUES('$numcart','$infor','$id') ");
			$msg = "<p style='color: #0C0; font-weight: bold;'>Спасибо за заказ, ваша заявка будет оформлено в течение сутки!</p>";
	}
}
?>
<?php
							
							include_once("connect.php");
							
							$order = "";
$sql2 = mysql_query("SELECT * FROM zakaz WHERE mem_id='$id'");
$count = mysql_num_rows($sql2);
if($count > 0){
	while($row = mysql_fetch_array($sql2)){
		$id = $row['id'];
		$full_name = $row['answer'];
		$order .= '
		    <div id="d_p">
			    ' . $full_name . '
			</div>
			<br/>
			<div></div>
		';
	}
}else{
	$order = '<p>Вы еще не получили ответ от администратора!</p>';
}


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
					<li><?php
	      if($status == 1){
			  echo '
			      <li>
                                
                                    <a href="zakaz.php" style="text-decoration:none; color: #FFF;">Заказать</a> | <a href="logout.php" style="text-decoration:none; color: #FFF;">Выход</a>
                                
                                </li>
			  ';
		  }else{
			 echo ' <div id="cart_header">
                                    Вход | <a href="register.php" style="text-decoration:none; color: #FFF;">Регистрация</a>
                                </div>
                                <div id="cart_body">
                                   
                                </div>
                            </div>
                            <br/>
                            <form action="index.php" method="post">
                                <table width="160" cellpadding="3" cellspacing="3" border="0">
                                    <tr>
                                        <td><input type="email" name="email" class="text_input" style="width: 160px;" maxlength="80" placeholder="Логин"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="password" name="password" class="text_input" style="width: 160px;" maxlength="50" placeholder="Пароль"/></td>
                                    </tr>
                                    <tr>
                                        <td><input type="submit" name="submit" value="Войдите" id="button"/></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $msg_error; ?></td>
                                    </tr>
                                </table>
                            </form>';
		  }
	  ?>
			</ul>
		  </div>		<!-- #header ends -->
			
			
			
			
			
			
			
			
			
			
			<div id="holder">
			
			
			
			
			
			
				<div class="pagetitle">
					<h2>зарезировать</h2>
				</div>
				
				
				
				
				
				
				
				
				
				<div id="content">
					
					
					
					
					<div id="wide" class="contact">
						
						<p>Здесь вы можете забранировать стол. </p>
												
			
						<div class="clear sep"></div>
			
						
						
						
						<form action="zakaz.php" method="post">
						
							<fieldset class="left">
                                    <p>
                                        <td align="right" width="150"><label>Номер удостворении:</label></td>
                                        <td align="left"><input type="text" name="numcart" class="text" maxlength="100" /></td>
                                    </p>	
								<p>
                                        <td align="right"><label>Информация:</label></td>
                                        <td align="left">
                                            <textarea name="infor" style="width:300px;height:100px;padding:5px;resize:none">
                                            </textarea>
                                        </td>
                                    </p>
                                    <p>
                                        <td align="center" colspan="2"><input type="submit" name="submit" id="button" value="Отправить"/></td>
                                    </p>
                                    <p>
                                        <td align="center" colspan="2"><?php echo $msg; ?></td>
                                    </p>
									<p>
                                        <td align="center" colspan="2"><?php echo $order; ?></td>
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
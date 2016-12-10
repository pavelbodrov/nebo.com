<!DOCTYPE html>
<html>
	<head>
		<title>«Небо» - одежда, сделанная на Урале</title>
		<link rel="shortcut icon" href="ver2/favicon.ico" type="image/x-icon">
		 
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="animate.css">
		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
		<link rel="stylesheet" type="text/css" href="jquery-ui.min.css">
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<script src="jquery-1.9.1.min.js"></script>
		<script src="jQuery.scrollSpeed.js"></script>
		<script src="jquery.viewportchecker.min.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script>
		<script src="jquery.isonscreen.js"></script>
		<script src="jquery-ui.min.js"></script>
		<script src="script.js"></script>
		
		<script>
			$(function() {  
				jQuery.scrollSpeed(270, 800);
			});
		</script>
	</head>
	
	<body>
	<span id="top"></span>
			
		<div id="header" class="header">
			<a href="#top" class="bird-logo"></a>
			<div class="open-menu"></div>
			<ul id="menu" class="menu">
				<div class="close-menu"></div>
				<li class="one"><a class="menu-href" href="#toconception">Концепция</a></li>
				<li class="two"><a class="menu-href" href="#tocatalogue">Каталог</a></li>
				<li class="three"><a class="menu-href" href="#tofaq">Вопросы</a></li>
				<li class="four"><a class="menu-href" href="#tocontacts">Контакты</a></li>
				<hr>
			</ul>
		</div>
		<script>
			$(".open-menu").click(function(){
				$(".menu").css("right", "0");
			});
			$(".close-menu").click(function(){
				$(".menu").css("right", "-50%");
				$(".open-menu").css("display", "block");
			});	
		</script>
		<div class="slider-container">
			<div class="slider-nav">
				<div class="line line1" onclick="showSlide(1)"></div>
				<div class="line line2" onclick="showSlide(2)"></div>
				<div class="line line3" onclick="showSlide(3)"></div>
			</div>
			<div class="mySlides slide1">
				<div class = "logo"></div>
				<div class = "text">достигая вершин</div>
			</div>
			<div class="mySlides slide2">
				<div class="text invented">придумано <span>в челябинске</span></div>
				<div class="text made">сделано <span>на южном урале</span></div>
			</div>
			<div class="mySlides slide3">
				<div class="text">вдохновляясь <br><span>природой</span></div>
			</div>

		</div>
		
		<script>
		var myIndex = 0;
		activateEffects();		
		</script>
		

		<div class="conception">
			<span>Как мы пришли к этой идее</span>
			<a href="#toconception"><div class="arrow-container"></div></a>
		</div>
		
		<span id="toconception"></span>
		<div id="conception" class="manifesto">
				
				<div class="fadeIn-div">
					<p>мы устали видеть на повседневной одежде чужие слова,<br>чужие портреты и чужие флаги, устали видеть людей,<br>необдуманно живущих на волнах чужой культуры.</p>
					<img class="icon-usa" src="ver2/icon_usa.png">
				</div>
				<div class="fadeIn-div">
					<p>мы хотим придумывать и создавать качественную<br>одежду там, где мы родились, хотим доказать,<br>что каждому из нас есть что показать.</p>
					<img class="icon-russia" src="ver2/icon_russia.png">
				</div>
				<div class="fadeIn-div">
					<p>мы - небо,<br>и если ты с нами,<br>ты на высоте.</p>
					<img class="icon-bird" src="ver2/icon_bird.png">					
				</div>	
				
		</div>
		<div id="modal-window" class="modal-container">
			<div class="product-page clearfix">
			<span class="close">X</span>
				<div class="gallery clearfix">
					<div class="gallery-nav">
						<img class="nav-pic opacity opacity-off" src="img/itempage.jpg" onclick="currentDiv(1)">
						<img class="nav-pic opacity opacity-off" src="img/1.jpg" onclick="currentDiv(2)">
						<img class="nav-pic opacity opacity-off" src="img/2.jpg" onclick="currentDiv(3)">
						<img class="nav-pic opacity opacity-off" src="img/2.jpg" onclick="currentDiv(4)">
					</div>
					<div class="main-pic">
						<img class="item-slides" src="img/itempage.jpg">
						<img class="item-slides" src="img/1.jpg">
						<img class="item-slides" src="img/2.jpg">
						<img class="item-slides" src="img/2.jpg">
					</div>
				</div>
				<script>
					var slideIndex = 1; 
					showDivs(slideIndex);
				</script>
				<div class="content">
					<h1 class="itemType">футболка</h1><span class="itemId"></span>
					<span class="price">990.-</span>
					<ul class="description">
						<li>Оригинальный принт</li>
						<li>Натуральный материал (хлопок)</li>
						<li>круглая горловина</li>
						<li>короткий рукав</li>
						<li>шелкографическое нанесение</li>
					</ul>
					<form action="server.php" method="POST" id="form">
						<ul class="size-grid">
							<label class="size-label">
								<li class="size-value">46</li>
								<input class="size" type="radio" name="size" value="Small">
							</label>
							<label class="size-label">
								<li class="size-value">48</li>
								<input class="size" type="radio" name="size" value="Medium">
							</label>
							<label class="size-label">
								<li class="size-value">50</li>
								<input class="size" type="radio" name="size" value="Large">
							</label>
						</ul>
						<div class="form">						
							<input placeholder="введите номер телефона или email" id="email" class="inp-form" name="email" type="text">
							<input placeholder="введите ваше имя" class="inp-form" id="fio" name="fio" type="text">
							<div class="delivery">
								<input placeholder="адрес доставки" class="inp-form d_address" id="address" name="d_address" type="text">
								<input placeholder="дата" class="inp-form d_date" id="datepicker" name="d_date" type="text">
								<img src="ver2/calendar.png" id="calendar">
							</div>
							<button id="val" class="inp-form send-button" type="button" name="send-form">заказать</button>
							<div class="informer"></div>
						</div>
					</form>
					
					<script>
					$(document).ready(function(){
						$(".size-value").click(function(){
						//alert("asdasd");
							$(".size-value").each(function(){
								$(this).css("color","#282828");
								$(this).css("background-color","white");
							});
							$(this).css("color","white");
							$(this).css("background-color","#282828 ");
						});
						$("#val").click(function(){
							//alert($("#email").val());
							//alert($('input[name=size]:checked', '#form').val()); 
							var email=$("#email").val();
							var fio=$("#fio").val();
							var size=$('input[name=size]:checked', '#form').val();
							var price=$(".price").text();
							var itemId = parseInt($(".itemId").text());
							var d_date=$("#datepicker").val();
							var d_address=$("#address").val();
							var form_data_obj = { //объект сообщения
								"email":email,
								"fio":fio,
								"size":size,
								"price":price,
								"itemId":itemId,
								"d_date":d_date,
								"d_address":d_address
							};
							var send_json = JSON.stringify(form_data_obj);

							if ((email.length!=0)&&(fio.length!=0)&&($('input[name=size]').is(':checked')))
							{
								$.ajax({
									url: "server.php",
									cache: false,
									type: "POST",
									data: 'data=' + send_json,
									success: function (response) {
										alert(response);
										$(".informer").css("color","#358D62");
										$(".informer").text("Ваш заказ отправлен менеджеру, ожидайте звонка");
										$(".informer").css("opacity","1");
										
									},
									error: function() {
										alert('Error!');
									}
								});
							}
							else 
							{
								$(".informer").css("color","#8D3535");
								$(".informer").text("Заполните все данные!");
								$(".informer").css("opacity","1");
							}
						});
					});
					
					activateCalendar();
					</script>
				</div>
				
			</div>
		</div>
			
			
			<script>
			/*
				//alert(php_var);
			var img1;
			var img2;
			var img3;
			var price;					
					var get_data = $.ajax({
						url: "loader.php",
						cache: false,
						type: "POST",
						data: 'id=' + "1",
						success: function (data) {
							var data_d = JSON.parse(data);
							
							img1 = data_d.Image1;
							img2 = data_d.Image2;
							img3 = data_d.Image3;
							price = data_d.ItemPrice;
							alert(img1);
							
							//alert(img1);
							
						},
						error: function() {
							alert('Error!');
						}
					});
					
				/*
				get_data.promise().done(function(){
					
					
				});
				
				//var str="url('" + img1 + "')";
				//alert(str);
				//$(".first").css("background-image", str);
				*/
			</script>
			<span id="tocatalogue"></span>
			<div id="catalog" class="catolog-container">
				<div class="slider">
				<?php //каталог формируется сам из базы
					$db = new SQLite3('database.db');					
					$query = $db->query("SELECT * FROM Items");
					$i = 1;
					$item = "item item";
					$shop_button = "shop-button shop-button";
					while ($row = $query->fetchArray()) 
					{						
						//$str = $item . $i;
						?>
							<div class = "<?echo $item . $i?>" style = "background-image:url(<?echo $row['Image1']?>)">
								<a class= "<?echo $shop_button . $i?>" onclick=modal(<?echo $i?>)>подробнее</a>
							</div>
						<?
						$i++;
					}					
				?>
				</div>
				<div class="controllers">
					<div class="prev"></div>
					<div class="next"></div>
				</div>
			</div>
			
			<script>
				$(document).ready(function(){
					var width = window.innerWidth;
					var slidesQuantity=0;
					if ((width>=320)&&(width<=1080))
					{
						slidesQuantity = 1;
					}
					else if (width>=1081)
					{
						slidesQuantity = 3;
					}
					else
					{
						slidesQuantity = 3;
					}
					$(".slider").slick({
						slidesToShow:slidesQuantity,
						prevArrow: '.catolog-container .prev',
						nextArrow: '.catolog-container .next',
					});
			});
			</script>
				
			<?
			//cms
				function app()
				{
					//echo '<script>$(".slider").append(\'<div class="item fifth"><a class="shop-button shop-button5" onclick="modal(4)">подробнее</a></div>\');</script>';
				}
			?>	
			<?
				app();
			?>
			<span id="tofaq"></span>
			<div id="faq" class="faq-container">
				<div class="fadeIn-div">
					<h1 id="tst" class="faq-h1">Где производится наша одежда?</h1>
					<p>Все, что вы видите выше, производится исключительно на фабриках южного урала, мы хотим участвовать в развитии швейной отрасли региона и отстаивать качество этой продукции.
					</p>
				</div>
				<div class="fadeIn-div">
					<h1 class="faq-h1">Какие материалы используются?</h1>
					<p>В производстве используются только натуральные хлопковые ткани, произведенные в нашей стране. Нам приятно осознавать, что материал для вашей футболки также создан в россии.
					</p>
				</div>
				<div class="fadeIn-div">
					<h1 class="faq-h1">Как оформить заказ?</h1>
					<p>Выберите интересующую вас позицию в каталоге, определитесь с размером и нажмите на кнопку заказа, менеджер свяжется с вами для уточнения дальнейших деталей.
					</p>
				</div>
			</div>
			<span id="tocontacts"></span>
			<div id="contacts" class="contacts">
				<div class="map-container">
					
					<p><span>Карта</span> магазинов, где продается наша одежда</p>
					<div class="map">
						<iframe c src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2279.372031588296!2d61.3636793162414!3d55.15926698039878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c592c09fa2d439%3A0xa423fb2089ff1a5a!2spr.+Lenina%2C+119%2C+Chelyabinsk%2C+Chelyabinskaya+oblast&#39;%2C+454080!5e0!3m2!1sen!2sru!4v1479456303237" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="social">
					<a href="https://vk.com"><img src="ver2/VK_Icon.png">
					<a href="https://www.instagram.com"><img src="ver2/Instagram_Icon.png"></a>
					<span class="email">NEBO@GMAIL.com</span>
					<span class="made-in">сделано в <span class="chel">челябинске</span></span>
				</div>
			</div>
			<script>
			$( window ).scroll(function() {
				viewMenu();
			})
			</script>
	</body>
</html>
function carousel() {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var lines = document.getElementsByClassName("line");
	for (i = 0; i < slides.length; i++) {
	   slides[i].style.display = "none";
	}
	for (i = 0; i < lines.length; i++) {
	   lines[i].style.opacity = "0.3";
	}
	//alert(slides.length);
	myIndex++;
	if (myIndex > slides.length) {myIndex = 1}
		slides[myIndex-1].style.display = "block";
		//$(".mySlides").eq(myIndex-1).fadeIn("slow");
		//$(".lines").eq(myIndex-1).css("opacity");
		lines[myIndex-1].style.opacity = "1";		
		setTimeout(carousel, 4000); // Change image every 2 seconds
}

function showSlide(n)
{
	$(document).ready(function() {
		switch(n)
		{
			case 1:
			$(".mySlides").css("display", "none");
			$(".slide1").css("display", "block");
			$(".line").css("opacity", "0.3");
			$(".line1").css("opacity", "1");
			break;
			case 2:
			$(".mySlides").css("display", "none");
			$(".slide2").css("display", "block");
			$(".line").css("opacity", "0.3");
			$(".line2").css("opacity", "1");
			break;
						
			case 3:
			$(".mySlides").css("display", "none");
			$(".slide3").css("display", "block");
			$(".line").css("opacity", "0.3");
			$(".line3").css("opacity", "1");
			break;
		}
	});
				
}
function menuHover(){			
			$(".header").mouseenter(function(){
				$("hr").css("opacity", "1");
			})
			$(".header").mouseleave(function(){
				$("hr").css("opacity", "0");
			})
}
function blockFading()
{
			$(document).ready(function(){
				$('.fadeIn-div').addClass("hidden").viewportChecker({
					classToAdd: 'visible animated fadeIn',
					offset: 60,
					repeat: true
				});
			});
}

function setCatalogImg(itemSelector, buttonSelector, id) //function that makes catalog hover effect. It takes selector of the catalog item, selector of shop button and product id(to retrieve images from db)
{
		var get_data = $.ajax({
			url: "load_catalog.php",
			cache: false,
			type: "POST",
			data: 'id=' + id,
			success: function (data) {
				var data_d = JSON.parse(data);
				var hoverArr;
				img = data_d.Image1;
				img_o = data_d.HoverImage;
				var url = "url(" + img	+ ")";
				var url_o = "url(" + img_o	+ ")";
				//$(itemSelector).css("background-image", url); //set catalog image
				//alert(url);
				if (window.innerWidth>=1080)
				{
					$(itemSelector).hover( //set hover
						function() {
							$(this).css('background-image', url_o);
							$(buttonSelector).css('display', 'block');
						},
						function() {
							$(this).css('background-image', url);
							$(buttonSelector).css('display', 'none');
						}
					);
				}
				else
				{
					$(itemSelector).click( //set hover
						function() {
							$(this).css('background-image', url_o);
							$(buttonSelector).css('display', 'block');
						}
					);
					$(itemSelector).click( //set hover
						function() {
							$(this).css('background-image', url);
							$(buttonSelector).css('display', 'none');
						}
					);
				}
			},
				error: function() {
					alert('Error!');
				}
		});
}
		
function catalogHover() {	//here we call setCatalogImg function with different parameters, depending on what we want to put in catalog
	$(document).ready(function(){
		var items = document.getElementsByClassName("item");
		var itemClass = ".item";
		var buttonClass = ".shop-button";
		for (var i = 1;i<=items.length;i++)
		{
			setCatalogImg(itemClass + i, buttonClass + i, i);
			//alert(itemClass + i);
		}
	});
}			
			
function smoothHrefs() {			 
	$(document).ready(function(){
		$("#header").on("click","a", function (event) {
			//отменяем стандартную обработку нажатия по ссылке
			event.preventDefault();
			//document.getElementsByClassName(".menu-href").style.color="";

			//забираем идентификатор бока с атрибута href
			var id  = $(this).attr('href'),

			//узнаем высоту от начала страницы до блока на который ссылается якорь
			top = $(id).offset().top;
					
			//анимируем переход на расстояние - top за 1500 мс
			$('body,html').animate({scrollTop: top}, 1500);
		});
		$(".conception").on("click","a", function (event) {
			//отменяем стандартную обработку нажатия по ссылке
			event.preventDefault();
			//document.getElementsByClassName(".menu-href").style.color="";

			//забираем идентификатор бока с атрибута href
			var id  = $(this).attr('href'),

			//узнаем высоту от начала страницы до блока на который ссылается якорь
			top = $(id).offset().top;
					
			//анимируем переход на расстояние - top за 1500 мс
			$('body,html').animate({scrollTop: top}, 1500);
		});
	});
	
}
function setModalData(img1, img2, img3, img4, price, type, id) //function that fills product modal page depending on specific info of the product. Takes images, price and description of Item as parameters
{
		var modal = document.getElementById('modal-window');
		$(".modal-container").css("display","block");
		$("html,body").css("overflow","hidden");
		
		$(".close").click(function(){
			$(".modal-container").css("display","none");
			$("html,body").css("overflow","auto");
		});
		$(window).click(function(event){
			if (event.target == modal) {
				$(".modal-container").css("display","none");
			}
		});
		
		$(".price").text(price + ".-");
		$(".itemType").text(type);
		$(".itemId").text(id);
		$( ".nav-pic" ).eq(0).attr("src", img1);
		$( ".nav-pic" ).eq(1).attr("src", img2);
		$( ".nav-pic" ).eq(2).attr("src", img3);
		$( ".nav-pic" ).eq(3).attr("src", img4);
		
		$( ".item-slides" ).eq(0).attr("src", img1);
		$( ".item-slides" ).eq(1).attr("src", img2);
		$( ".item-slides" ).eq(2).attr("src", img3);
		$( ".item-slides" ).eq(3).attr("src", img4);
}

function modal(id){ //function that calls product modal page. It takes item ID from DB as a parameter 
	$(document).ready(function(){
		
		var img1;
		var img2;
		var img3;
		var img4;
		var price;
		var itemId;
		
		var get_data = $.ajax({
			url: "loader.php",
			cache: false,
			type: "POST",
			data: 'id=' + id,
			success: function (data) {
				var data_d = JSON.parse(data);
							
				img1 = data_d.Image1;
				img2 = data_d.Image2;
				img3 = data_d.Image3;
				img4 = data_d.Image4;
				price = data_d.ItemPrice;
				type = data_d.ItemType;
				itemId = data.ItemID;
				setModalData(img1, img2, img3, img4, price, type, id);
			},
				error: function() {
					alert('Error!');
				}
		});		
	});
}
function viewMenu() //function that checks which part of the site user is currently seeing and reflects it on fixed menu
{
	$(document).ready(function()
	{
		if ($('#conception').isOnScreen(0.6,0.6))
		{
		//alert("vuu");
			$('.menu-href').css("color","#282828");
			$('.menu-href').eq(0).css('color', "#989898");
		}
		else if ($('#catalog').isOnScreen(0.6,0.6))
		{
			//alert("vuu");
			$('.menu-href').css("color","#282828");
			$('.menu-href').eq(1).css('color', "#989898");
		}
		else if ($('#faq').isOnScreen(0.5,0.5))
		{
			//alert("vuu");
			$('.menu-href').css("color","#282828");
			$('.menu-href').eq(2).css('color', "#989898");
		}
		else if ($('#contacts').isOnScreen())
		{
			//alert("vuu");
			$('.menu-href').css("color","#282828");
			$('.menu-href').eq(3).css('color', "#989898");
		}
		else
		{
			$('.menu-href').css("color","#282828");
		}
	});
}
/////////////////////////////// product nav(modal)

function currentDiv(n) {
	$(document).ready(function(){
			showDivs(slideIndex = n);
	});
}
function showDivs(n) 
{
	var i;
	var slides = document.getElementsByClassName("item-slides");
	var nav_pics = document.getElementsByClassName("nav-pic");
	 
	if (n > slides.length) 
	{
		slideIndex = 1;
	}
	if (n < 1) 
	{
		slideIndex = slides.length;
	}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none"; //прячем все основные слайды
	}
			  
	$(".nav-pic").removeClass("opacity-off");
					  
	slides[slideIndex-1].style.display = "block";
	nav_pics[slideIndex-1].className += " opacity-off";
}
////////////////////////////

function activateCalendar() {
	$(document).ready(function(){
		$( "#datepicker" ).datepicker();
		$("#calendar").click(function(){
			$( "#datepicker" ).focus();
		});
	});
}
function activateEffects() { //function activator
	carousel();
	menuHover();
	blockFading();
	catalogHover();
	smoothHrefs();
	//modal("900");
}
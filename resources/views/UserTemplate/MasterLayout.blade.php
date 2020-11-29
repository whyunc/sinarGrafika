<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Sinar Grafika</title>
<link rel="icon" type="image/png" href={{asset("img/SG-logo.png")}}>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href={{asset ("css/style.css") }} rel="stylesheet" type="text/css" media="all"/>
<link href={{asset("css/slider.css")}} rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src={{asset("js/jquery-1.9.0.min.js") }}></script> 
<script type="text/javascript" src={{asset("js/move-top.js")}}></script>
<script type="text/javascript" src={{asset("js/easing.js")}}></script>
<script type="text/javascript" src={{asset("js/jquery.nivo.slider.js")}}></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
	<div class="header">
		 <div class="headertop_desc">
			<div class="wrap">
				<div class="nav_list">
					<ul>
						<li><a href={{asset("Home")}}>Home</a></li>
						<li><a href="contact.html">Chatting</a></li>
						<li><a href={{asset("AboutUs")}}>About Us</a></li>
					</ul>
				</div>
					
				<div class="clear"></div>
			</div>
	  	</div>
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href={{asset("Home")}}><img src={{asset("img/SinarGrafika-icon.png")}} alt="" style="width: 300px; height: 80px;" /></a>
					</div>
					@yield('search')
			 		<div class="clear"></div>
  				</div>     
				<div class="header_bottom">
					<div class="header_bottom_left">				
						<div class="categories">
							<h3>Categories</h3>
							@foreach ($data_KaBarang as $KaBarang)
						   	<ul>
						   		<li><a href="Home/{{$KaBarang -> id_kategori}}/Content">{{$KaBarang -> nama_kategori}}</a></li>
						   	</ul>
						  	@endforeach
						</div>					
		  	        </div>
					<div class="header_bottom_right">					 
						<!------ Slider ------------>
						<div class="slider">
							<div class="slider-wrapper theme-default">
							    <div id="slider" class="nivoSlider">
							        <img src={{asset("img/map.png")}} data-thumb="img/map.png" alt="" />
							        <img src={{asset("img/slide.png")}} data-thumb="img/slide.png" alt="" />
							        <img src={{asset("img/slide2.jpg")}} data-thumb="img/slide2.jpg" alt="" />
							        <img src={{asset("img/slide3.jpg")}} data-thumb="img/slide3.jpg" alt="" />
							        <img src={{asset("img/slide4.jpg")}} data-thumb="img/slide4.jpg" alt="" />
							    </div>
							</div>
						</div>
						<!------End Slider ------------>
			        </div>
			     	<div class="clear"></div>
				</div>
   			</div>
   </div>
   <!------------End Header ------------>
   @yield('content')
</div>
   <div class="footer">
   	  <div class="wrap">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Address</h4>
						<ul>
						<li><a href="#">Jl. Margonda Raya No.334, Kemiri Muka </a></li>
						<li><a href="">Kecamatan Beji</a></li>
						<li><a href="">Kota Depok</a></li>
						<li><a href="">Jawa Barat 16424</a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Working Hours</h4>
						<ul>
						<li><a href="#">WeekDay 08.00–21.00</a></li>
						<li><a href="#">WeekEnd 08.00–21.00</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Our Focus</h4>
						<ul>
							<li><a href="#">Pelayanan Handal dan Cepat</a></li>
							<li><a href="#">Produk Berkualitas</a></li>
							<li><a href="#">Media Promosi</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Contact Us</h4>
						<ul>
							<li><span>0813-8172-5631</span></li>
						</ul>
						<div class="social-icons">
							<h4>Find Us</h4>
					   		  <ul>
							      <li><a href="https://www.google.com/maps/place/Sinar+Grafika+Percetakan+dan+Reklame/@-6.3746812,106.8303187,17z/data=!4m5!3m4!1s0x2e69ec086a724fed:0xfbed0d35a516096d!8m2!3d-6.3747612!4d106.8324967?hl=id" target="https://www.google.com/maps/place/Sinar+Grafika+Percetakan+dan+Reklame/@-6.3746812,106.8303187,17z/data=!4m5!3m4!1s0x2e69ec086a724fed:0xfbed0d35a516096d!8m2!3d-6.3747612!4d106.8324967?hl=id"><img src={{asset("img/map-icon.png")}} alt="" /></a></li>
							      <li><a href="https://www.instagram.com/sinar_grafika_percetakan/" target="https://www.instagram.com/sinar_grafika_percetakan/"><img src={{asset("img/ig-icon.png")}} alt="" /></a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>
			 <div class="copy_right">
				<p>Sinar Grafika © Project KP </p>
		   </div>			
        </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>


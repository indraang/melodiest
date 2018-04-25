<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Detail Barang</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href="<?= site_url();?>assets/css/style.css"" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="<?= site_url();?>assets/js/jquery-1.9.0.min.js"></script> 
<script src="<?= site_url();?>assets/js/jquery.openCarousel.js" type="text/javascript"></script>
<script type="text/javascript" src="<?= site_url();?>assets/js/easing.js"></script>
<script type="text/javascript" src="<?= site_url();?>assets/js/move-top.js"></script>
<script src="<?= site_url();?>assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
<link href="<?= site_url();?>assets/css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
 <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script>		
<link rel="stylesheet" href="<?= site_url();?>assets/css/etalage.css">
<script src="<?= site_url();?>assets/js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
	  <script src="<?= site_url();?>assets/js/star-rating.js" type="text/javascript"></script>
</head>
<body>
	<div class="header">
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="index.html"><img src="images/logo.png" alt="" /></a>
					</div>
						<div class="header_top_right">
							  <div class="search_box">
							  	<span>Cari</span>
					     		<form>
					     			<input type="text" value=""><input type="submit" value="">
					     		</form>
					     		<div class="clear"></div>
					     	</div>
					</div>
			     <div class="clear"></div>
  		    </div>     
  		    <div class="navigation">
  		    	<a class="toggleMenu" href="#">Menu</a>
					<ul class="nav">
						<li>
							<a href="index.html">Beranda</a>
						</li>
						<li  class="test">
							<a href="#">Modern</a>
							<ul>
								<li>
									<a href="#">Gitar</a>
									<ul>
										<li><a href="#">Gitar</a></li>
										<li><a href="#">Gitar Listrik</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Bass</a>
									<ul>
										<li><a href="#">5 Senar</a></li>
										<li><a href="#">6 Senar</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Drum</a>
									<ul>
										<li><a href="#">Yamaha</a></li>
										<li><a href="#">Tama</a></li>
										<li><a href="#">Stik Drum</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Piano</a>
									<ul>
										<li><a href="#">Digital Piano</a></li>
										<li><a href="#">Keyboard</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="">Tradisional</a>
							<ul>
								<li>
									<a href="#">Angklung</a>
								</li>
								<li>
									<a href="#">Gamelan</a>
									<ul>
										<li><a href="#">Bonang</a></li>
										<li><a href="#">Bonang Penerus</a></li>
										<li><a href="#">Kendang</a></li>
										<li><a href="#">Kenong</a></li>
										<li><a href="#">Slenthem</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Gong</a>
								</li>
								<li>
									<a href="#">Sasando</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">Hardware Musik</a>
							<ul>
								<li><a href="#">Keyboard Mecha</a></li>
								<li><a href="#">Microphone</a></li>
								<li><a href="#">SoundCard</a></li>
								<li><a href="#">Sound System</a></li>							
							</ul>
						</li>
						<li>
							<a href="#">Software Musik</a>
							<ul>
									<li><a href="#">FL STUDIOS</a></li>
									<li><a href="#">Adobe Audio</a></li>
									<li><a href="#">SoundCloud</a></li>
									<li><a href="#">Spotify</a></li>						
							</ul>
						</li>								
						<li>
							<a href="contact.html">Contact Us</a>
						</li>
					</ul>
					 <span class="left-ribbon"> </span> 
      				 <span class="right-ribbon"> </span>    
  		       </div>
   		    </div>
          </div>
       <!------------End Header ------------>
   	<div class="main">
   		<?= $content ?>
   	</div>
        
     <div class="footer">
   	  <div class="wrap">	
			 <div class="copy_right">
				<p>Copy rights (c). All rights Reseverd | Template by  <a href="http://w3layouts.com" target="_blank">W3Layouts</a> </p>
		   </div>	
		   <div class="footer-nav">
		   	<ul>
		   		<li><a href="#">Terms of Use</a> : </li>
		   		<li><a href="#">Privacy Policy</a> : </li>
		   		<li><a href="contact.html">Contact Us</a> : </li>
		   		<li><a href="#">Sitemap</a></li>
		   	</ul>
		   </div>		
        </div>
    </div>
   <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"> </a>
       <script type="text/javascript" src="<?= site_url();?>assets/js/navigation.js"></script>
</body>
</html>


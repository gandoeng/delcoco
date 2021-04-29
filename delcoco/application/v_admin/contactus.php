<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Sari Segar Husada</title>
	
	<script src="<?= base_url(); ?>js/jquery-1.12.0.min.js"></script>
	<link rel="stylesheet" href="<?= base_url(); ?>plugin/bootstrap/css/bootstrap.min.css">
	<link href="<?= base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>css/style_menu.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
</head>

<body>
	<section class="index1">
		<? $this->load->view('menu');?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="wrapper-box">
						<div class="center-box text-center center-block">
							<div class="wrapper-text text-center">
								<h1>CONTACT US</h1>
								<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
								<button id="readmore" class="btn readmore-btn">READ MORE</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="coco-contact-1" data-start="transform:translate3d(0px, 0px, 0px);" data-100-end="transform:translate3d(0px, 1300%, 0px);" data-end="transform:translate3d(0px, 200%, 0px);">
				<img src="<?= base_url(); ?>images/fly2.png" />
			</div>
			<div class="coco-contact-2" data-start="transform:translate3d(0px, 0px, 0px);" data-100-end="transform:translate3d(0px, 500%, 0px);" data-end="transform:translate3d(0px, 200%, 0px);">
				<img src="<?= base_url(); ?>images/fly3.png" />
			</div>
			<div class="coco-contact-3" data-start="transform:translate3d(0px, 0px, 0px);" data-100-end="transform:translate3d(0px, 700%, 0px);" data-end="transform:translate3d(0px, 300%, 0px);">
				<img src="<?= base_url(); ?>images/fly5.png" />
			</div>
			<div class="coco-contact-4" data-start="transform:translate3d(0px, 0px, 0px);" data-100-end="transform:translate3d(0px, 900%, 0px);" data-end="transform:translate3d(0px, 300%, 0px);">
				<img src="<?= base_url(); ?>images/fly4.png" />
			</div>
			<div class="stay1 text-left">
				<img src="<?= base_url(); ?>images/stay1.png" />
			</div>
			<div class="stay2 text-right">
				<img src="<?= base_url(); ?>images/stay2.png" />
			</div>
			<div class="sd">
				<img src="<?= base_url(); ?>images/scroll.png" />
			</div>
		</div>
    </section>
	
	<section class="contact2">
		<div class="container-fluid">
			<div class="row row-contact2">
				<div id="map-container" class="col-xs-12 col-sm-12 col-md-12 map"></div>
			</div>
			<div class="col-xs-12 col-sm-12 text-center">
				<p>Please enter your contact details and a short message below and I will try to answer your query as soon as possible or email us at <a href="mailto:info@sarisegarhusada.com" target="_top">info@sarisegarhusada.com</a></p>
			</div>
			<div class="row row-contact2-part2">
				<div class="col-xs-12 col-sm-12 nopad">
					<div class="col-xs-12 col-sm-6 left-side group-pad">
						<div class="form-group">
							<label for="usr">Name</label>
							<input type="text" class="form-control input-lg trp patobo" placeholder="Your Name">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 right-side group-pad">
						<div class="form-group">
							<label for="phn">Phone Number</label>
							<input type="text" class="form-control input-lg trp patobo" id="phn" placeholder="Your Phone Number">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 left-side group-pad">
						<div class="form-group">
							<label for="email">Email Address</label>
							<input type="text" class="form-control input-lg trp patobo" id="email" placeholder="Your Email Address">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 right-side group-pad">
						<div class="form-group">
							<label for="confirm">Confirm Email Address</label>
							<input type="text" class="form-control input-lg trp patobo" id="confirm" placeholder="Confirm Your Email Address">
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 nopad group-pad">
						<div class="form-group">
							<label for="comment">Message</label>
							<textarea class="form-control input-lg trp" rows="5" id="comment" placeholder="Your Message"></textarea>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 nopad">
						<button id="submit" class="submit-btn">Send Message</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<? $this->load->view('footer');?>
	
	<script src="<?= base_url(); ?>plugin/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>js/skrollr.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>js/main.js"></script>
	<script src="<?= base_url(); ?>plugin/jqueryui/jquery-ui.min.js"></script>
	
	<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	
	<script>	

      function init_map() {
		var var_location = new google.maps.LatLng(-6.227694, 106.824119);
		
		var var_mapoptions = { 	
          center: var_location,
          zoom: 16,
		  mapTypeId: google.maps.MapTypeId.ROADMAP
        };
		
		var icon = {
			url: "images/pin.png", // url
			scaledSize: new google.maps.Size(100, 100), // scaled size
			origin: new google.maps.Point(0,0), // origin
			anchor: new google.maps.Point(0, 0) // anchor
		};
 
		var var_marker = new google.maps.Marker({
			position: var_location,
			map: var_map,
			icon: icon,
			title:"SSH"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
		var_marker.setMap(var_map);	
 
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);

	</script>
	
    <script type="text/javascript">		
		$(function() {
			init();
		});
		
		$(document).ready(function() {
			bounce();
		});
		
		$(window).on('resize', function() {
			gainWidth();
		});
		
		function bounce(){
			$('.coco-contact-1').addClass('animated bounceInUp');
			$('.coco-contact-2').addClass('animated bounceInUp');
			$('.coco-contact-3').addClass('animated bounceInUp');
			$('.coco-contact-4').addClass('animated bounceInUp');
			
			setInterval(function(){ 
				$('.coco-contact-1').removeClass('animated bounceInUp');
				$('.coco-contact-2').removeClass('animated bounceInUp');
				$('.coco-contact-3').removeClass('animated bounceInUp');
				$('.coco-contact-4').removeClass('animated bounceInUp');
			}, 1200);
		}
		
		function init() {
			if((window).innerWidth > 768){
				skrollr.init({
					forceHeight:false
				});
			}
		}
		
    </script>
	
	
	
</body>
</html>

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
	<link rel="stylesheet" href="<?= base_url(); ?>plugin/owl/css/owl.carousel.css">
	<link rel="stylesheet" href="<?= base_url(); ?>plugin/owl/css/owl.theme.css">
	
</head>

<body>
	<section class="recipe1">
		<? $this->load->view('menu');?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 nopad">
					<div class="owl-carousel owl-theme owl-slide">
						<div class="item">
							<div class="slider-image" style="background-image:url(<?= base_url(); ?>images/recipe-slide-1.jpg);">
								<div class="slider-padding">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="slider-image" style="background-image:url(<?= base_url(); ?>images/recipe-slide-1.jpg);">
								<div class="slider-padding">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="slider-image" style="background-image:url(<?= base_url(); ?>images/recipe-slide-1.jpg);">
								<div class="slider-padding">
								</div>
							</div>
						</div>
						<div class="item">
							<div class="slider-image" style="background-image:url(<?= base_url(); ?>images/recipe-slide-1.jpg);">
								<div class="slider-padding">
								</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
    </section>
	
	<section class="recipe2">
		<div class="container-fluid recipe-section-2">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<img src="<?= base_url(); ?>images/stay5.png" />
					<h1>OUR RECIPES</h1>
					<h4>This is Photoshop's version  of Lorem Ipsum.</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 dishes-button-row">
					<div class="form-inline">
						<div class="col-xs-12 col-sm-7 nopad">	
							<ul class="nav nav-pills text-center dishes">
								<li class="dishes-btn"><a data-toggle="tab" href="#"><h4>International Dishes</h4></a></li>
								<li class="dishes-btn"><a data-toggle="tab" href="#"><h4>Traditional Dishes</h4></a></li>
								<li class="active dishes-btn"><a data-toggle="tab" href="#"><h4>Dessert</h4></a></li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-5 searching-wrapper">
							<input type="text" class="form-control find" name="find" placeholder="Find a recipe">
							<button class="btn search"><img src="<?= base_url(); ?>images/loop.png" /></button>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 tab-content nopad">
					<div id="dessert" class="col-xs-12 col-sm-12 nopad tab-pane fade in active dessert">
						<div class="col-xs-6 col-sm-4 recipe-list">
							<div class="col-xs-12 col-sm-12 recipe-image-wrap">
								<img src="<?= base_url(); ?>images/recipe-1.jpg" />
							</div>
							<div class="col-xs-12 col-sm-12 recipe-content-wrap">
								<div class="col-xs-12 col-sm-12 recipe-title">
									<h4>SMOOTHIE STRAWIE CREAM</h4>
								</div>
								<div class="col-xs-12 col-sm-12 recipe-text">
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.<p>
								</div>
								<div class="col-xs-12 col-sm-12 line2">
									<hr/>
								</div>
								<div class="col-xs-12 col-sm-12 socmed-wrap">
									<div class="col-xs-12 col-sm-5 v-center nopad">
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x fb-circle"></i>
												<i class="fa fa-facebook fa-stack-1x fa-inverse fb-icon"></i>
											</a>
										</span>
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x twit-circle"></i>
												<i class="fa fa-twitter fa-stack-1x fa-inverse twit-icon"></i>
											</a>
										</span>
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x yt-circle"></i>
												<i class="fa fa-youtube-play fa-stack-1x fa-inverse yt-icon"></i>
											</a>
										</span>
									</div><!--
									--><div class="col-xs-12 col-sm-7 nopad v-center notif">
										<div class="love-wrap">
											<a href="#"><img class="love" src="<?= base_url(); ?>images/love.png" /></a>
											<h6> 2.345 Likes |  </h6>
										</div>
										<div class="share-wrap">
											<a href="#"><img class="share" src="<?= base_url(); ?>images/share.png" /></a>
											<h6> 120 Share </h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-4 recipe-list">
							<div class="col-xs-12 col-sm-12 recipe-image-wrap">
								<img src="<?= base_url(); ?>images/recipe-2.jpg" />
							</div>
							<div class="col-xs-12 col-sm-12 recipe-content-wrap">
								<div class="col-xs-12 col-sm-12 recipe-title">
									<h4>GREEN JUICE</h4>
								</div>
								<div class="col-xs-12 col-sm-12 recipe-text">
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.<p>
								</div>
								<div class="col-xs-12 col-sm-12 line2">
									<hr/>
								</div>
								<div class="col-xs-12 col-sm-12 socmed-wrap">
									<div class="col-xs-12 col-sm-5 v-center nopad">
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x fb-circle"></i>
												<i class="fa fa-facebook fa-stack-1x fa-inverse fb-icon"></i>
											</a>
										</span>
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x twit-circle"></i>
												<i class="fa fa-twitter fa-stack-1x fa-inverse twit-icon"></i>
											</a>
										</span>
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x yt-circle"></i>
												<i class="fa fa-youtube-play fa-stack-1x fa-inverse yt-icon"></i>
											</a>
										</span>
									</div><!--
									--><div class="col-xs-12 col-sm-7 nopad v-center notif">
										<div class="love-wrap">
											<a href="#"><img class="love" src="<?= base_url(); ?>images/love.png" /></a>
											<h6> 2.345 Likes |  </h6>
										</div>
										<div class="share-wrap">
											<a href="#"><img class="share" src="<?= base_url(); ?>images/share.png" /></a>
											<h6> 120 Share </h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 hidden-sm hidden-desktop">
						</div>
						<div class="col-xs-6 col-sm-4 recipe-list">
							<div class="col-xs-12 col-sm-12 recipe-image-wrap">
								<img src="<?= base_url(); ?>images/recipe-3.jpg" />
							</div>
							<div class="col-xs-12 col-sm-12 recipe-content-wrap">
								<div class="col-xs-12 col-sm-12 recipe-title">
									<h4>STRAWBERRY CAKE CREAM</h4>
								</div>
								<div class="col-xs-12 col-sm-12 recipe-text">
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.<p>
								</div>
								<div class="col-xs-12 col-sm-12 line2">
									<hr/>
								</div>
								<div class="col-xs-12 col-sm-12 socmed-wrap">
									<div class="col-xs-12 col-sm-5 v-center nopad">
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x fb-circle"></i>
												<i class="fa fa-facebook fa-stack-1x fa-inverse fb-icon"></i>
											</a>
										</span>
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x twit-circle"></i>
												<i class="fa fa-twitter fa-stack-1x fa-inverse twit-icon"></i>
											</a>
										</span>
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x yt-circle"></i>
												<i class="fa fa-youtube-play fa-stack-1x fa-inverse yt-icon"></i>
											</a>
										</span>
									</div><!--
									--><div class="col-xs-12 col-sm-7 nopad v-center notif">
										<div class="love-wrap">
											<a href="#"><img class="love" src="<?= base_url(); ?>images/love.png" /></a>
											<h6> 2.345 Likes |  </h6>
										</div>
										<div class="share-wrap">
											<a href="#"><img class="share" src="<?= base_url(); ?>images/share.png" /></a>
											<h6> 120 Share </h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-4 recipe-list">
							<div class="col-xs-12 col-sm-12 recipe-image-wrap">
								<img src="<?= base_url(); ?>images/recipe-4.jpg" />
							</div>
							<div class="col-xs-12 col-sm-12 recipe-content-wrap">
								<div class="col-xs-12 col-sm-12 recipe-title">
									<h4>RASPBERRY COCONUT</h4>
								</div>
								<div class="col-xs-12 col-sm-12 recipe-text">
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.<p>
								</div>
								<div class="col-xs-12 col-sm-12 line2">
									<hr/>
								</div>
								<div class="col-xs-12 col-sm-12 socmed-wrap">
									<div class="col-xs-12 col-sm-5 v-center nopad">
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x fb-circle"></i>
												<i class="fa fa-facebook fa-stack-1x fa-inverse fb-icon"></i>
											</a>
										</span>
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x twit-circle"></i>
												<i class="fa fa-twitter fa-stack-1x fa-inverse twit-icon"></i>
											</a>
										</span>
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x yt-circle"></i>
												<i class="fa fa-youtube-play fa-stack-1x fa-inverse yt-icon"></i>
											</a>
										</span>
									</div><!--
									--><div class="col-xs-12 col-sm-7 nopad v-center notif">
										<div class="love-wrap">
											<a href="#"><img class="love" src="<?= base_url(); ?>images/love.png" /></a>
											<h6> 2.345 Likes |  </h6>
										</div>
										<div class="share-wrap">
											<a href="#"><img class="share" src="<?= base_url(); ?>images/share.png" /></a>
											<h6> 120 Share </h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 hidden-sm hidden-desktop"></div>
						<div class="col-xs-6 col-sm-4 recipe-list">
							<div class="col-xs-12 col-sm-12 recipe-image-wrap">
								<img src="<?= base_url(); ?>images/recipe-5.jpg" />
							</div>
							<div class="col-xs-12 col-sm-12 recipe-content-wrap">
								<div class="col-xs-12 col-sm-12 recipe-title">
									<h4>COCONUT CAKE</h4>
								</div>
								<div class="col-xs-12 col-sm-12 recipe-text">
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.<p>
								</div>
								<div class="col-xs-12 col-sm-12 line2">
									<hr/>
								</div>
								<div class="col-xs-12 col-sm-12 socmed-wrap">
									<div class="col-xs-12 col-sm-5 v-center nopad">
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x fb-circle"></i>
												<i class="fa fa-facebook fa-stack-1x fa-inverse fb-icon"></i>
											</a>
										</span>
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x twit-circle"></i>
												<i class="fa fa-twitter fa-stack-1x fa-inverse twit-icon"></i>
											</a>
										</span>
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x yt-circle"></i>
												<i class="fa fa-youtube-play fa-stack-1x fa-inverse yt-icon"></i>
											</a>
										</span>
									</div><!--
									--><div class="col-xs-12 col-sm-7 nopad v-center notif">
										<div class="love-wrap">
											<a href="#"><img class="love" src="<?= base_url(); ?>images/love.png" /></a>
											<h6> 2.345 Likes |  </h6>
										</div>
										<div class="share-wrap">
											<a href="#"><img class="share" src="<?= base_url(); ?>images/share.png" /></a>
											<h6> 120 Share </h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-4 recipe-list">
							<div class="col-xs-12 col-sm-12 recipe-image-wrap">
								<img src="<?= base_url(); ?>images/recipe-6.jpg" />
							</div>
							<div class="col-xs-12 col-sm-12 recipe-content-wrap">
								<div class="col-xs-12 col-sm-12 recipe-title">
									<h4>RANGI CAKE</h4>
								</div>
								<div class="col-xs-12 col-sm-12 recipe-text">
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.<p>
								</div>
								<div class="col-xs-12 col-sm-12 line2">
									<hr/>
								</div>
								<div class="col-xs-12 col-sm-12 socmed-wrap">
									<div class="col-xs-12 col-sm-5 v-center nopad">
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x fb-circle"></i>
												<i class="fa fa-facebook fa-stack-1x fa-inverse fb-icon"></i>
											</a>
										</span>
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x twit-circle"></i>
												<i class="fa fa-twitter fa-stack-1x fa-inverse twit-icon"></i>
											</a>
										</span>
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x yt-circle"></i>
												<i class="fa fa-youtube-play fa-stack-1x fa-inverse yt-icon"></i>
											</a>
										</span>
									</div><!--
									--><div class="col-xs-12 col-sm-7 nopad v-center notif">
										<div class="love-wrap">
											<a href="#"><img class="love" src="<?= base_url(); ?>images/love.png" /></a>
											<h6> 2.345 Likes |  </h6>
										</div>
										<div class="share-wrap">
											<a href="#"><img class="share" src="<?= base_url(); ?>images/share.png" /></a>
											<h6> 120 Share </h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 hidden-sm hidden-desktop"></div>
						<div class="col-xs-6 col-sm-4 recipe-list">
							<div class="col-xs-12 col-sm-12 recipe-image-wrap">
								<img src="<?= base_url(); ?>images/recipe-7.jpg" />
							</div>
							<div class="col-xs-12 col-sm-12 recipe-content-wrap">
								<div class="col-xs-12 col-sm-12 recipe-title">
									<h4>NATA DE COCO FRUIT</h4>
								</div>
								<div class="col-xs-12 col-sm-12 recipe-text">
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.<p>
								</div>
								<div class="col-xs-12 col-sm-12 line2">
									<hr/>
								</div>
								<div class="col-xs-12 col-sm-12 socmed-wrap">
									<div class="col-xs-12 col-sm-5 v-center nopad">
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x fb-circle"></i>
												<i class="fa fa-facebook fa-stack-1x fa-inverse fb-icon"></i>
											</a>
										</span>
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x twit-circle"></i>
												<i class="fa fa-twitter fa-stack-1x fa-inverse twit-icon"></i>
											</a>
										</span>
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x yt-circle"></i>
												<i class="fa fa-youtube-play fa-stack-1x fa-inverse yt-icon"></i>
											</a>
										</span>
									</div><!--
									--><div class="col-xs-12 col-sm-7 nopad v-center notif">
										<div class="love-wrap">
											<a href="#"><img class="love" src="<?= base_url(); ?>images/love.png" /></a>
											<h6> 2.345 Likes |  </h6>
										</div>
										<div class="share-wrap">
											<a href="#"><img class="share" src="<?= base_url(); ?>images/share.png" /></a>
											<h6> 120 Share </h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-4 recipe-list">
							<div class="col-xs-12 col-sm-12 recipe-image-wrap">
								<img src="<?= base_url(); ?>images/recipe-8.jpg" />
							</div>
							<div class="col-xs-12 col-sm-12 recipe-content-wrap">
								<div class="col-xs-12 col-sm-12 recipe-title">
									<h4>STRAWBERRY CHOCOLATE</h4>
								</div>
								<div class="col-xs-12 col-sm-12 recipe-text">
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.<p>
								</div>
								<div class="col-xs-12 col-sm-12 line2">
									<hr/>
								</div>
								<div class="col-xs-12 col-sm-12 socmed-wrap">
									<div class="col-xs-12 col-sm-5 v-center nopad">
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x fb-circle"></i>
												<i class="fa fa-facebook fa-stack-1x fa-inverse fb-icon"></i>
											</a>
										</span>
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x twit-circle"></i>
												<i class="fa fa-twitter fa-stack-1x fa-inverse twit-icon"></i>
											</a>
										</span>
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x yt-circle"></i>
												<i class="fa fa-youtube-play fa-stack-1x fa-inverse yt-icon"></i>
											</a>
										</span>
									</div><!--
									--><div class="col-xs-12 col-sm-7 nopad v-center notif">
										<div class="love-wrap">
											<a href="#"><img class="love" src="<?= base_url(); ?>images/love.png" /></a>
											<h6> 2.345 Likes |  </h6>
										</div>
										<div class="share-wrap">
											<a href="#"><img class="share" src="<?= base_url(); ?>images/share.png" /></a>
											<h6> 120 Share </h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 hidden-sm hidden-desktop"></div>
						<div class="col-xs-6 col-sm-4 recipe-list">
							<div class="col-xs-12 col-sm-12 recipe-image-wrap">
								<img src="<?= base_url(); ?>images/recipe-9.jpg" />
							</div>
							<div class="col-xs-12 col-sm-12 recipe-content-wrap">
								<div class="col-xs-12 col-sm-12 recipe-title">
									<h4>SMOOTHIE CENDOL</h4>
								</div>
								<div class="col-xs-12 col-sm-12 recipe-text">
									<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.<p>
								</div>
								<div class="col-xs-12 col-sm-12 line2">
									<hr/>
								</div>
								<div class="col-xs-12 col-sm-12 socmed-wrap">
									<div class="col-xs-12 col-sm-5 v-center nopad">
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x fb-circle"></i>
												<i class="fa fa-facebook fa-stack-1x fa-inverse fb-icon"></i>
											</a>
										</span>
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x twit-circle"></i>
												<i class="fa fa-twitter fa-stack-1x fa-inverse twit-icon"></i>
											</a>
										</span>
										<span class="fa-stack fa-lg recipe-socmed">
											<a href="#">
												<i class="fa fa-circle fa-stack-2x yt-circle"></i>
												<i class="fa fa-youtube-play fa-stack-1x fa-inverse yt-icon"></i>
											</a>
										</span>
									</div><!--
									--><div class="col-xs-12 col-sm-7 nopad v-center notif">
										<div class="love-wrap">
											<a href="#"><img class="love" src="<?= base_url(); ?>images/love.png" /></a>
											<h6> 2.345 Likes |  </h6>
										</div>
										<div class="share-wrap">
											<a href="#"><img class="share" src="<?= base_url(); ?>images/share.png" /></a>
											<h6> 120 Share </h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 text-center pagination-wrap">
							<ul class="pagination pagination-lg recipe-pagination">
								<li><a href="#"><i class="fa fa-angle-left fa-lg prev-page"></i></a></li>
								<li><a href="#" class="page-active">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#"><i class="fa fa-angle-right fa-lg next-page"></i></a></li>
							</ul>
						</div>
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
	<script src="<?= base_url(); ?>plugin/owl/js/owl.carousel.js"></script>
	
    <script type="text/javascript">		
		$(function() {
			slide();
		});
		
		function slide(){
			var owl = $(".owl-slide");
			
			owl.owlCarousel({
				autoPlay: true,
			  	itemsMobile : true,
				pagination: true,
				singleItem: true,
				paginationSpeed: 900,
			});
		}
		
    </script>
	
</body>
</html>

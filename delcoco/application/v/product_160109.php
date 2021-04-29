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
	<section class="product1">
		<? $this->load->view('menu');?>
		<div class="container-fluid product-section-1">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="col-xs-12 col-sm-4 v-center product1-title-wrap">
						<h1><?= $arr_section[0]->title; ?></h1>
						<p><?= $arr_section[0]->subtitle; ?></p>
					</div><!--
					--><div class="col-xs-12 col-sm-4 v-center">
						<div class="col-xs-12 col-sm-12 big-image">
							<div class="col-xs-12 col-sm-12 benefit-main-image" id="benefit-main-image" style="background-image:url(<?= base_url(); ?>images/susu.png);">
							</div>
						</div>
					</div><!--
					-->
					<? foreach ($arr_benefit as $key => $benefit): ?>
						<div id="product-benefit-<?= $benefit->id; ?>" class="col-xs-12 col-sm-4 v-center product1-content" <? if ($key != 1): ?>style="display: none;"<? endif; ?>>
							<div class="col-xs-12 col-sm-12">
								<h4><?= $benefit->name; ?> Benefits:</h4>
							</div>
							<div class="col-xs-12 col-sm-12 line1">
								<hr/>
							</div>
							<div class="col-xs-12 col-sm-12">
								<div class="col-xs-12 col-sm-12 greenpar">
									<p><?= $benefit->title; ?></p>
								</div>
								<div class="col-xs-12 col-sm-12 graypar">
									<p><?= $benefit->benefit; ?></p>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 line1">
								<hr/>
							</div>
							<div class="col-xs-12 col-sm-12">
								<div class="col-xs-12 col-sm-12 greenpar">
									<p><?= $benefit->title2; ?></p>
								</div>
								<div class="col-xs-12 col-sm-12 graypar">
									<p><?= $benefit->benefit2; ?></p>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 line1">
								<hr/>
							</div>
							<div class="col-xs-12 col-sm-12">
								<div class="col-xs-12 col-sm-12 greenpar">
									<p><?= $benefit->title3; ?></p>
								</div>
								<div class="col-xs-12 col-sm-12 graypar">
									<p><?= $benefit->benefit3; ?></p>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 line1">
								<hr/>
							</div>
						</div>
					<? endforeach; ?>
				</div>
				<div class="col-xs-12 col-sm-12">
					<div class="col-xs-12 col-sm-4 col-sm-offset-4">
						<div class="owl-carousel owl-theme product-slider-1">
							<?  foreach ($arr_benefit as $key => $benefit): ?>
								<div class="item item-benefit">
									<div class="green-circle <? if ($key == 1): ?>benefit-opacity-on<? else: ?>benefit-opacity-off<? endif; ?>">
										<div class="white-circle-border">
											<div class="circle-padding">
											</div>
										</div>
									</div>
									<div class="item-pict text-center" data-id-benefit="<?= $benefit->id; ?>">
										<img src="<?= base_url(); ?>images/website/<?= $arr_benefit_image_lookup[$benefit->id]['Thumbnail'] ?>" data-src="<?= base_url(); ?>images/website/<?= $arr_benefit_image_lookup[$benefit->id][''] ?>" />
									</div>
								</div>
							<? endforeach; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="product-stay-1">
				<img src="<?= base_url(); ?>images/product-stay-1.png" />
			</div>
			<div class="product-stay-2">
				<img src="<?= base_url(); ?>images/product-stay-2.png" />
			</div>
			<div class="product-stay-3">
				<img src="<?= base_url(); ?>images/product-stay-3.png" />
			</div>
		</div>
    </section>

	<section class="index2">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="wrapper-box-product-1">
						<div class="center-box text-center center-block">
							<div class="wrapper-text-product-1 text-center">
								<h3>“<?= $arr_section[1]->title; ?>”</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="product-stay-4">
				<img src="<?= base_url(); ?>images/product-stay-4.png" />
			</div>
		</div>
	</section>

	<section class="product3">
		<div class="container-fluid product-section-3">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="col-xs-12 col-sm-12 title-top-pict">
						<img src="<?= base_url(); ?>images/stay5.png" />
						<h1><?= $arr_section[2]->title; ?></h1>
						<h4><?= $arr_section[2]->subtitle; ?></h4>
					</div>
					<div class="col-xs-12 col-sm-12" style="padding:0 5%;">
						<div class="owl-carousel owl-theme coconut-slider">
							<? foreach ($arr_product_main as $key => $product_main): ?>
								<? if (count($arr_product_image_lookup[$product_main->id]) <= 0): ?>
									<? continue; ?>
								<? endif; ?>

								<div class="item coconut-item" data-product-id="<?= $product_main->id; ?>">
									<div class="bottom-border">
										<div class="triangle <? if ($key == 0): ?>triangle-opacity-on<? else: ?>triangle-opacity-off<? endif; ?>"></div>
										<div class="green-circle-border">
											<div class="coconut-slider-pict" style="background-image:url(<?= base_url(); ?>images/website/<?= $product_main->image_name; ?>);">
												<div class="white-overlay overlay-opacity-off">
													<div class="coconut-slider-text">
														<h5><?= $product_main->name; ?></h5>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<? endforeach; ?>
						</div>
					</div>
					<div id="product-detail-content-area" class="col-xs-12 col-sm-12 product-detail">
						<? foreach ($arr_product as $key => $product): ?>
							<div id="product-detail-<?= $product->id; ?>" class="content-product <? if ($key > 0): ?>display-none<? endif; ?>">
								<div class="col-xs-12 col-sm-5">
									<div class="col-xs-12 col-sm-12 nopadleft product-big-zoom-wrap">
										<div class="col-xs-12 col-sm-12 nopad product-big-zoom" style="background-image:url(<?= base_url(); ?>images/website/<?= $arr_product_image_lookup[$product->id][0]; ?>);">

										</div>
									</div>
									<div class="col-xs-12 col-sm-12 nopad product-small-zoom-wrap">
										<? foreach ($arr_product_image_lookup[$product->id] as $product_image): ?>
											<div class="col-xs-4 col-sm-4 nopadleft product-small-zoom">
												<div class="col-xs-12 col-sm-12 product-small-border" style="background-image:url(<?= base_url(); ?>images/website/<?= $product_image; ?>);" data-src="<?= base_url(); ?>images/website/<?= $product_image; ?>">
												</div>
											</div>
										<? endforeach; ?>
									</div>
								</div>
								<div class="col-xs-12 col-sm-7 product-detail-tab-wrapper">
									<ul class="nav nav-pills product-detail-tab">
										<li class="active"><a data-toggle="pill" href="#type-<?= $product->id; ?>-1">Product Type</a></li>
										<li><a data-toggle="pill" href="#packaging-<?= $product->id; ?>-1">Packaging & Storage</a></li>
									</ul>

									<div class="tab-content product-detail-content">
										<div id="type-<?= $product->id; ?>-1" class="tab-pane fade in active">
											<h4><?= $product->description; ?></h4>
											<div><?= $product->type; ?></div>
										</div>
										<div id="packaging-<?= $product->id; ?>-1" class="tab-pane fade">
											<?= $product->storage; ?>
										</div>
									</div>
								</div>
							</div>
						<? endforeach; ?>
					</div>
					<div class="col-xs-12 col-sm-12 line3">
						<hr/>
					</div>
					<? if (count($arr_product_other) > 0): ?>
						<div class="col-xs-12 col-sm-12 product-other-title title-top-pict">
							<img src="<?= base_url(); ?>images/stay5.png" />
							<h3><?= $arr_section[3]->title; ?></h3>
						</div>
						<div class="col-xs-12 col-sm-12" style="padding:0 5%;">
							<div class="owl-carousel owl-theme other-slider">
								<? foreach($arr_product_other as $product_other): ?>
									<div class="item item-product-other" data-product-other-id="<?= $product_other->id; ?>" style="cursor-pointer">
										<div class="other-image">
											<img src="<?= base_url(); ?>images/website/<?= $product_other->image_name; ?>" />
										</div>
										<div class="other-net">
											<p><?= $product_other->name; ?></p>
										</div>
									</div>
								<? endforeach; ?>
							</div>
						</div>
					<? endif; ?>
				</div>
			</div>
			<div class="product-stay-5">
				<img src="<?= base_url(); ?>images/stay4.png" />
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
			coconutSlide();
			otherSlide();
			changeImageBenefit();
			changeImageDetail();
			changeCoconutSlider();
			hover();
		});

		function hover() {
			$('.item-benefit').hover(function() {
				if ($(this).hasClass('benefit-active')) {
					return;
				}

				$(this).find('.green-circle').removeClass('benefit-opacity-off').addClass('benefit-opacity-on');
			}, function() {
				if ($(this).hasClass('benefit-active')) {
					return;
				}

				$(this).find('.green-circle').removeClass('benefit-opacity-on').addClass('benefit-opacity-off');
			});
		}

		function slide(){
			var owl = $(".product-slider-1");

			owl.owlCarousel({
				items: 4,
			  	itemsMobile : false,
				pagination: false,
				paginationSpeed: 900,
				navigation: true,
				navigationText: ['<i class="fa fa-angle-left fa-2x"></i>', '<i class="fa fa-angle-right fa-2x"></i>']
			});
		}

		function coconutSlide(){
			var owl = $(".coconut-slider");

			owl.owlCarousel({
				items: 5,
			  	itemsMobile : true,
				pagination: false,
				paginationSpeed: 900,
				navigation: true,
				navigationText: ['<i class="fa fa-angle-left fa-2x product-slider-control-2"></i>', '<i class="fa fa-angle-right fa-2x product-slider-control-2"></i>']
			});
		}

		function otherSlide(){
			var owl = $(".other-slider");

			owl.owlCarousel({
				items: 5,
			  	itemsMobile : true,
				pagination: false,
				paginationSpeed: 900,
				navigation: true,
				navigationText: ['<i class="fa fa-angle-left fa-2x product-slider-control-2"></i>', '<i class="fa fa-angle-right fa-2x product-slider-control-2"></i>']
			});
		}

		function changeImageBenefit() {
			$('.item-pict').click(function() {
				var imageSrc = $(this).children().attr('data-src');
				var imgSrcBg = 'url('+ imageSrc +')';
				var benefitId = $(this).attr('data-id-benefit');

				$('#benefit-main-image').css('background-image', imgSrcBg);

				$('.green-circle').removeClass('benefit-opacity-on').addClass('benefit-opacity-off');
				$('.item-benefit').removeClass('benefit-active');

				$(this).parent().addClass('benefit-active');
				$(this).prev().removeClass('benefit-opacity-off').addClass('benefit-opacity-on');

				$('.product1-content').hide();
				$('#product-benefit-'+benefitId).show();
			});
		}

		function changeImageDetail() {
			$('.product-small-zoom').click(function() {
				var imageSrc = $(this).children().attr('data-src');
				var imgSrcBg = 'url('+ imageSrc +')';
				$('.product-big-zoom').css('background-image', imgSrcBg);
			});
		}

		function changeCoconutSlider() {
			$('.coconut-item').click(function(){
				productId = $(this).attr('data-product-id');

				$('.white-overlay').removeClass('overlay-opacity-off').addClass('overlay-opacity-on');
				$(this).find('.white-overlay').removeClass('overlay-opacity-on').addClass('overlay-opacity-off');

				$('.triangle').removeClass('triangle-opacity-on').addClass('triangle-opacity-off');
				$(this).find('.triangle').removeClass('triangle-opacity-off').addClass('triangle-opacity-on');

				$('.content-product').addClass('display-none');
				$('#product-detail-'+productId).removeClass('display-none');

				$('html, body').animate({
					scrollTop: $("#product-detail-content-area").offset().top - 100
				}, 1000);
			});

			$('.item-product-other').click(function() {
				productId = $(this).attr('data-product-other-id');

				$('.white-overlay').removeClass('overlay-opacity-off').addClass('overlay-opacity-on');
				$('.triangle').removeClass('triangle-opacity-on').addClass('triangle-opacity-off');

				$('.content-product').addClass('display-none');
				$('#product-detail-'+productId).removeClass('display-none');

				$('html, body').animate({
					scrollTop: $("#product-detail-content-area").offset().top - 100
				}, 1000);
			});
		}

    </script>

</body>
</html>

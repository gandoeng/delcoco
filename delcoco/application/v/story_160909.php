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
	<link href="<?= base_url(); ?>css/style-comparison.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

	<section class="story1">
		<? $this->load->view('menu');?>
		<div class="container-fluid sec-story1">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="wrapper-box">
						<div class="center-box center-block">
							<div class="wrapper-text-story-1 text-right">
								<img src="<?= base_url(); ?>images/stay5.png" />
								<h5><?= $arr_section[0]->title; ?></h5>
								<h7><?= $arr_section[0]->subtitle; ?></h7>
								<p><?= $arr_section[0]->content; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="coco-story-1" data-start="transform:translate3d(0px, 0px, 0px);" data-end="transform:translate3d(-75%, -700%, 0px);">
				<img src="<?= base_url(); ?>images/fly-story-1.png" />
			</div>

			<div class="stay-story-1 text-left">
				<img src="<?= base_url(); ?>images/stay-story-1.png" />
			</div>

			<div class="coco-mobile-story-1">
				<img src="<?= base_url(); ?>images/coco-mobile-story-1.png" />
			</div>
		</div>
    </section>

	<section class="story2">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="wrapper-box-story-2">
						<div class="center-box center-block">
							<div class="wrapper-text-story-2 text-left">
								<div class="mount">
									<img src="<?= base_url(); ?>images/stay5.png" />
								</div>
								<h7><?= $arr_section[1]->title; ?></h7>
								<p><?= $arr_section[1]->content; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="coco-story-2" data-start="transform:translate3d(0px, 0px, 0px);" data-end="transform:translate3d(0px, -700%, 0px);">
				<img src="<?= base_url(); ?>images/fly-story-2.png" />
			</div>
			<div class="coco-story-3" data-start="transform:translate3d(0px, 0px, 0px);" data-end="transform:translate3d(0px, -1400%, 0px);">
				<img src="<?= base_url(); ?>images/fly-story-3.png" />
			</div>
			<div class="coco-story-4" data-start="transform:translate3d(0px, 0px, 0px);" data-end="transform:translate3d(0px, -900%, 0px);">
				<img src="<?= base_url(); ?>images/fly-story-4.png" />
			</div>
			<div class="coco-story-5" data-start="transform:translate3d(0px, 0px, 0px);" data-end="transform:translate3d(0px, -300%, 0px);">
				<img src="<?= base_url(); ?>images/fly-story-5.png" />
			</div>
			<div class="coco-story-add" data-start="transform:translate3d(0px, 0px, 0px);" data-end="transform:translate3d(0px, -1000%, 0px);">
				<img src="<?= base_url(); ?>images/fly-story-add.png" />
			</div>

		</div>
	</section>

	<section class="story3">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="wrapper-box-story-3">
						<div class="center-box center-block">
							<div class="wrapper-text-story-3 text-right">
								<div class="mount">
									<img src="<?= base_url(); ?>images/stay5.png" />
								</div>
								<h7><?= $arr_section[2]->title; ?></h7>
								<p><?= $arr_section[2]->content; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="coco-story-6" data-start="transform:translate3d(0px, 0px, 0px);" data-end="transform:translate3d(400%, 0px, 0px);">
				<img src="<?= base_url(); ?>images/fly-story-6.png" />
			</div>
			<div class="cart-wrapper">
				<div class="cart">
					<img src="<?= base_url(); ?>images/cart.png" />
				</div>
				<div id="bar1" class="green-bar v-center" data-start="width:20%;" data-end="width:80%;">
				</div><!--
				--><div class="percent-wrap text-center v-center">
					<div class="percent-no">
						<p id="bar-text-1"></p>
					</div>
				</div>
			</div>

			<div class="ship-wrapper">
				<div class="ship">
					<img src="<?= base_url(); ?>images/ship.png" />
				</div>
				<div id="bar2" class="green-bar v-center" data-start="width:35%;" data-end="width:95%;">
				</div><!--
				--><div class="percent-wrap text-center v-center">
					<div class="percent-no">
						<p id="bar-text-2"></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="story4">
		<div class="pattern">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<div class="wrapper-box-story-2">
							<div class="center-box center-block">
								<div class="wrapper-text-story-2 text-left">
									<div class="mount">
										<img src="<?= base_url(); ?>images/stay5.png" />
									</div>
									<h7><?= $arr_section[3]->title; ?></h7>
									<p><?= $arr_section[3]->content; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="story5">
		<div class="container-fluid sec-story5">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="wrapper-box-story-4">
						<div class="center-box center-block">
							<div class="wrapper-text-story-4 text-right">
								<div class="mount">
									<img src="<?= base_url(); ?>images/stay5.png" />
								</div>
								<h7><?= $arr_section[4]->title; ?></h7>
								<p><?= $arr_section[4]->content; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row in-pad">
				<div class="col-xs-12 col-sm-12">
					<div class="col-xs-12 col-sm-4 text-center top-dis bot-mob">
						<div class="col-xs-12 col-sm-12 stay-story-2">
							<img src="<?= base_url(); ?>images/website/<?= $arr_detail_section_item[0]->image_name; ?>" />
						</div>
						<div class="col-xs-12 col-sm-12 guard">
							<h2><?= $arr_detail_section_item[0]->title; ?></h2>
							<p><?= $arr_detail_section_item[0]->content; ?></p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 text-center bot-mob">
						<div class="col-xs-12 col-sm-12 stay-story-3">
							<img src="<?= base_url(); ?>images/website/<?= $arr_detail_section_item[1]->image_name; ?>" />
						</div>
						<div class="col-xs-12 col-sm-12 guard">
							<h2><?= $arr_detail_section_item[1]->title; ?></h2>
							<p><?= $arr_detail_section_item[1]->content; ?></p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4 text-center top-dis bot-mob">
						<div class="col-xs-12 col-sm-12 stay-story-4">
							<img src="<?= base_url(); ?>images/website/<?= $arr_detail_section_item[2]->image_name; ?>" />
						</div>
						<div class="col-xs-12 col-sm-12 guard">
							<h2><?= $arr_detail_section_item[2]->title; ?></h2>
							<p><?= $arr_detail_section_item[2]->content; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="coco-story-7" data-start="transform:translate3d(0px, 0px, 0px);" data-end="transform:translate3d(0px, 900%, 0px);">
				<img src="<?= base_url(); ?>images/fly-story-7.png" />
			</div>
			<div class="coco-story-8" data-start="transform:translate3d(0px, 0px, 0px);" data-end="transform:translate3d(0px, 1200%, 0px);">
				<img src="<?= base_url(); ?>images/fly-story-8.png" />
			</div>
			<div class="coco-story-9" data-start="transform:translate3d(0px, 0px, 0px);" data-end="transform:translate3d(0px, 700%, 0px);">
				<img src="<?= base_url(); ?>images/fly-story-9.png" />
			</div>
			<div class="coco-story-10" data-start="transform:translate3d(0px, 0px, 0px);" data-end="transform:translate3d(0px, 800%, 0px);">
				<img src="<?= base_url(); ?>images/fly-story-10.png" />
			</div>
			<div class="coco-story-11" data-start="transform:translate3d(0px, 0px, 0px);" data-end="transform:translate3d(0px, 700%, 0px);">
				<img src="<?= base_url(); ?>images/fly-story-11.png" />
			</div>
			<div class="coco-story-12" data-start="transform:translate3d(0px, 0px, 0px);" data-end="transform:translate3d(0px, 500%, 0px);">
				<img src="<?= base_url(); ?>images/fly-story-12.png" />
			</div>
			<div class="coco-story-13" data-start="transform:translate3d(0px, 0px, 0px);" data-end="transform:translate3d(0px, 1100%, 0px);">
				<img src="<?= base_url(); ?>images/fly-story-13.png" />
			</div>
			<div class="coco-story-14" data-start="transform:translate3d(0px, 0px, 0px);" data-end="transform:translate3d(0px, 900%, 0px);">
				<img src="<?= base_url(); ?>images/fly-story-14.png" />
			</div>
			<div class="coco-story-15" data-start="transform:translate3d(0px, 0px, 0px);" data-end="transform:translate3d(0px, -1400%, 0px);">
				<img src="<?= base_url(); ?>images/wave.png" />
			</div>
		</div>
	</section>

	<section class="story6">
		<div class="container-fluid">
			<div class="row">
				<div class="wrapper-box-story-2">
					<div class="center-box center-block">
						<div class="wrapper-text-story-2 text-left">
							<div class="mount">
								<img src="<?= base_url(); ?>images/stay5.png" />
							</div>
							<h7><?= $arr_section[5]->title; ?></h7>
							<p><?= $arr_section[5]->subtitle; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="stay-story-5" id="slide1">
				<img src="<?= base_url(); ?>images/website/<?= $arr_section_image_lookup[0]; ?>" />
			</div>
			<div class="stay-story-6" id="slide2">
				<img src="<?= base_url(); ?>images/website/<?= $arr_section_image_lookup[1]; ?>" />
			</div>
		</div>
	</section>

	<? $this->load->view('footer');?>

	<script src="<?= base_url(); ?>plugin/jqueryui/jquery-ui.min.js"></script>
	<script src="<?= base_url(); ?>plugin/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>js/skrollr.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>js/main.js"></script>
	<script src="<?= base_url(); ?>js/scrollreveal.min.js"></script>
    <script type="text/javascript">
		$(function() {
			init();
			reveal();
			percent();
		});

		$(document).on('scroll', function() {
			percent();
		});

		function init() {
			if((window).innerWidth > 768){
				skrollr.init({
					forceHeight:false
				});
			}
		}

		function reveal(){
			window.sr = ScrollReveal({ duration: 1700 }).reveal('#slide1, #slide2');
		}

		function percent() {
			var bar1 = $('#bar1').width();
			var parentBar1 = $('#bar1').offsetParent().width();
			var percentBar1 = 100*bar1/parentBar1;
			var barno1 = percentBar1.toFixed();

			var bar2 = $('#bar2').width();
			var parentBar2 = $('#bar2').offsetParent().width();
			var percentBar2 = 100*bar2/parentBar1;
			var barno2 = percentBar2.toFixed();

			barno1 = barno1 + '%';
			barno2 = barno2 + '%';

			$('#bar-text-1').html(barno1);
			$('#bar-text-2').html(barno2);
		}
    </script>

</body>
</html>

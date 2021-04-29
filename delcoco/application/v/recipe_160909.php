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
						<? foreach ($arr_slideshow as $slideshow): ?>
							<div class="item">
								<div class="slider-image" style="background-image:url(<?= base_url(); ?>images/website/<?= $slideshow->image_name; ?>);">
									<div class="wrapper-box-recipe-2">
										<div class="center-box center-block">
											<div class="wrapper-text-recipe-2 text-left">
												<h1><?= $slideshow->title; ?></h1>
												<p><?= $slideshow->content; ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						<? endforeach; ?>
					</div>
					<div class="recipe-stay-1">
						<img src="<?= base_url();?>images/recipe-slider-stay-1.png" />
					</div>
					<div class="recipe-stay-2">
						<img src="<?= base_url();?>images/recipe-slider-stay-2.png" />
					</div>
				</div>
			</div>
		</div>
    </section>

	<section class="recipe2">
		<div class="container-fluid recipe-section-2">
			<div class="row">
				<div class="col-xs-12 col-sm-12 title-top-pict">
					<img src="<?= base_url(); ?>images/stay5.png" />
					<h1><?= $arr_section[0]->title; ?></h1>
					<h4><?= $arr_section[0]->subtitle; ?></h4>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 dishes-button-row">
					<div class="form-inline">
						<div class="col-xs-12 col-sm-7 nopad">
							<ul class="nav nav-pills text-center dishes">
								<? foreach($arr_category as $category): ?>
									<li class="dishes-btn <? if ($category_id == $category->id): ?>active<? endif; ?>"><a href="<?= base_url(); ?>recipe/all/<?= $category->id; ?>"><h4><?= $category->name; ?></h4></a></li>
								<? endforeach; ?>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-5 searching-wrapper">
							<input id="recipe-search" type="text" class="form-control find" name="find" placeholder="Find a recipe" value="<?= $query; ?>">
							<button id="btn-search" class="btn search" onclick="search(1);"><img src="<?= base_url(); ?>images/loop.png" /></button>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 tab-content nopad">
					<div id="dessert" class="col-xs-12 col-sm-12 nopad tab-pane fade in active dessert">
						<? foreach ($arr_recipe as $key => $recipe): ?>
							<div class="col-xs-6 col-sm-4 recipe-list">
								<div class="col-xs-12 col-sm-12 recipe-image-wrap">
									<a href="<?= base_url(); ?>recipe/detail/<?= $recipe->id; ?>/">
										<div class="col-xs-12 col-sm-12 recipe-image" style="background-image:url(<?= base_url(); ?>images/website/<?= $recipe->image_name ?>);">
										</div>
									</a>
								</div>
								<div class="col-xs-12 col-sm-12 recipe-content-wrap">
									<a href="<?= base_url(); ?>recipe/detail/<?= $recipe->id; ?>/">
										<div class="col-xs-12 col-sm-12 recipe-title">
											<h4><?= $recipe->name; ?></h4>
										</div>
									</a>
									<div class="col-xs-12 col-sm-12 recipe-text">
										<p><?= $recipe->description; ?><p>
									</div>
									<div class="col-xs-12 col-sm-12 line2">
										<hr/>
									</div>
									<div class="col-xs-12 col-sm-12 socmed-wrap">
										<div class="col-xs-12 col-sm-5 v-center nopad">
											<span class="fa-stack fa-lg recipe-socmed">
												<a onclick="fbShare($(this));" style="cursor: pointer;" data-name="<?= $recipe->name; ?>" data-image-name="<?= $recipe->image_name; ?>">
													<i class="fa fa-circle fa-stack-2x fb-circle"></i>
													<i class="fa fa-facebook fa-stack-1x fa-inverse fb-icon"></i>
												</a>
											</span>
											<span class="fa-stack fa-lg recipe-socmed">
												<a onclick="javascript:window.open('https://twitter.com/share?url=<?= current_url(); ?>&text=<?= $recipe->name; ?>','mywindowtitle','width=500,height=445')" style="cursor: pointer;">
													<i class="fa fa-circle fa-stack-2x twit-circle"></i>
													<i class="fa fa-twitter fa-stack-1x fa-inverse twit-icon"></i>
												</a>
											</span>
										</div><!--
										--><div class="col-xs-12 col-sm-7 nopad v-center notif">
											<div class="love-wrap">
												<a href="#"><img class="love" src="<?= base_url(); ?>images/love.png" /></a>
												<h6> <?= $recipe->likes; ?> Likes</h6>
											</div>
										</div>
									</div>
								</div>
							</div>

							<? if ($key > 0 && $key % 2 == 0): ?>
								<div class="col-xs-12 hidden-sm hidden-desktop"></div>
							<? endif; ?>
						<? endforeach; ?>

						<div class="col-xs-12 col-sm-12 text-center pagination-wrap">
							<ul class="pagination pagination-lg recipe-pagination">
								<li><a onclick="prev();" style="cursor: pointer;"><i class="fa fa-angle-left fa-lg prev-page"></i></a></li>
								<? for ($i = 1; $i <= $count_recipe; $i++): ?>
									<li><a onclick="changePage('<?= $i; ?>');" style="cursor: pointer;" class="<? if ($i == $page): ?>page-active<? endif; ?>"><?= $i; ?></a></li>
								<? endfor; ?>
								<li><a onclick="next();" style="cursor: pointer;"><i class="fa fa-angle-right fa-lg next-page"></i></a></li>
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
	<script src="<?= base_url(); ?>js/jquery.base64.js" type="text/javascript"></script>

    <script type="text/javascript">
		$(function() {
			slide();
			keypress();
			initFacebookSDK();
		});

		var maxCountPage = parseInt('<?= $count_recipe; ?>');
		var pageRecipe = parseInt('<?= $page; ?>');

		function changePage(page) {
			search(page);
		}

		function initFacebookSDK() {
			window.fbAsyncInit = function() {
				FB.init({
					appId: '549649298546997',
					xfbml: true,
					version: 'v2.6'
				});
			};

			(function(d, s, id){
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) {return;}
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		}

		function fbShare(obj) {
			var name = obj.attr('data-name');
			var imageName = obj.attr('data-image-name');

			FB.ui({
				method: 'feed',
				link: '<?= base_url(); ?>',
				caption: name,
				picture: '<?= base_url(); ?>images/website/'+imageName
			}, function(response){});
		}

		function keypress() {
			$('#recipe-search').keypress(function(e) {
				if ((e.which == 13)) {
					search(1);
				}
			});
		}

		function next() {
			if (pageRecipe == maxCountPage) {
				return;
			}

			pageRecipe += 1;

			search(pageRecipe);
		}

		function prev() {
			if (pageRecipe <= 1) {
				return;
			}

			pageRecipe -= 1;

			search(pageRecipe);
		}

		function search(page) {
			var query = ($('#recipe-search').val() != '') ? $.base64('encode', $('#recipe-search').val()) : '';

			window.location.href = '<?= base_url(); ?>recipe/all/<?= $category_id; ?>/'+ page +'/'+ query +'/';
		}

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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<script src="<?= base_url(); ?>js/jquery-1.11.1.min.js" type="text/javascript"></script>
	<script src="<?= base_url(); ?>plugin/tinyEditor/tinyeditor.js" type="text/javascript" ></script>
	<script src="<?= base_url(); ?>plugin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?= base_url(); ?>js/summernote.min.js" type="text/javascript"></script>
	<script src="<?= base_url(); ?>js/jquery.form.js" type="text/javascript"></script>
	<script src="<?= base_url(); ?>js/uploadfile.js" type="text/javascript"></script>
	<script src="<?= base_url(); ?>plugin/jqueryUI/jquery-ui.min.js" type="text/javascript"></script>
	<script src="<?= base_url(); ?>js/jquery.base64.js" type="text/javascript"></script>
	<script src="<?= base_url(); ?>plugin/tinymce/tinymce.min.js" type="text/javascript"></script>

	<link href="<?= base_url(); ?>css/reset.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>fonts/stylesheet.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>plugin/tinyEditor/style.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>css/core.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>css/summernote.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>css/uploadfile.css" media="all" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>plugin/jqueryUI/jquery-ui.min.css" rel="stylesheet" type="text/css">

	<title>SARI SEGAR HUSADA - ADMIN</title>

	<style type="text/css">
		html {
			height: 100%;
			width: 100%;
		}

		.about-header-title {
			color: #479a50;
			font-size: 18px;
			font-weight: bold;
		}

		.about-logo {
			width: 100%;
		}

		.about-text, .logo {
			text-align: left;
		}

		.about-version {
			font-size: 12px;
		}

		.dropdown-menu {
			background-color: #fff;
		}

		.dropdown-menu > li > a:focus, .dropdown-menu > li > a:hover {
			background-color: #479a50;
			color: white;
		}

		.navbar-default .navbar-brand {
			color: #000;
		}

		.navbar-default .navbar-brand:hover {
			color: #479a50;
		}

		.navbar-custom {
			background-color: #fff;
			border-color: #479a50;
		}

		.nav.navbar-nav li a, .nav.navbar-nav li a:hover, .nav.navbar-nav li a:focus {
			color: #479a50;
		}

		.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > .open > a:hover {
			background-color: #479a50;
			color: white;
		}

		.nav.navbar-nav li.dropdown ul.dropdown-menu a:hover {
			color: white;
		}

		.navbar-brand-title {
			font-size: 16px;
			color: #479a50;
		}
	</style>

	<script type="text/javascript">
		$(function() {
		});

		function isEmail(email) {
			var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

			return regex.test(email);
		}

		function startInterval() {
			$('.bar').css('width', 0);

			var bar = 0;

			return setInterval(function(){
				bar += 10;

				if (bar > 100) {
					bar = 10;
				}

				var percentageBar = bar + '%';

				$('.bar').css('width', percentageBar);
			}, 1000);
		}
	</script>
</head>

<body>
	<div class="modal fade" id="loading" tabindex="-1" role="dialog" aria-labelledby="modal-loading" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="modal-loading">Loading...</h4>
				</div>
				<div id="modal-loading-content" class="modal-body">
					<div class="progress">
						<div class="bar"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="modal-about">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="modal-about">ABOUT <?= $setting->system_company_name; ?></h4>
				</div>
				<div id="modal-loading-content" class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-6">
								<img class="about-logo" src="<?= base_url(); ?>images/main/logo.png" />
							</div>
							<div class="col-lg-6">
								<div class="about-text about-header-title">
									<?= $setting->system_product_name; ?>
								</div>
								<div class="about-text about-version">
									v<?= $setting->system_version; ?>
								</div>
								<div class="about-text">
									<?= $setting->system_copyright; ?> <a href="http://www.labelideas.co/">Label Ideas & Co</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer text-center center-block">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- header -->
	<nav class="navbar navbar-default navbar-fixed-top navbar-custom">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= base_url(); ?>admin/">
					<span class="navbar-brand-title">Sari Segar Husada</span>
				</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?= base_url(); ?>admin/header/view/">Navigation Bar</a></li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Website <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?= base_url(); ?>admin/section/view/1/">Home</a></li>
							<li><a href="<?= base_url(); ?>admin/section/view/2/">About Us</a></li>
							<li><a href="<?= base_url(); ?>admin/section/view/3/">Story</a></li>
							<li><a href="<?= base_url(); ?>admin/section/view/4/">Product</a></li>
							<li><a href="<?= base_url(); ?>admin/section/view/5/">Recipe</a></li>
							<li><a href="<?= base_url(); ?>admin/section/view/6/">Contact Us</a></li>
							<li><a href="<?= base_url(); ?>admin/section/view/7/">FAQ</a></li>
							<li><a href="<?= base_url(); ?>admin/section/view/8/">Career</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="<?= base_url(); ?>admin/slideshow/view/">Slideshow Recipe</a></li>
							<li><a href="<?= base_url(); ?>admin/career/view/">Career List</a></li>
							<li><a href="<?= base_url(); ?>admin/faq/view/">FAQ List</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?= base_url(); ?>admin/benefit/view/">Product Benefit</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="<?= base_url(); ?>admin/product/view/">Product list</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Recipe <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?= base_url(); ?>admin/category/view/">Category List</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="<?= base_url(); ?>admin/recipe/view/">Recipe list</a></li>
						</ul>
					</li>

					<li><a href="<?= base_url(); ?>admin/subscribe/view/">Subscribe</a></li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a style="cursor: pointer;" data-toggle="modal" data-target="#about">About</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="<?= base_url(); ?>admin/setting/website_setting/">Website Setting</a></li>
						</ul>
					</li>

					<li><a href="<?= base_url(); ?>admin/logout">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
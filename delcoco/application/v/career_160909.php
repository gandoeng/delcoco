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
	<section class="career1">
		<? $this->load->view('menu');?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 nopad faq-pict" style="background-image:url(<?= base_url();?>images/career-pict.jpg);">
					<div class="col-xs-12 col-sm-12 nopad career-fill">
					</div>
				</div>
			</div>
			<div class="career-stay-1">
				<img src="<?= base_url(); ?>images/faq-stay-1.png" />
			</div>
			<div class="career-stay-2">
				<img src="<?= base_url(); ?>images/faq-stay-2.png" />
			</div>
		</div>
    </section>

	<section class="career2">
		<div class="container-fluid sec-career-2">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="col-xs-12 col-sm-12 career-intro">
						<div class="title-top-pict">
							<img src="<?= base_url(); ?>images/stay5.png" />
						</div>
						<h1><?= $arr_section[0]->title; ?></h1>
						<div class="col-xs-12 col-sm-12 nopad line7">
							<hr />
						</div>
						<h4><?= $arr_section[0]->subtitle; ?></h4>
						<div><?= $arr_section[0]->content; ?></div>
					</div>
					<div class="col-xs-12 col-sm-12">
						<div class="col-xs-3 col-sm-3 career-pills-wrapper">
							<ul class="nav nav-pills nav-stacked career-pills">
								<? foreach ($arr_career as $key => $career): ?>
									<? if ($key <= 0): ?>
										<li class="line3"><hr/></li>
									<? endif; ?>

									<li class="<? if ($key <= 0): ?>active<? endif; ?>"><a data-toggle="pill" href="#career-<?= $career->id; ?>"><?= $career->name; ?> <div class="active-arrow"></div></a></li>
									<li class="line3"><hr/></li>
								<? endforeach; ?>
							</ul>
						</div>
						<div class="col-xs-9 col-sm-9 tab-content career-pills-content">
							<? foreach ($arr_career as $key => $career): ?>
								<div id="career-<?= $career->id; ?>" class="col-xs-12 col-sm-12 tab-pane fade <? if ($key <= 0): ?>in active<? endif; ?>">
									<div class="col-xs-12 col-sm-12 career-job-sum">
										<h4>Job Summary</h4>
										<p><?= $career->summary; ?></p>
										<div class="col-xs-12 col-sm-12 nopad line1">
											<hr />
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 kq">
										<h4>Key Qualifications</h4>
										<div><?= $career->qualification; ?></div>
										<div class="col-xs-12 col-sm-12 nopad line1">
											<hr />
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 nopad">
										<div class="col-xs-12 col-sm-6 mo-desc">
											<h4>Description</h4>
											<div><?= $career->description; ?></div>
										</div>
										<div class="col-xs-12 col-sm-6">
											<h4>Education</h4>
											<div><?= $career->education; ?></div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 mo-send">
										<h5>Send to: <a href="mailto:<?= $setting->company_recruitment_email; ?>"><?= $setting->company_recruitment_email; ?></a></h5>
									</div>
								</div>
							<? endforeach; ?>
						<div>
					</div>
				</div>
			<div>
		</div>
	</section>


	<? $this->load->view('footer');?>

	<script src="<?= base_url(); ?>plugin/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>js/skrollr.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>js/main.js"></script>
	<script src="<?= base_url(); ?>plugin/jqueryui/jquery-ui.min.js"></script>

    <script type="text/javascript">

    </script>

</body>
</html>

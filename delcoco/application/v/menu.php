<script>
	function isEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		return regex.test(email);
	}
</script>

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-78260910-1', 'auto');
	ga('send', 'pageview');
</script>

<nav class="navbar navbar-default menu">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav text-center center-block menu_list">
			<? foreach ($arr_header as $key => $header): ?>
				<? if ($key > 0): ?>
					<li class="stripe"><a href="#">|</a></li>
				<? endif; ?>

				<li class="fixed-width <? if ($menu == $header->id): ?>active<? endif; ?>"><a href="<?= base_url(); ?><?= $header->link; ?>"><?= $header->name; ?></a></li>

				<? if ($key == 2): ?>
					<li class="stripe"><a href="#">|</a></li>
					<li class="logo"><a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>images/logo.png" /></a></li>
				<? endif; ?>
			<? endforeach; ?>
		</ul>
    </div>
</nav>

<div class="mobile-logo">
	<img src="<?= base_url(); ?>images/logo.png" />
</div>
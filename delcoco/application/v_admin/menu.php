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
        <li class="fixed-width"><a href="<?= base_url(); ?>">Home</a></li>
		<li class="stripe"><a href="#">|</a></li>
        <li class="fixed-width"><a href="<?= base_url(); ?>aboutus">About Us</a></li>
		<li class="stripe"><a href="#">|</a></li>
        <li class="fixed-width"><a href="<?= base_url(); ?>story">Story</a></li> 
		<li class="stripe"><a href="#">|</a></li>
        <li class="logo"><a href="<?= base_url(); ?>"><img src="images/logo.png" /></a></li>
		<li class="stripe"><a href="#">|</a></li>
		<li class="dropdown fixed-width">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
			  Products <span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li><a href="#">Product1</a></li>
			</ul>
		</li>
		<li class="stripe"><a href="#">|</a></li>
        <li class="fixed-width"><a href="#">Recipes</a></li>
		<li class="stripe"><a href="#">|</a></li>
        <li class="fixed-width"><a href="<?= base_url(); ?>contactus">Contact Us</a></li> 
      </ul>
    </div>
</nav>
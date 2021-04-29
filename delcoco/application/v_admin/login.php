<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<script src="<?= base_url(); ?>js/jquery-1.11.1.min.js"></script>
	<script src="<?= base_url(); ?>plugin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

	<link href="<?= base_url(); ?>fonts/stylesheet.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(); ?>fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>css/reset.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>css/core.css" rel="stylesheet" type="text/css">


	<title>SARI SEGAR HUSADA - LOGIN</title>

	<style type="text/css">
		body {
			background-size: cover;
			height: 100vh;
			position: relative;
			width: 100%;
		}

		img {
			width: 200px;
		}

		#footer {
			bottom: 0;
			color: #636363;
			font-size: 12px;
			position: absolute;
			text-align: center;
			width: 100%;
		}

		#login-container {
			margin-top: 40px;
			width: 100%;
		}

		#logo {
			background-color: transparent;
			padding-top: 70px;
			text-align: center;
			width: 100%;
		}

		.content-center {
			text-align: center;
		}
	</style>

	<script type="text/javascript">
		$(function() {
			reset();
			click();
		});

		function click() {
			$('#username').keypress(function(e) {
				if (e.which == 13) {
					login();
				}
			});

			$('#password').keypress(function(e) {
				if (e.which == 13) {
					login();
				}
			});
		}

		function reset() {
			$('#username').val('');
			$('#password').val('');
			$('#username').focus();
		}

		function login() {
			var username = $('#username').val();
			var password = $('#password').val();

			if (username == '' || password == '') {
				$('#modal-warning-content').html('Username Or Password must be filled.');
				$('#warning').modal('show');

				return;
			}

			$.ajax({
				data :{
					username: username,
					password: password
				},
				dataType: 'JSON',
				error: function() {
					alert('Server Error');
				},
				success: function(data){
					if (data.status == 'success'){
						window.location.href = '<?= base_url(); ?>admin/';
					}
					else {
						$('#modal-warning-content').html(data.message);
						$('#warning').modal('show');
					}
				},
				type : 'POST',
				url : '<?= base_url(); ?>admin/login/ajax_login/'
			});
		}
	</script>
</head>

<body>
	<div id="logo">
		<img src="<?= base_url(); ?>images/main/logo.png">
	</div>
	<div id="login-container">
		<div class="input-container">
			<input id="username" class="input" type="text" placeholder="Username">
		</div>
		<div class="input-container">
			<input id="password" class="input" type="password" placeholder="Password">
		</div>
		<div class="input-container">
			<input type="submit" class="button" value="Sign In" onclick="login();">
		</div>

		<div class="modal fade" id="warning" tabindex="-1" role="dialog" aria-labelledby="modal-warning">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="modal-warning">Warning</h4>
					</div>
					<div id="modal-warning-content" class="modal-body"></div>
					<div class="modal-footer text-center center-block">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="footer">
		<?= $setting->system_product_name; ?> v<?= $setting->system_version; ?> <?= $setting->system_copyright; ?>
	</div>
</body>
</html>
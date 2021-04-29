	<style type="text/css">
		#account {
			margin-top: 70px;
		}
	</style>

	<script type="text/javascript">
		var submitQuery = false;

		$(function() {
			reset();
		});

		function back() {
			window.location.href = '<?= base_url(); ?>admin';
		}

		function reset() {
			$('#account-username').val('<?= $user->username; ?>');
			$('#account-old-password').val('');
			$('#account-new-password').val('');
			$('#account-confirm-password').val('');
		}

		function submit() {
			if (submitQuery) {
				return;
			}

			submitQuery = true;

			var username = $('#account-username').val();
			var oldPassword = $('#account-old-password').val();
			var newPassword = $('#account-new-password').val();
			var confirmPassword = $('#account-confirm-password').val();
			var password = '<?= $user->password ?>';

			if (username == '' || oldPassword == '' || newPassword == '' || confirmPassword == '') {
				$('#modal-warning-content').html('All Field must be filled.');
				$('#warning').modal('show');

				submitQuery = false;

				return;
			}

			if (oldPassword != password) {
				$('#modal-warning-content').html('Password not match.');
				$('#warning').modal('show');

				submitQuery = false;

				return;
			}

			if (newPassword != confirmPassword) {
				$('#modal-warning-content').html('Password not match.');
				$('#warning').modal('show');

				submitQuery = false;

				return;
			}

			$('#loading').modal('show');
			var interval = startInterval();

			$.ajax({
				data :{
					username: username,
					password: newPassword
				},
				dataType: 'JSON',
				error: function() {
					submitQuery = false;

					$('#loading').modal('hide');
					clearInterval(interval);

					$('#modal-warning-content').html('Server Error.');
					$('#warning').modal('show');
				},
				success: function(data){
					submitQuery = false;

					$('#loading').modal('hide');
					clearInterval(interval);

					if (data.status == 'success') {
						reset();

						$('#modal-success-content').html('Your Account has succesfully updated.');
						$('#success').modal('show');
					}
					else {
						$('#modal-warning-content').html(data.message);
						$('#warning').modal('show');
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>admin/user/ajax_update/'
			});
		}
	</script>

	<div id="account">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#account-details">Change Your Password</a></li>
			</ul>

			<div class="tab-content">
				<div id="account-details" class="tab-pane fade in active">
					<!-- put data here! -->
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Username</div>
							<div class="col-lg-8 text-left">
								<input id="account-username" class="input-all" type="text" placeholder="Your Username.." value="<?= $user->username; ?>">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Old Password</div>
							<div class="col-lg-8 text-left">
								<input id="account-old-password" class="input-all" type="password" placeholder="Your Old Password.." value="">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">New Password</div>
							<div class="col-lg-8 text-left">
								<input id="account-new-password" class="input-all" type="password" placeholder="Your New Password.." value="">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Confirm Password</div>
							<div class="col-lg-8 text-left">
								<input id="account-confirm-password" class="input-all" type="password" placeholder="Confirm Your New Password.." value="">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4"></div>
							<div class="col-lg-2 text-center">
								<div class="button" onclick="back();">Cancel</div>
							</div>
							<div class="col-lg-2 text-center">
								<div class="button" onclick="submit();">Submit</div>
							</div>
							<div class="col-lg-4"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
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

	<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="modal-success">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="modal-success">Success</h4>
				</div>
				<div id="modal-success-content" class="modal-body"></div>
				<div class="modal-footer text-center center-block">
					<button type="button" class="btn btn-default" data-dismiss="modal" onclick="window.location.reload();">OK</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
	<style type="text/css">
		#setting {
			margin-top: 70px;
		}
	</style>

	<script type="text/javascript">
		var submitQuery = false;

		$(function() {
			reset();
			init();
		});

		function back() {
			window.location.href = '<?= base_url(); ?>admin/';
		}

		function init() {
			tinymce.init({
				selector: 'textarea#setting-company-address',
				height: 300,
				width: '80%',
			});
		}

		function reset() {
			$('#setting-company-name').val('<?= $setting->company_name; ?>');
			$('#setting-company-phone').val('<?= $setting->company_phone; ?>');
			$('#setting-company-email').val('<?= $setting->company_email; ?>');
			$('#setting-company-recruitment-email').val('<?= $setting->company_recruitment_email; ?>');

			$('#setting-facebook').val('<?= $setting->setting__social_media_facebook_link; ?>');
			$('#setting-twitter').val('<?= $setting->setting__social_media_twitter_link; ?>');
			$('#setting-youtube').val('<?= $setting->setting__social_media_youtube_link; ?>');
			$('#setting-instagram').val('<?= $setting->setting__social_media_instagram_link; ?>');
		}

		function submit() {
			if (submitQuery) {
				return;
			}

			submitQuery = true;

			$('#loading').modal('show');
			var interval = startInterval();

			var settingCompanyName = $('#setting-company-name').val();

			var settingCompanyAddress = tinyMCE.activeEditor.getContent({
				format : 'raw'
			});

			var settingCompanyPhone = $('#setting-company-phone').val();
			var settingCompanyEmail = $('#setting-company-email').val();
			var settingCompanyRecruitmentEmail = $('#setting-company-recruitment-email').val();

			var settingFacebook = $('#setting-facebook').val();
			var settingTwitter = $('#setting-twitter').val();
			var settingYoutube = $('#setting-youtube').val();
			var settingInstagram = $('#setting-instagram').val();

			$.ajax({
				data :{
					company_name: settingCompanyName,
					company_address: settingCompanyAddress,
					company_phone: settingCompanyPhone,
					company_email: settingCompanyEmail,
					company_recruitment_email: settingCompanyRecruitmentEmail,
					setting__social_media_facebook_link: settingFacebook,
					setting__social_media_twitter_link: settingTwitter,
					setting__social_media_youtube_link: settingYoutube,
					setting__social_media_instagram_link: settingInstagram,
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
						$('#modal-success-content').html('Your setting has succesfully updated.');
						$('#success').modal('show');
					}
					else {
						$('#modal-warning-content').html(data.message);
						$('#warning').modal('show');
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>admin/setting/ajax_update/'
			});
		}
	</script>

	<div id="setting">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#setting-details">Website Setting</a></li>
				<li><a data-toggle="tab" href="#social-media-details">Social Media Setting</a></li>
			</ul>

			<div class="tab-content">
				<div id="setting-details" class="tab-pane fade in active">
					<!-- put data here! -->
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Company Name</div>
							<div class="col-lg-8 text-left">
								<input id="setting-company-name" class="input-all" type="text" placeholder="Company Name.." value="<?= $setting->company_name; ?>">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Company Address</div>
							<div class="col-lg-8 text-left">
								<textarea id="setting-company-address" class="input-all" type="text" placeholder="Company Address.."><?= $setting->company_address; ?></textarea>
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Company Phone</div>
							<div class="col-lg-8 text-left">
								<input id="setting-company-phone" class="input-all" type="text" placeholder="Company Phone.." value="<?= $setting->company_phone; ?>">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Company Email</div>
							<div class="col-lg-8 text-left">
								<input id="setting-company-email" class="input-all" type="text" placeholder="Company Email.." value="<?= $setting->company_email; ?>">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Company Recruitment Email</div>
							<div class="col-lg-8 text-left">
								<input id="setting-company-recruitment-email" class="input-all" type="text" placeholder="Company Email.." value="<?= $setting->company_recruitment_email; ?>">
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

				<div id="social-media-details" class="tab-pane fade">
					<!-- put data here! -->
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Facebook Link</div>
							<div class="col-lg-8 text-left">
								<input id="setting-facebook" class="input-all" type="text" placeholder="Facebook Link.." value="<?= $setting->setting__social_media_facebook_link; ?>">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Twitter Link</div>
							<div class="col-lg-8 text-left">
								<input id="setting-twitter" class="input-all" type="text" placeholder="Twitter Link.." value="<?= $setting->setting__social_media_twitter_link; ?>">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Youtube Link</div>
							<div class="col-lg-8 text-left">
								<input id="setting-youtube" class="input-all" type="text" placeholder="Youtube Link.." value="<?= $setting->setting__social_media_youtube_link; ?>">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Instagram Link</div>
							<div class="col-lg-8 text-left">
								<input id="setting-instagram" class="input-all" type="text" placeholder="Instagram Link.." value="<?= $setting->setting__social_media_instagram_link; ?>">
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
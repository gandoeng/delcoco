	<style type="text/css">
		#career {
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
			window.location.href = '<?= base_url(); ?>admin/career/view/';
		}

		function init() {
			tinymce.init({
				selector: 'textarea#career-qualification',
				height: 300,
				width: '80%'
			});

			tinymce.init({
				selector: 'textarea#career-description',
				height: 300,
				width: '80%'
			});

			tinymce.init({
				selector: 'textarea#career-education',
				height: 300,
				width: '80%'
			});
		}

		function reset() {
			$('#career-name').val('');
			$('#career-summary').val('');
			$('#career-qualification').val('');
			$('#career-description').val('');
			$('#career-education').val('');
		}

		function submit() {
			if (submitQuery) {
				return;
			}

			submitQuery = true;

			var name = $('#career-name').val();
			var summary = $('#career-summary').val();
			var qualification = tinyMCE.get('career-qualification').getContent();
			var description = tinyMCE.get('career-description').getContent();
			var education = tinyMCE.get('career-education').getContent();

			if (name == '' || summary == '' || qualification == '' || description == '' || education == '') {
				submitQuery = false;

				$('#modal-warning-content').html('All Field must be filled.');
				$('#warning').modal('show');

				return;
			}

			$('#loading').modal('show');
			var interval = startInterval();

			$.ajax({
				data :{
					name: name,
					summary: summary,
					qualification: qualification,
					description: description,
					education: education,
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
						$('#modal-success-content').html('Your career has succesfully updated.');
						$('#success').modal('show');
					}
					else {
						$('#modal-warning-content').html(data.message);
						$('#warning').modal('show');
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>admin/career/ajax_add/'
			});
		}
	</script>

	<div id="career">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#career-details">Add Career</a></li>
			</ul>

			<div class="tab-content">
				<div id="career-details" class="tab-pane fade in active">
					<!-- put data here! -->
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Name</div>
							<div class="col-lg-8 text-left">
								<input id="career-name" class="input-all" type="text" placeholder="Name.." value="">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Summary</div>
							<div class="col-lg-8 text-left">
								<textarea id="career-summary" class="input-all" type="text" placeholder="Summary.."></textarea>
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Qualification</div>
							<div class="col-lg-8 text-left">
								<textarea id="career-qualification" class="input-all" type="text" placeholder="Qualification.."></textarea>
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Description</div>
							<div class="col-lg-8 text-left">
								<textarea id="career-description" class="input-all" type="text" placeholder="Description.."></textarea>
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Education</div>
							<div class="col-lg-8 text-left">
								<textarea id="career-education" class="input-all" type="text" placeholder="Education.."></textarea>
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
					<button type="button" class="btn btn-default" data-dismiss="modal" onclick="back();">OK</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
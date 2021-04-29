	<style type="text/css">
		#section {
			margin-top: 70px;
		}
	</style>

	<script type="text/javascript">
		var submitQuery = false;

		$(function() {
			reset();
			init();
			change();
		});

		function back() {
			window.location.href = '<?= base_url(); ?>admin/section/view/<?= $section->header_id; ?>';
		}

		function change() {
			$('#main-image').change(function() {
				var file_data = $('#main-image').prop('files')[0];
				var form_data = new FormData();
				form_data.append('file', file_data);

				$('#loading').modal('show');
				var interval = startInterval();

				$.ajax({
					cache: false,
					contentType: false,
					data: form_data,
					dataType: 'JSON',
					processData: false,
					type: 'post',
					success: function(data) {
						if (data.status == 'success') {
							$('.preview').remove();

							var img = '<img class="preview" src="<?= base_url(); ?>images/website/'+ data.image_id +'.'+ data.ext +'" style="width: 100%;">';
							$('#preview-image').append(img);

							$('#preview-image').data('image_id', data.image_id);

							$('#modal-success-upload-content').html('Image Updated.');
							$('#success-upload').modal('show');
						}
						else {
							$('#modal-warning-content').html(data.message);
							$('#warning').modal('show');
						}

						$('#loading').modal('hide');
						clearInterval(interval);
					},
					url: '<?= base_url(); ?>admin/image/ajax_upload/',
				});
			});
		}

		function init() {
			tinymce.init({
				selector: 'textarea#section-content',
				height: 300,
				width: '80%',
			});
		}

		function reset() {
			$('#section-title').val("<?= $section->title; ?>");
			$('#section-subtitle').val("<?= $section->subtitle; ?>");

			$('#main-image').val('');

			$('#preview-image').data('image_id', 0);

			var img = '<img class="preview" src="<?= base_url(); ?>images/website/<?= $section->image_name; ?>" style="width: 100%;">';
			$('#preview-image').append(img);
		}

		function submit() {
			if (submitQuery) {
				return;
			}

			submitQuery = true;

			var title = $('#section-title').val();
			var subtitle = $('#section-subtitle').val();
			var content = '';

			<? if ($section->no_content <= 0): ?>
				content = tinyMCE.get('section-content').getContent();
			<? endif; ?>

			var imageId = $('#preview-image').data('image_id');

			if (title == '') {
				submitQuery = false;

				$('#modal-warning-content').html('Field Name must be filled.');
				$('#warning').modal('show');

				return;
			}

			$('#loading').modal('show');
			var interval = startInterval();

			$.ajax({
				data :{
					title: title,
					subtitle: subtitle,
					content: content,
					image_id: imageId
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
						$('#modal-success-content').html('Your section has succesfully updated.');
						$('#success').modal('show');
					}
					else {
						$('#modal-warning-content').html(data.message);
						$('#warning').modal('show');
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>admin/section/ajax_edit/<?= $section->id; ?>/'
			});
		}
	</script>

	<div id="section">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#section-details">Edit section</a></li>
				<? if ($section->no_image <= 0): ?>
					<li><a data-toggle="tab" href="#upload-image">Upload Image</a></li>
				<? endif; ?>
			</ul>

			<div class="tab-content">
				<div id="section-details" class="tab-pane fade in active">
					<!-- put data here! -->
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Title</div>
							<div class="col-lg-8 text-left">
								<input id="section-title" class="input-all" type="text" placeholder="Title.." value="<?= $section->title; ?>">
							</div>
						</div>

						<? if ($section->no_subtitle <= 0): ?>
							<hr class="separator"></hr>
							<div class="row">
								<div class="col-lg-4 text-right margin-5">Subtitle</div>
								<div class="col-lg-8 text-left">
									<input id="section-subtitle" style="width: 100%;" class="input-all" type="text" placeholder="Subtitle.." value="<?= $section->subtitle; ?>">
								</div>
							</div>
						<? endif; ?>

						<? if ($section->no_content <= 0): ?>
							<hr class="separator"></hr>
							<div class="row">
								<div class="col-lg-4 text-right margin-5">Content</div>
								<div class="col-lg-8 text-left">
									<textarea id="section-content" class="input-all" type="text" placeholder="Content.."><?= $section->content; ?></textarea>
								</div>
							</div>
						<? endif; ?>

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

				<div id="upload-image" class="tab-pane fade">
					<!-- put data here! -->
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4 text-right margin-5">
								<div>Upload Image <span class="important">*</span></div>
								<div>Recommended Resolution: landscape with width 960px</div>
								<div>Max File Size: 1 MB</div>
							</div>
							<div class="col-lg-8 text-left">
								<input id="main-image" class="input-all" type="file" placeholder="Upload Image.." value="">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Preview Image</div>
							<div class="col-lg-8 text-left">
								<div id="preview-image"></div>
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
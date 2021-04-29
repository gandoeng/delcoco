	<style type="text/css">
		#slideshow {
			margin-top: 70px;
		}
	</style>

	<script type="text/javascript">
		var submitQuery = false;

		$(function() {
			reset();
			change();
		});

		function back() {
			window.location.href = '<?= base_url(); ?>admin/slideshow/view/';
		}

		function change() {
			$('#slideshow-image').change(function() {
				var file_data = $('#slideshow-image').prop('files')[0];
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

		function reset() {
			$('#slideshow-title').val('<?= $slideshow->title; ?>');
			$('#slideshow-content').val('<?= $slideshow->content; ?>');

			$('#preview-image').data('image_id', 0);
			$('#slideshow-image').val('');

			var img = '<img class="preview" src="<?= base_url(); ?>images/website/<?= $slideshow->image_name; ?>" style="width: 100%;">';
			$('#preview-image').append(img);
		}

		function submit() {
			if (submitQuery) {
				return;
			}

			submitQuery = true;

			var title = $('#slideshow-title').val();
			var content = $('#slideshow-content').val();
			var imageId = $('#preview-image').data('image_id');

			if (title == '' || content == '') {
				submitQuery = false;

				$('#modal-warning-content').html('All Field must be filled.');
				$('#warning').modal('show');

				return;
			}

			$('#loading').modal('show');
			var interval = startInterval();

			$.ajax({
				data :{
					title: title,
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
						$('#modal-success-content').html('Your slideshow has succesfully updated.');
						$('#success').modal('show');
					}
					else {
						$('#modal-warning-content').html(data.message);
						$('#warning').modal('show');
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>admin/slideshow/ajax_edit/<?= $slideshow->id; ?>/'
			});
		}
	</script>

	<div id="slideshow">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#slideshow-details">Add Slideshow</a></li>
				<li><a data-toggle="tab" href="#upload-image">Upload Image</a></li>
			</ul>

			<div class="tab-content">
				<div id="slideshow-details" class="tab-pane fade in active">
					<!-- put data here! -->
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Title</div>
							<div class="col-lg-8 text-left">
								<input id="slideshow-title" class="input-all" type="text" placeholder="Title.." value="">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Content</div>
							<div class="col-lg-8 text-left">
								<input id="slideshow-content" class="input-all" type="text" placeholder="Content.." value="" style="width: 100%;">
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
								<input id="slideshow-image" class="input-all" type="file" placeholder="Upload Image.." value="">
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
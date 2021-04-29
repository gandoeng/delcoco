	<style type="text/css">
		#benefit {
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
			window.location.href = '<?= base_url(); ?>admin/benefit/view/';
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

			$('#thumbnail-image').change(function() {
				var file_data = $('#thumbnail-image').prop('files')[0];
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
							$('.preview-thumbnail').remove();

							var img = '<img class="preview-thumbnail" src="<?= base_url(); ?>images/website/'+ data.image_id +'.'+ data.ext +'" style="width: 100%;">';
							$('#preview-thumbnail-image').append(img);

							$('#preview-thumbnail-image').data('image_id', data.image_id);

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
					url: '<?= base_url(); ?>admin/image/ajax_upload/Thumbnail/',
				});
			});
		}

		function reset() {
			$('#benefit-name').val('<?= $benefit->name; ?>');
			$('#benefit-title').val('<?= $benefit->title; ?>');
			$('#benefit-title2').val('<?= $benefit->title2; ?>');
			$('#benefit-title3').val('<?= $benefit->title3; ?>');
			$('#benefit-benefit').val('<?= $benefit->benefit; ?>');
			$('#benefit-benefit2').val('<?= $benefit->benefit2; ?>');
			$('#benefit-benefit3').val('<?= $benefit->benefit3; ?>');
			$('#main-image').val('');
			$('#thumbnail-image').val('');

			$('#preview-image').data('image_id', '<?= $benefit->image_id; ?>');
			$('#preview-thumbnail-image').data('image_id', '<?= $benefit->image_thumbnail_id; ?>');

			var img = '<img class="preview" src="<?= base_url(); ?>images/website/<?= $benefit->image_name; ?>" style="width: 100%;">';
			$('#preview-image').append(img);

			var imgThumbnail = '<img class="preview-thumbnail" src="<?= base_url(); ?>images/website/<?= $benefit->image_thumbnail_name; ?>" style="width: 100%;">';
			$('#preview-thumbnail-image').append(imgThumbnail);
		}

		function submit() {
			if (submitQuery) {
				return;
			}

			submitQuery = true;

			var name = $('#benefit-name').val();
			var title = $('#benefit-title').val();
			var title2 = $('#benefit-title2').val();
			var title3 = $('#benefit-title3').val();

			var benefit = $('#benefit-benefit').val();
			var benefit2 = $('#benefit-benefit2').val();
			var benefit3 = $('#benefit-benefit3').val();

			var arrImageId = [];
			var imageId = $('#preview-image').data('image_id');
			var thumbnailImageId = $('#preview-thumbnail-image').data('image_id');

			if (name == '' || title == '' || title2 == '' || benefit == '' || benefit2 == '') {
				submitQuery = false;

				$('#modal-warning-content').html('Field with <span class="important">*</span> must be filled.');
				$('#warning').modal('show');

				return;
			}

			if (imageId <= 0) {
				submitQuery = false;

				$('#modal-warning-content').html('You haven\'t upload Main Image.');
				$('#warning').modal('show');

				return;
			}

			if (thumbnailImageId <= 0) {
				submitQuery = false;

				$('#modal-warning-content').html('You haven\'t upload Thumbnail Image.');
				$('#warning').modal('show');

				return;
			}

			arrImageId.push(imageId);
			arrImageId.push(thumbnailImageId);

			$('#loading').modal('show');
			var interval = startInterval();

			$.ajax({
				data :{
					name: name,
					title: title,
					title2: title2,
					title3: title3,
					benefit: benefit,
					benefit2: benefit2,
					benefit3: benefit3,
					arr_image_id: arrImageId,
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
						$('#modal-success-content').html('Your benefit has succesfully updated.');
						$('#success').modal('show');
					}
					else {
						$('#modal-warning-content').html(data.message);
						$('#warning').modal('show');
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>admin/benefit/ajax_edit/<?= $benefit->id; ?>/'
			});
		}
	</script>

	<div id="benefit">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#benefit-details">Add Benefit</a></li>
				<li><a data-toggle="tab" href="#upload-image">Upload Image</a></li>
			</ul>

			<div class="tab-content">
				<div id="benefit-details" class="tab-pane fade in active">
					<!-- put data here! -->
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Name <span class="important">*</span></div>
							<div class="col-lg-8 text-left">
								<input id="benefit-name" class="input-all" type="text" placeholder="Name.." value="">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Title 1 <span class="important">*</span></div>
							<div class="col-lg-8 text-left">
								<input id="benefit-title" class="input-all" type="text" placeholder="Title 1.." value="">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Benefit 1 <span class="important">*</span></div>
							<div class="col-lg-8 text-left">
								<textarea id="benefit-benefit" class="input-all" type="text" placeholder="Benefit 1.."></textarea>
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Title 2 <span class="important">*</span></div>
							<div class="col-lg-8 text-left">
								<input id="benefit-title2" class="input-all" type="text" placeholder="Title 2.." value="">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Benefit 2 <span class="important">*</span></div>
							<div class="col-lg-8 text-left">
								<textarea id="benefit-benefit2" class="input-all" type="text" placeholder="Benefit 2.."></textarea>
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Title 3</div>
							<div class="col-lg-8 text-left">
								<input id="benefit-title3" class="input-all" type="text" placeholder="Title 3.." value="">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Benefit 3</div>
							<div class="col-lg-8 text-left">
								<textarea id="benefit-benefit3" class="input-all" type="text" placeholder="Benefit 3.."></textarea>
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
							<div class="col-lg-4 text-right margin-5">
								<div>Thumbnail Image <span class="important">*</span></div>
								<div>Recommended Resolution: 92px x 123px</div>
								<div>Max File Size: 1 MB</div>
							</div>
							<div class="col-lg-8 text-left">
								<input id="thumbnail-image" class="input-all" type="file" placeholder="Upload Image.." value="">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Preview Image:</div>
							<div class="col-lg-8 text-left">
								<div id="preview-thumbnail-image"></div>
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

	<div class="modal fade" id="success-upload" tabindex="-1" role="dialog" aria-labelledby="modal-success-upload">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="modal-success-upload">Success</h4>
				</div>
				<div id="modal-success-upload-content" class="modal-body"></div>
				<div class="modal-footer text-center center-block">
					<button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
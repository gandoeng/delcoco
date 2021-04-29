`	<style type="text/css">
		#image-list {
			margin-top: 50px;
			padding: 0 2%;
		}
	</style>

	<script type="text/javascript">
		$(function() {
			reset();
		});

		function back() {
			window.location.href = '<?= base_url(); ?>admin/product/view/';
		}

		function deleteimage(imageId) {
			$.ajax({
				dataType: 'JSON',
				error: function() {
					submitQuery = false;

					$('#modal-warning-content').html('Server Error.');
					$('#warning').modal('show');
				},
				success: function(data){
					submitQuery = false;

					if (data.status == 'success') {
						window.location.reload();
					}
					else {
						$('#modal-warning-content').html(data.message);
						$('#warning').modal('show');
					}
				},
				type : 'POST',
				url : '<?= base_url(); ?>admin/image/ajax_delete/'+ imageId +'/'
			});
		}

		function reset() {
			$('#product-image').val('');
		}

		function upload() {
			var file_data = $('#product-image').prop('files')[0];
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
						window.location.reload();
					}
					else {
						$('#modal-warning-content').html(data.message);
						$('#warning').modal('show');
					}

					$('#loading').modal('hide');
					clearInterval(interval);
				},
				url: '<?= base_url(); ?>admin/image/ajax_upload_product/<?= $product->id; ?>/',
			});
		}
	</script>

	<div id="image-list">
		<h2>IMAGE - <?= $product->name; ?></h2>
		<p>All image for your product</p>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 margin-5 no-padding">
					<div>Thumbnail Image:</div>
					<div>Recommended Resolution: landscape with width 960px</div>
					<div>Max File Size: 1 MB</div>
				</div>
				<div class="col-lg-12 no-padding text-left">
					<input id="product-image" class="input-all" type="file" placeholder="Upload Image.." value="">
					<button type="button" class="btn btn-s btn-danger" style="margin-top: 5px;" onclick="back();">Back</button>
					<button type="button" class="btn btn-s btn-success" style="margin-top: 5px;" onclick="upload();">Upload</button>
				</div>
			</div>
		</div>

		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th style="width: 10%;">Action</th>
						<th>Image</th>
					</tr>
				</thead>
				<tbody>
					<? foreach ($arr_image as $image): ?>
						<tr>
							<td style="width: 10%;">
								<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#image-<?= $image->id ?>">Delete</button>
							</td>
							<td>
								<img src="<?= base_url(); ?>images/website/<?= $image->image_name; ?>" style="height: 150px;">
							</td>
						</tr>
					<? endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

	<? foreach ($arr_image as $image): ?>
		<div class="modal fade" id="image-<?= $image->id ?>" tabindex="-1" role="dialog" aria-labelledby="modal-image-<?= $image->id; ?>">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="modal-image-<?= $image->id; ?>">Delete this image</h4>
					</div>
					<div class="modal-body">
						Are You Sure?
					</div>
					<div class="modal-footer text-center center-block">
						<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
						<button type="button" class="btn btn-primary" onclick="deleteimage('<?= $image->id; ?>');">Yes</button>
					</div>
				</div>
			</div>
		</div>
	<? endforeach; ?>

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
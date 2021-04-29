`	<style type="text/css">
		#slideshow-list {
			margin-top: 50px;
			padding: 0 2%;
		}
	</style>

	<script type="text/javascript">
		$(function() {
		});

		function deleteSlideshow(slideshowId) {
			$('#slideshow-'+ slideshowId).modal('hide');

			$('#loading').modal('show');
			var interval = startInterval();

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
				url : '<?= base_url(); ?>admin/slideshow/ajax_delete/'+ slideshowId +'/'
			});
		}
	</script>

	<div id="slideshow-list">
		<h2>SLIDESHOW</h2>
		<p>All Slideshow for your Recipe Page and Recipe Detail Page</p>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-1 text-left no-padding">
					<a href="<?= base_url(); ?>admin/slideshow/add/"><button type="button" class="btn btn-success">Add Slideshow</button></a>
				</div>
			</div>
		</div>

		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th style="width: 10%;">Action</th>
						<th>Image</th>
						<th>Title</th>
					</tr>
				</thead>
				<tbody>
					<? foreach ($arr_slideshow as $slideshow): ?>
						<tr>
							<td style="width: 10%;">
								<? if ($slideshow->editable > 0): ?>
									<a href="<?= base_url(); ?>admin/slideshow/edit/<?= $slideshow->id; ?>"><button type="button" class="btn btn-xs btn-primary">Edit</button></a>
								<? endif; ?>

								<? if ($slideshow->deletable > 0): ?>
									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#slideshow-<?= $slideshow->id ?>">Delete</button>
								<? endif; ?>
							</td>
							<td>
								<img src="<?= base_url(); ?>images/website/<?= $slideshow->image_name; ?>" style="height: 150px;">
							</td>
							<td><?= $slideshow->title; ?></td>
						</tr>
					<? endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

	<div style="padding: 0 30px;">
		<?= $pagination; ?>
	</div>

	<? foreach ($arr_slideshow as $slideshow): ?>
		<div class="modal fade" id="slideshow-<?= $slideshow->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-slideshow-<?= $slideshow->id; ?>">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="modal-slideshow-<?= $slideshow->id; ?>">Delete <?= $slideshow->title; ?></h4>
					</div>
					<div class="modal-body">
						Are You Sure?
					</div>
					<div class="modal-footer text-center center-block">
						<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
						<button type="button" class="btn btn-primary" onclick="deleteSlideshow('<?= $slideshow->id; ?>');">Yes</button>
					</div>
				</div>
			</div>
		</div>
	<? endforeach; ?>
</body>
</html>
`	<style type="text/css">
		#section-list {
			margin-top: 50px;
			padding: 0 2%;
		}
	</style>

	<script type="text/javascript">
		$(function() {
		});

		function deleteSection(sectionId) {
			$('#section-'+ sectionId).modal('hide');

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
				url : '<?= base_url(); ?>admin/section/ajax_delete/'+ sectionId +'/'
			});
		}
	</script>

	<div id="section-list">
		<h2>SECTION</h2>
		<p>All Section for your Website</p>

		<!--<div class="container-fluid">
			<div class="row">
				<div class="col-lg-1 text-left no-padding">
					<a href="<?= base_url(); ?>admin/section/add/"><button type="button" class="btn btn-success">Add section</button></a>
				</div>
			</div>
		</div>-->

		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th style="width: 10%;">Action</th>
						<th>Section</th>
						<th>Title</th>
						<th>Subtitle</th>
					</tr>
				</thead>
				<tbody>
					<? foreach ($arr_section as $section): ?>
						<tr>
							<td style="width: 10%;">
								<? if ($section->editable > 0): ?>
									<a href="<?= base_url(); ?>admin/section/edit/<?= $section->id; ?>"><button type="button" class="btn btn-xs btn-primary">Edit</button></a>
								<? endif; ?>

								<? if ($section->deletable > 0): ?>
									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#section-<?= $section->id ?>">Delete</button>
								<? endif; ?>

								<? if ($section->item > 0): ?>
									<a href="<?= base_url(); ?>admin/section_item/view/<?= $section->id; ?>"><button type="button" class="btn btn-xs btn-success">View Details</button></a>
								<? endif; ?>

								<? if ($section->images > 0): ?>
									<a href="<?= base_url(); ?>admin/image/section/<?= $section->id; ?>"><button type="button" class="btn btn-xs btn-success">View Image </button></a>
								<? endif; ?>
							</td>
							<td><?= $section->section; ?></td>
							<td><?= $section->title; ?></td>
							<td><?= $section->subtitle; ?></td>
						</tr>
					<? endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

	<div style="padding: 0 30px;">
		<?= $pagination; ?>
	</div>

	<? foreach ($arr_section as $section): ?>
		<div class="modal fade" id="section-<?= $section->id ?>" tabindex="-1" role="dialog" aria-labelledby="modal-section-<?= $section->id; ?>">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="modal-section-<?= $section->id; ?>">Delete <?= $section->title; ?></h4>
					</div>
					<div class="modal-body">
						Are You Sure?
					</div>
					<div class="modal-footer text-center center-block">
						<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
						<button type="button" class="btn btn-primary" onclick="deleteSection('<?= $section->id; ?>');">Yes</button>
					</div>
				</div>
			</div>
		</div>
	<? endforeach; ?>
</body>
</html>
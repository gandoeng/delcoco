`	<style type="text/css">
		#section-item-list {
			margin-top: 50px;
			padding: 0 2%;
		}
	</style>

	<script type="text/javascript">
		$(function() {
		});

		function deleteSectionItem(sectionItemId) {
			$('#section-item-'+ sectionItemId).modal('hide');

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
				url : '<?= base_url(); ?>admin/section_item/ajax_delete/'+ sectionItemId +'/'
			});
		}
	</script>

	<div id="section-item-list">
		<h2>SECTION ITEM</h2>
		<p>All Section for your Website</p>

		<!--<div class="container-fluid">
			<div class="row">
				<div class="col-lg-1 text-left no-padding">
					<a href="<?= base_url(); ?>admin/section_item/add/"><button type="button" class="btn btn-success">Add section_item</button></a>
				</div>
			</div>
		</div>-->

		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th style="width: 10%;">Action</th>
						<th>Title</th>
						<th>Name</th>
					</tr>
				</thead>
				<tbody>
					<? foreach ($arr_section_item as $section_item): ?>
						<tr>
							<td style="width: 10%;">
								<? if ($section_item->editable > 0): ?>
									<a href="<?= base_url(); ?>admin/section_item/edit/<?= $section_item->id; ?>"><button type="button" class="btn btn-xs btn-primary">Edit</button></a>
								<? endif; ?>

								<? if ($section_item->deletable > 0): ?>
									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#section-item-<?= $section_item->id ?>">Delete</button>
								<? endif; ?>
							</td>
							<td><?= $section_item->title; ?></td>
							<td><?= $section_item->name; ?></td>
						</tr>
					<? endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

	<div style="padding: 0 30px;">
		<?= $pagination; ?>
	</div>

	<? foreach ($arr_section_item as $section_item): ?>
		<div class="modal fade" id="section-item-<?= $section_item->id ?>" tabindex="-1" role="dialog" aria-labelledby="modal-section_item-<?= $section_item->id; ?>">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="modal-section_item-<?= $section_item->id; ?>">Delete <?= $section_item->name ?></h4>
					</div>
					<div class="modal-body">
						Are You Sure?
					</div>
					<div class="modal-footer text-center center-block">
						<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
						<button type="button" class="btn btn-primary" onclick="deleteSectionItem('<?= $section_item->id; ?>');">Yes</button>
					</div>
				</div>
			</div>
		</div>
	<? endforeach; ?>
</body>
</html>
`	<style type="text/css">
		#career-list {
			margin-top: 50px;
			padding: 0 2%;
		}
	</style>

	<script type="text/javascript">
		$(function() {
		});

		function deletecareer(careerId) {
			$('#career-'+ careerId).modal('hide');

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
				url : '<?= base_url(); ?>admin/career/ajax_delete/'+ careerId +'/'
			});
		}
	</script>

	<div id="career-list">
		<h2>CAREER</h2>
		<p>Need more people? this can help you.</p>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-1 text-left no-padding">
					<a href="<?= base_url(); ?>admin/career/add/"><button type="button" class="btn btn-success">Add Career</button></a>
				</div>
			</div>
		</div>

		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th style="width: 10%;">Action</th>
						<th>Name</th>
					</tr>
				</thead>
				<tbody>
					<? foreach ($arr_career as $career): ?>
						<tr>
							<td style="width: 10%;">
								<? if ($career->editable > 0): ?>
									<a href="<?= base_url(); ?>admin/career/edit/<?= $career->id; ?>"><button type="button" class="btn btn-xs btn-primary">Edit</button></a>
								<? endif; ?>

								<? if ($career->deletable > 0): ?>
									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#career-<?= $career->id ?>">Delete</button>
								<? endif; ?>
							</td>
							<td><?= $career->name; ?></td>
						</tr>
					<? endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

	<div style="padding: 0 30px;">
		<?= $pagination; ?>
	</div>

	<? foreach ($arr_career as $career): ?>
		<div class="modal fade" id="career-<?= $career->id ?>" tabindex="-1" role="dialog" aria-labelledby="modal-career-<?= $career->id; ?>">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="modal-career-<?= $career->id; ?>">Delete <?= $career->name ?></h4>
					</div>
					<div class="modal-body">
						Are You Sure?
					</div>
					<div class="modal-footer text-center center-block">
						<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
						<button type="button" class="btn btn-primary" onclick="deletecareer('<?= $career->id; ?>');">Yes</button>
					</div>
				</div>
			</div>
		</div>
	<? endforeach; ?>
</body>
</html>
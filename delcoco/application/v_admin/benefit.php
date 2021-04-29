`	<style type="text/css">
		#benefit-list {
			margin-top: 50px;
			padding: 0 2%;
		}
	</style>

	<script type="text/javascript">
		$(function() {
		});

		function deleteBenefit(benefitId) {
			$('#benefit-'+ benefitId).modal('hide');

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
				url : '<?= base_url(); ?>admin/benefit/ajax_delete/'+ benefitId +'/'
			});
		}
	</script>

	<div id="benefit-list">
		<h2>PRODUCT BENEFIT</h2>
		<p>Share your product's benefit for others.</p>

		<!--<div class="container-fluid">
			<div class="row">
				<div class="col-lg-1 text-left no-padding">
					<a href="<?= base_url(); ?>admin/benefit/add/"><button type="button" class="btn btn-success">Add Benefit</button></a>
				</div>
			</div>
		</div>-->

		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th style="width: 10%;">Action</th>
						<th>Name</th>
					</tr>
				</thead>
				<tbody>
					<? foreach ($arr_benefit as $benefit): ?>
						<tr>
							<td style="width: 10%;">
								<? if ($benefit->editable > 0): ?>
									<a href="<?= base_url(); ?>admin/benefit/edit/<?= $benefit->id; ?>"><button type="button" class="btn btn-xs btn-primary">Edit</button></a>
								<? endif; ?>

								<? if ($benefit->deletable > 0): ?>
									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#benefit-<?= $benefit->id ?>">Delete</button>
								<? endif; ?>
							</td>
							<td><?= $benefit->name; ?></td>
						</tr>
					<? endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

	<div style="padding: 0 30px;">
		<?= $pagination; ?>
	</div>

	<? foreach ($arr_benefit as $benefit): ?>
		<div class="modal fade" id="benefit-<?= $benefit->id ?>" tabindex="-1" role="dialog" aria-labelledby="modal-benefit-<?= $benefit->id; ?>">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="modal-benefit-<?= $benefit->id; ?>">Delete <?= $benefit->name ?></h4>
					</div>
					<div class="modal-body">
						Are You Sure?
					</div>
					<div class="modal-footer text-center center-block">
						<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
						<button type="button" class="btn btn-primary" onclick="deleteBenefit('<?= $benefit->id; ?>');">Yes</button>
					</div>
				</div>
			</div>
		</div>
	<? endforeach; ?>
</body>
</html>
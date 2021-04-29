`	<style type="text/css">
		#subscribe-list {
			margin-top: 50px;
			padding: 0 2%;
		}
	</style>

	<script type="text/javascript">
		$(function() {
		});

		function deleteSubscribe(subscribeId) {
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
				url : '<?= base_url(); ?>admin/subscribe/ajax_delete/'+ subscribeId +'/'
			});
		}
	</script>

	<div id="subscribe-list">
		<h2>SUBSCRIBE EMAIL</h2>
		<p>All Subscribe for your Newsletter Update</p>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-1 text-left no-padding">
					<a href="<?= base_url(); ?>admin/download/subscribe/"><button type="button" class="btn btn-success">EXPORT EXCEL</button></a>
				</div>
			</div>
		</div>

		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th style="width: 10%;">Action</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<? foreach ($arr_subscribe as $subscribe): ?>
						<tr>
							<td style="width: 10%;">
								<? if ($subscribe->deletable > 0): ?>
									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#subscribe-<?= $subscribe->id ?>">Delete</button>
								<? endif; ?>
							</td>
							<td><?= $subscribe->email; ?></td>
						</tr>
					<? endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

	<div style="padding: 0 30px;">
		<?= $pagination; ?>
	</div>

	<? foreach ($arr_subscribe as $subscribe): ?>
		<div class="modal fade" id="subscribe-<?= $subscribe->id ?>" tabindex="-1" role="dialog" aria-labelledby="modal-subscribe-<?= $subscribe->id; ?>">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="modal-subscribe-<?= $subscribe->id; ?>">Delete <?= $subscribe->name ?></h4>
					</div>
					<div class="modal-body">
						Are You Sure?
					</div>
					<div class="modal-footer text-center center-block">
						<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
						<button type="button" class="btn btn-primary" onclick="deleteSubscribe('<?= $subscribe->id; ?>');">Yes</button>
					</div>
				</div>
			</div>
		</div>
	<? endforeach; ?>
</body>
</html>
`	<style type="text/css">
		#faq-list {
			margin-top: 50px;
			padding: 0 2%;
		}
	</style>

	<script type="text/javascript">
		$(function() {
		});

		function deleteFaq(faqId) {
			$('#faq-'+ faqId).modal('hide');

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
				url : '<?= base_url(); ?>admin/faq/ajax_delete/'+ faqId +'/'
			});
		}
	</script>

	<div id="faq-list">
		<h2>FAQ</h2>
		<p>Frequently Asked Questions</p>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-1 text-left no-padding">
					<a href="<?= base_url(); ?>admin/faq/add/"><button type="button" class="btn btn-success">Add FAQ</button></a>
				</div>
			</div>
		</div>

		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th style="width: 10%;">Action</th>
						<th>Question</th>
					</tr>
				</thead>
				<tbody>
					<? foreach ($arr_faq as $faq): ?>
						<tr>
							<td style="width: 10%;">
								<? if ($faq->editable > 0): ?>
									<a href="<?= base_url(); ?>admin/faq/edit/<?= $faq->id; ?>"><button type="button" class="btn btn-xs btn-primary">Edit</button></a>
								<? endif; ?>

								<? if ($faq->deletable > 0): ?>
									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#faq-<?= $faq->id ?>">Delete</button>
								<? endif; ?>
							</td>
							<td><?= $faq->question; ?></td>
						</tr>
					<? endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

	<div style="padding: 0 30px;">
		<?= $pagination; ?>
	</div>

	<? foreach ($arr_faq as $faq): ?>
		<div class="modal fade" id="faq-<?= $faq->id ?>" tabindex="-1" role="dialog" aria-labelledby="modal-faq-<?= $faq->id; ?>">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="modal-faq-<?= $faq->id; ?>">Delete <?= $faq->question ?></h4>
					</div>
					<div class="modal-body">
						Are You Sure?
					</div>
					<div class="modal-footer text-center center-block">
						<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
						<button type="button" class="btn btn-primary" onclick="deleteFaq('<?= $faq->id; ?>');">Yes</button>
					</div>
				</div>
			</div>
		</div>
	<? endforeach; ?>
</body>
</html>
	<style type="text/css">
		#category-list {
			margin-top: 70px;
			padding: 0 2%;
		}
	</style>

	<script type="text/javascript">
		$(function() {
		});

		function deleteCategory(categoryId) {
			$('#category-'+ categoryId).modal('hide');

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
				url : '<?= base_url(); ?>admin/category/ajax_delete/'+ categoryId +'/'
			});
		}
	</script>

	<div id="category-list">
		<h2>CATEGORY</h2>
		<p>All Category for your Recipe</p>

		<!--<div class="container-fluid">
			<div class="row">
				<div class="col-lg-1 text-left no-padding">
					<a href="<?= base_url(); ?>admin/category/add/"><button type="button" class="btn btn-success">Add Category</button></a>
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
					<? foreach ($arr_category as $category): ?>
						<tr>
							<td style="width: 10%;">
								<? if ($category->editable > 0): ?>
									<a href="<?= base_url(); ?>admin/category/edit/<?= $category->id; ?>"><button type="button" class="btn btn-xs btn-primary">Edit</button></a>
								<? endif; ?>

								<? if ($category->deletable > 0): ?>
									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#category-<?= $category->id ?>">Delete</button>
								<? endif; ?>
							</td>
							<td><?= $category->name; ?></td>
						</tr>
					<? endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

	<div style="padding: 0 30px;">
		<?= $pagination; ?>
	</div>

	<? foreach ($arr_category as $category): ?>
		<div class="modal fade" id="category-<?= $category->id ?>" tabindex="-1" role="dialog" aria-labelledby="modal-category-<?= $category->id; ?>">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="modal-category-<?= $category->id; ?>">Delete <?= $category->name ?></h4>
					</div>
					<div class="modal-body">
						Are You Sure?
					</div>
					<div class="modal-footer text-center center-block">
						<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
						<button type="button" class="btn btn-primary" onclick="deleteCategory('<?= $category->id; ?>');">Yes</button>
					</div>
				</div>
			</div>
		</div>
	<? endforeach; ?>
</body>
</html>
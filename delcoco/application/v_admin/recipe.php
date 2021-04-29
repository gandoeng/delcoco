`	<style type="text/css">
		#recipe-list {
			margin-top: 50px;
			padding: 0 2%;
		}
	</style>

	<script type="text/javascript">
		$(function() {
		});

		function deleteRecipe(recipeId) {
			$('#recipe-'+ recipeId).modal('hide');

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
				url : '<?= base_url(); ?>admin/recipe/ajax_delete/'+ recipeId +'/'
			});
		}
	</script>

	<div id="recipe-list">
		<h2>RECIPE</h2>
		<p>All Recipe for your website content</p>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-1 text-left no-padding">
					<a href="<?= base_url(); ?>admin/recipe/add/"><button type="button" class="btn btn-success">Add Recipe</button></a>
				</div>
			</div>
		</div>

		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th style="width: 10%;">Action</th>
						<th>Name</th>
						<th>Image</th>
					</tr>
				</thead>
				<tbody>
					<? foreach ($arr_recipe as $recipe): ?>
						<tr>
							<td style="width: 10%;">
								<? if ($recipe->editable > 0): ?>
									<a href="<?= base_url(); ?>admin/recipe/edit/<?= $recipe->id; ?>"><button type="button" class="btn btn-xs btn-primary">Edit</button></a>
								<? endif; ?>

								<? if ($recipe->deletable > 0): ?>
									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#recipe-<?= $recipe->id ?>">Delete</button>
								<? endif; ?>
							</td>
							<td><?= $recipe->name; ?></td>
							<td>
								<img src="<?= base_url(); ?>images/website/<?= $recipe->image_name; ?>" style="height: 150px;">
							</td>
						</tr>
					<? endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

	<div style="padding: 0 30px;">
		<?= $pagination; ?>
	</div>

	<? foreach ($arr_recipe as $recipe): ?>
		<div class="modal fade" id="recipe-<?= $recipe->id; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-recipe-<?= $recipe->id; ?>">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="modal-recipe-<?= $recipe->id; ?>">Delete <?= $recipe->name; ?></h4>
					</div>
					<div class="modal-body">
						Are You Sure?
					</div>
					<div class="modal-footer text-center center-block">
						<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
						<button type="button" class="btn btn-primary" onclick="deleteRecipe('<?= $recipe->id; ?>');">Yes</button>
					</div>
				</div>
			</div>
		</div>
	<? endforeach; ?>
</body>
</html>
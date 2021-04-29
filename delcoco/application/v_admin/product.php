`	<style type="text/css">
		#product-list {
			margin-top: 50px;
			padding: 0 2%;
		}
	</style>

	<script type="text/javascript">
		$(function() {
		});

		function deleteProduct(productId) {
			$('#product-'+ productId).modal('hide');

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
				url : '<?= base_url(); ?>admin/product/ajax_delete/'+ productId +'/'
			});
		}
	</script>

	<div id="product-list">
		<h2>PRODUCT</h2>
		<p>All Product for your Product Page</p>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-1 text-left no-padding">
					<a href="<?= base_url(); ?>admin/product/add/"><button type="button" class="btn btn-success">Add Product</button></a>
				</div>
			</div>
		</div>

		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th style="width: 15%;">Action</th>
						<th>Name</th>
						<th>Category</th>
					</tr>
				</thead>
				<tbody>
					<? foreach ($arr_product as $product): ?>
						<tr>
							<td style="width: 15%;">
								<? if ($product->editable > 0): ?>
									<a href="<?= base_url(); ?>admin/product/edit/<?= $product->id; ?>"><button type="button" class="btn btn-xs btn-primary">Edit</button></a>
								<? endif; ?>

								<? if ($product->deletable > 0): ?>
									<button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#product-<?= $product->id ?>">Delete</button>
								<? endif; ?>

								<a href="<?= base_url(); ?>admin/image/product/<?= $product->id; ?>"><button type="button" class="btn btn-xs btn-success">Upload Image</button></a>
							</td>
							<td><?= $product->name; ?></td>
							<td><?= $product->category; ?></td>
						</tr>
					<? endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

	<div style="padding: 0 30px;">
		<?= $pagination; ?>
	</div>

	<? foreach ($arr_product as $product): ?>
		<div class="modal fade" id="product-<?= $product->id ?>" tabindex="-1" role="dialog" aria-labelledby="modal-product-<?= $product->id; ?>">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="modal-product-<?= $product->id; ?>">Delete <?= $product->name ?></h4>
					</div>
					<div class="modal-body">
						Are You Sure?
					</div>
					<div class="modal-footer text-center center-block">
						<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
						<button type="button" class="btn btn-primary" onclick="deleteProduct('<?= $product->id; ?>');">Yes</button>
					</div>
				</div>
			</div>
		</div>
	<? endforeach; ?>
</body>
</html>
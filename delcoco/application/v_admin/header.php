`	<style type="text/css">
		#header-list {
			margin-top: 50px;
			padding: 0 2%;
		}
	</style>

	<script type="text/javascript">
		$(function() {
		});
	</script>

	<div id="header-list">
		<h2>NAVIGATION BAR</h2>
		<p>Change your navigation bar title here.</p>
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th style="width: 10%;">Action</th>
						<th>Name</th>
					</tr>
				</thead>
				<tbody>
					<? foreach ($arr_header as $header): ?>
						<tr>
							<td style="width: 10%;">
								<a href="<?= base_url(); ?>admin/header/edit/<?= $header->id; ?>"><button type="button" class="btn btn-xs btn-primary">Edit</button></a>
							</td>
							<td><?= $header->name; ?></td>
						</tr>
					<? endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
	<style type="text/css">
		a {
			cursor: pointer;
		}

		th {
			color: #444444;
			font-weight: bold;
		}

		#dashboard {
			margin-top: 70px;
			background-color: transparent;
		}

		.font-awesome {
			color: #479A50;
		}

		.huge {
			font-size: 16px;
			font-weight: bold;
		}

		.panel-custom {
			border: 1px solid #479A50;
		}

		.panel-footer {
			border-top: 1px solid #479A50;
		}

		.panel-custom, .panel-footer {
			background-color: #fff;
			color: #000;
		}

		.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
		   background-color: #F5F5F5;
		   color: black;
		}

		.table-striped > tbody > tr:nth-child(2n) > td, .table-striped > tbody > tr:nth-child(2n) > th {
		   background-color: #f8f8f8;
		   color: black;
		}
	</style>

	<script type="text/javascript">
		$(function() {
		});
	</script>

	<div id="dashboard">
		<div class="col-lg-2">
			<div class="panel panel-custom">
				<div class="panel-heading">
					<div class="row">
						<div class="font-awesome col-xs-3">
							<i class="fa fa-cubes fa-3x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div>Product,</div>
							<div><?= $count_product; ?></div>
						</div>
					</div>
				</div>
				<a href="<?= base_url(); ?>admin/product/view/">
					<div class="panel-footer">
						<span class="pull-left">View Product</span>
						<span class="font-awesome pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-2">
			<div class="panel panel-custom">
				<div class="panel-heading">
					<div class="row">
						<div class="font-awesome col-xs-3">
							<i class="fa fa-file-text-o fa-3x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div>Recipe,</div>
							<div><?= $count_recipe; ?></div>
						</div>
					</div>
				</div>
				<a href="<?= base_url(); ?>admin/recipe/view/">
					<div class="panel-footer">
						<span class="pull-left">View Recipe</span>
						<span class="font-awesome pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-2">
			<div class="panel panel-custom">
				<div class="panel-heading">
					<div class="row">
						<div class="font-awesome col-xs-3">
							<i class="fa fa-google fa-3x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div>View</div>
							<div>Google Analytics</div>
						</div>
					</div>
				</div>
				<a target="_blank" href="http://analytics.google.com">
					<div class="panel-footer">
						<span class="pull-left">View Analytics</span>
						<span class="font-awesome pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-2 pull-right">
			<div class="panel panel-custom">
				<div class="panel-heading">
					<div class="row">
						<div class="font-awesome col-xs-3">
							<i class="fa fa-user-md fa-3x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div>Welcome,</div>
							<div><?= $user->name; ?></div>
						</div>
					</div>
				</div>
				<a href="<?= base_url(); ?>admin/user/change_password/">
					<div class="panel-footer">
						<span class="pull-left">Change Your Password</span>
						<span class="font-awesome pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
	</div>
</body>
</html>
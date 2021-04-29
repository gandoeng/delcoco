	<style type="text/css">
		#recipe {
			margin-top: 70px;
		}
	</style>

	<script type="text/javascript">
		var submitQuery = false;

		$(function() {
			reset();
			change();
			init();
		});

		function back() {
			window.location.href = '<?= base_url(); ?>admin/recipe/view/';
		}

		function change() {
			$('#recipe-image').change(function() {
				var file_data = $('#recipe-image').prop('files')[0];
				var form_data = new FormData();
				form_data.append('file', file_data);

				$('#loading').modal('show');
				var interval = startInterval();

				$.ajax({
					cache: false,
					contentType: false,
					data: form_data,
					dataType: 'JSON',
					processData: false,
					type: 'post',
					success: function(data) {
						if (data.status == 'success') {
							$('.preview').remove();

							var img = '<img class="preview" src="<?= base_url(); ?>images/website/'+ data.image_id +'.'+ data.ext +'" style="width: 100%;">';
							$('#preview-image').append(img);

							$('#preview-image').data('image_id', data.image_id);

							$('#modal-success-upload-content').html('Image Updated.');
							$('#success-upload').modal('show');
						}
						else {
							$('#modal-warning-content').html(data.message);
							$('#warning').modal('show');
						}

						$('#loading').modal('hide');
						clearInterval(interval);
					},
					url: '<?= base_url(); ?>admin/image/ajax_upload/',
				});
			});
		}

		function init() {
			tinymce.init({
				selector: 'textarea#recipe-ingredients',
				height: 300,
				width: '80%',
			});

			tinymce.init({
				selector: 'textarea#recipe-preparations',
				height: 300,
				width: '80%',
			});
		}

		function reset() {
			$('#recipe-name').val('');
			$('#recipe-keyword').val('');
			$('#recipe-description').val('');
			$('#recipe-ingredients').val('');
			$('#recipe-preparations').val('');
			$('#category-list').val(0);

			$('#preview-image').data('image_id', 0);
			$('#recipe-image').val('');
		}

		function submit() {
			if (submitQuery) {
				return;
			}

			submitQuery = true;

			var name = $('#recipe-name').val();
			var keyword = $('#recipe-keyword').val();
			var description = $('#recipe-description').val();
			var ingredients = tinyMCE.get('recipe-ingredients').getContent();
			var preparations = tinyMCE.get('recipe-preparations').getContent();
			var imageId = $('#preview-image').data('image_id');
			var categoryId = $('#category-list').val();

			if (name == '' || keyword == '' || description == '' || ingredients == '' || preparations == '' || imageId <= 0 || categoryId <= 0) {
				submitQuery = false;

				$('#modal-warning-content').html('All Field must be filled.');
				$('#warning').modal('show');

				return;
			}

			$('#loading').modal('show');
			var interval = startInterval();

			$.ajax({
				data :{
					name: name,
					keyword: keyword,
					description: description,
					ingredients: ingredients,
					preparations: preparations,
					image_id: imageId,
					category_id: categoryId
				},
				dataType: 'JSON',
				error: function() {
					submitQuery = false;

					$('#loading').modal('hide');
					clearInterval(interval);

					$('#modal-warning-content').html('Server Error.');
					$('#warning').modal('show');
				},
				success: function(data){
					submitQuery = false;

					$('#loading').modal('hide');
					clearInterval(interval);

					if (data.status == 'success') {
						$('#modal-success-content').html('Your recipe has succesfully updated.');
						$('#success').modal('show');
					}
					else {
						$('#modal-warning-content').html(data.message);
						$('#warning').modal('show');
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>admin/recipe/ajax_add/'
			});
		}
	</script>

	<div id="recipe">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#recipe-details">Add recipe</a></li>
				<li><a data-toggle="tab" href="#upload-image">Upload Image</a></li>
			</ul>

			<div class="tab-content">
				<div id="recipe-details" class="tab-pane fade in active">
					<!-- put data here! -->
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Title</div>
							<div class="col-lg-8 text-left">
								<input id="recipe-name" class="input-all" type="text" placeholder="Title.." value="">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Keyword</div>
							<div class="col-lg-8 text-left">
								<input id="recipe-keyword" class="input-all" type="text" placeholder="Keyword.." value="">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Category</div>
							<div class="col-lg-8 text-left">
								<select id="category-list" class="input-all select">
									<option value="0" selected="selected">-- Choose Category --</option>
									<? foreach ($arr_category as $category): ?>
										<option value="<?= $category->id; ?>"><?= $category->name; ?></option>
									<? endforeach; ?>
								</select>
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Description</div>
							<div class="col-lg-8 text-left">
								<textarea id="recipe-description" class="input-all" type="text" placeholder="Description.."></textarea>
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Ingredients</div>
							<div class="col-lg-8 text-left">
								<textarea id="recipe-ingredients" class="input-all" type="text" placeholder="Ingredients.."></textarea>
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Preparation</div>
							<div class="col-lg-8 text-left">
								<textarea id="recipe-preparations" class="input-all" type="text" placeholder="Preparation.."></textarea>
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4"></div>
							<div class="col-lg-2 text-center">
								<div class="button" onclick="back();">Cancel</div>
							</div>
							<div class="col-lg-2 text-center">
								<div class="button" onclick="submit();">Submit</div>
							</div>
							<div class="col-lg-4"></div>
						</div>
					</div>
				</div>

				<div id="upload-image" class="tab-pane fade">
					<!-- put data here! -->
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4 text-right margin-5">
								<div>Upload Image <span class="important">*</span></div>
								<div>Recommended Resolution: landscape with width 960px</div>
								<div>Max File Size: 1 MB</div>
							</div>
							<div class="col-lg-8 text-left">
								<input id="recipe-image" class="input-all" type="file" placeholder="Upload Image.." value="">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Preview Image</div>
							<div class="col-lg-8 text-left">
								<div id="preview-image"></div>
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4"></div>
							<div class="col-lg-2 text-center">
								<div class="button" onclick="back();">Cancel</div>
							</div>
							<div class="col-lg-2 text-center">
								<div class="button" onclick="submit();">Submit</div>
							</div>
							<div class="col-lg-4"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="warning" tabindex="-1" role="dialog" aria-labelledby="modal-warning">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="modal-warning">Warning</h4>
				</div>
				<div id="modal-warning-content" class="modal-body"></div>
				<div class="modal-footer text-center center-block">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="modal-success">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="modal-success">Success</h4>
				</div>
				<div id="modal-success-content" class="modal-body"></div>
				<div class="modal-footer text-center center-block">
					<button type="button" class="btn btn-default" data-dismiss="modal" onclick="back();">OK</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
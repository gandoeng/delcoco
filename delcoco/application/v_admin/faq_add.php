	<style type="text/css">
		#faq {
			margin-top: 70px;
		}
	</style>

	<script type="text/javascript">
		var submitQuery = false;

		$(function() {
			reset();
			init();
		});

		function back() {
			window.location.href = '<?= base_url(); ?>admin/faq/view/';
		}

		function init() {
			tinymce.init({
				selector: 'textarea#faq-answer',
				height: 300,
				width: '80%',
			});
		}

		function reset() {
			$('#faq-question').val('');
			$('#faq-answer').val('');
		}

		function submit() {
			if (submitQuery) {
				return;
			}

			submitQuery = true;

			var question = $('#faq-question').val();
			var answer = tinyMCE.activeEditor.getContent({
				format : 'raw'
			});

			if (question == '' || answer == '') {
				submitQuery = false;

				$('#modal-warning-content').html('All Field must be filled.');
				$('#warning').modal('show');

				return;
			}

			$('#loading').modal('show');
			var interval = startInterval();

			$.ajax({
				data :{
					question: question,
					answer: answer
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
						$('#modal-success-content').html('Your faq has succesfully updated.');
						$('#success').modal('show');
					}
					else {
						$('#modal-warning-content').html(data.message);
						$('#warning').modal('show');
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>admin/faq/ajax_add/'
			});
		}
	</script>

	<div id="faq">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#faq-details">Add FAQ</a></li>
			</ul>

			<div class="tab-content">
				<div id="faq-details" class="tab-pane fade in active">
					<!-- put data here! -->
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Question</div>
							<div class="col-lg-8 text-left">
								<input id="faq-question" class="input-all" type="text" placeholder="Question.." value="">
							</div>
						</div>
						<hr class="separator"></hr>
						<div class="row">
							<div class="col-lg-4 text-right margin-5">Answer</div>
							<div class="col-lg-8 text-left">
								<textarea id="faq-answer" class="input-all" type="text" placeholder="Answer.."></textarea>
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
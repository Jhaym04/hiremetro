	<!-- Modal for review-->
		<div class="modal fade" id="updateModal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="login">
					<div class="modal-header text-center" id="header">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title"> REVIEW </h4>
						<p>write your review to improve employee's performance</p>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url('hiremetro/login')?>" method="post">
							<div class="form-vertical">
								<h4><b>Rate:</b></h4>
							</div>
							<br />
							<div class="form-vertical">
								<h4><b>Leave a review:</b></h4>
								<div class="form-group">
									<textarea rows="5" cols="70" placeholder="Write a review..." maxlength="200"></textarea>
								</div>
							</div>
					</div>
					<div class="modal-footer text-center">
						<button type="submit" class="btn btn-success">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>


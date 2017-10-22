	<!-- Modal for update-->
		<div class="modal fade" id="updateModal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" id="login">
					<div class="modal-header text-center" id="header">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4 class="modal-title"> PAYMENT </h4>
						<p>write your card information to transact</p>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url('hiremetro/login')?>" method="post">
							<div class="form-vertical">
								<div class="form-group">
									<p>Payment Method:</p><select class="form-control" id="sel1" name="work_title">
									<option>Credit Card</option>
									<option>Bank transfer</option>
									<option>PayPal</option>
									<option>Moneybookers</option>
								  </select>
								</div>
								<div class="form-group">
									<p>Card number:</p><input type="text" class="form-control" name="card_number"></input>
								</div>
								<div class="form-group">
									<p>Cardholder's name:</p><input type="text" class="form-control" name="card_name"></input>
								</div>
								<div class="form-group">
									<p>Expiry date:</p>
									<div class="input-group date" data-provide="datepicker">
										<input type="text" class="form-control" name="birthday" readonly>
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-th"></span>
										</div>
										<script>
											$('.datepicker').datepicker();
										</script>	
									</div>
								</div>
								<div class="form-group">
									<p>Security code:</p><input type="text" class="form-control" name="security_code"></input>
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

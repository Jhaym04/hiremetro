<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
	.bg {
		background-color: #3b8686;
	}
	
	.text{
		color:white;
	}
	
	textarea {
    width: 100%;
    height: 150px;
    padding: 10px 10px;
    box-sizing: border-box;
    border: 2px solid #ddd;
    border-radius: 5px;
    background-color: white;
    font-size: 15px;
    resize: none;
}



  </style>
</head>
<body>

	<div class="container">

		<!-- Trigger the modal with a button -->
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Report</button>

		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
			
			  <!-- Modal content-->
				 <div class="modal-content">
					<div class="modal-header text-center bg" >
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4 class="modal-title text">Report</h4>
					</div>
					<div class="modal-body">
						<div class="form-group" >
							<h4>Subject</h4>
							<input type="text" class="form-control" name="Subject" placeholder="Subject" maxlength="100" /> 
						</div>
						<div class="form-group">
							<h4>Body</h4>
							<textarea placeholder="Body"></textarea>
						</div>
					</div>
					<div class="modal-footer text-center"  >

						  <button type="submit" class="btn btn-default center-block">Submit</button>
					 
					</div>
				 </div>
			  
			</div>
		</div>
	  
	</div>

</body>
</html>
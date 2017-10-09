<?php
if(isset($_POST['moveFile']))
{
		$fileName=$_FILES['fileName']['name'];
		$tempName=$_FILES['fileName']['tmp_name'];
		
		if(isset($fileName))
		{
			if(!empty($fileName))
			{
				$location="MyFiles/";
				$imgname = "".uniqid("img_",true).".jpg";
				if(move_uploaded_file($tempName, $location.$imgname))
				{
					echo 'File Uploaded';
				}
			}
		}
	
}
?>


<html>
	<head>
		<title>Sample Upload
		</title>
	</head>
	<body>
		<form action="upload_file.php" method="POST" enctype="multipart/form-data">
			<input type="file" name="fileName"><br /><br />
			<input type="submit" name="moveFile" value="Upload">
		</form>
	</body>
</html>

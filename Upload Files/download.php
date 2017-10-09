<?php
	if(!empty($_GET['file']))
	{
		$fileName = basename($_GET['file']);
		$filePath = 'MyFiles/'.$fileName;
		
		if(!empty($fileName) && file_exists($filePath))
		{
			header("Cache-Control: public");
			header("Content-Description: File Transfer");
			header("Content-Disposition: attachment; filename=$fileName");
			header("Content-Type: application/zip");
			header("Content-Transfer-Encoding: binary");
			
			readfile($filePath);
			exit;
		}
	}

?>


<html>
	<head>  
		<title>Sample Upload
		</title>
	</head>
	<body>
		<a href="download.php?file=haha.jpg">Click to download </a>
	</body>
</html>

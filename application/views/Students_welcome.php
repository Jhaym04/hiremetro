<html>
<head>
	<title> Students </title>
</head>

<body>
	<h1>Welcome Students</h1>

	<table>
		<thead>
			<tr>
				<th>ID NO.</th>
				<th>LASTNAME</th>
				<th>FIRSTNAME</th>
				<th>MIDDLENAME</th>
				<th>SEX</th>
				<th>COURSE</th>
				<th>ACTION</th>
			</tr>
		</thead>
		<tbody>
<?php
// $students = array();
// $dummy=array('idno'=>'12-032-023','lname'=>'Ebina','fname'=>'John Llyod','mname'=>'Bunso','sex'=>'M','course'=>'BSIT');
// $students[] = $dummy;
	
	if(isset ($students)){
		foreach($students as $s){
			
			echo '<tr>
						<td>'.$s['idno'].'</td>
						<td>'.$s['lname'].'</td>
						<td>'.$s['fname'].'</td>
						<td>'.$s['mname'].'</td>
						<td>'.$s['sex'].'</td>
						<td>'.$s['course'].'</td>
						<td><a href="'.base_url('students/profile/').$s['idno'].'">View</td>
					</tr>';
		}
	}

?>
</tbody>
</table>
</body>
</html>
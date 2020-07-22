<?php
//define('TOTAL_MARKS',1500);

$conn = mysqli_connect('localhost','root','','skool');
//$conn = mysqli_connect('localhost','interviewtask','','INTERVIEWTASK');

if (!$conn) {
	echo 'error in connecting the database:'.mysqli_connect_error();
}else{
	echo 'connected to database';
}

 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<title>Student marks</title>
 	<style>
 		thead td {
 			background-color: #00bfbf;
			width: 120px;
			height: 60px;
 		}
 	</style>
 </head>
 <body>
 	

 	<div>
 		<table border="2">
 			
 			<thead>
 				<td>Grade</td>
 				<td>10</td>
 				<td>11</td>
 				<td>12</td>
 			</thead>
 			<tbody>
 				<tr>
 					<td></td>
 					<td></td>
 					<td></td>
 					<td></td>
 				</tr>
 				<tr>

 					
 					<td>Total Student Pass</td>
 					<td>
 						
 						<?php
 						$res = mysqli_query($conn, " SELECT *, ( SELECT ROUND( ( (SUM(marks))/1500 )*100 ) FROM marks WHERE student_id=students.student_id  ) AS percentage FROM students WHERE student_id IN (SELECT student_id FROM marks WHERE class_id=1 GROUP BY student_id ) AND gender='Male' ");

 						 $mail_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$calculated_percentage = $row['percentage'];
				 			if ($calculated_percentage>=33) {
				 				$mail_students_pass++;
				 			}

					 	}
					 	echo 'M stud :'.$mail_students_pass.'  | ';

					 	$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=1 group by student_id ) and gender='Female' ");
 						$femail_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage>=33) {
				 				$femail_students_pass++;
				 			}

					 	}
					 	echo 'F std :'.$femail_students_pass.'  | ';

					 	$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=1 group by student_id ) ");
 						$total_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage>=33) {
				 				$total_students_pass++;
				 			}

					 	}
					 	echo 'Total students :'.$total_students_pass;

 					 ?>
 					</td>
 					<td>
 						<?php
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=2 group by student_id ) and gender='Male' ");
 						$mail_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			//echo $calculated_percentage."<br>";
				 			if ($calculated_percentage>=33) {
				 				$mail_students_pass++;
				 			}

					 	}
					 	echo 'M stud :'.$mail_students_pass.'  | ';

					 	$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=2 group by student_id ) and gender='Female' ");
 						$femail_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";

					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage>=33) {
				 				$femail_students_pass++;
				 			}

					 	}
					 	echo 'F std :'.$femail_students_pass.'  | ';

					 	$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=2 group by student_id ) ");
 						$total_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage>=33) {
				 				$total_students_pass++;
				 			}

					 	}
					 	echo 'Total students :'.$total_students_pass;

 					 ?>
 						

 					</td>
 					<td>

 						<?php
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=3 group by student_id ) and gender='Male' ");
 						$mail_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage>=33) {
				 				$mail_students_pass++;
				 			}

					 	}
					 	echo 'M stud :'.$mail_students_pass.'  | ';

					 	$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=3 group by student_id ) and gender='Female' ");
 						$femail_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage>=33) {
				 				$femail_students_pass++;
				 			}

					 	}
					 	echo 'F std :'.$femail_students_pass.'  | ';

					 	$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=3 group by student_id ) ");
 						$total_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage>=33) {
				 				$total_students_pass++;
				 			}

					 	}
					 	echo 'Total students :'.$total_students_pass;

 					 ?>
 						

 					</td>
 				</tr>
 				<tr>
 					<td>Total Student 1st Div</td>
 					<td>
 						<?php
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=1 group by student_id ) and gender='Male' ");
 						$mail_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage>=60) {
				 				$mail_students_pass++;
				 			}

					 	}
					 	echo 'M stud :'.$mail_students_pass.'  | ';

					 	
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=1 group by student_id ) and gender='Female' ");
 						$female_student_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage>=60) {
				 				$female_student_first_div++;
				 			}

					 	}
					 	echo 'F std :'.$female_student_first_div.'  | ';


					 	$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=1 group by student_id ) ");
 						$total_students_in_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage>=60) {
				 				$total_students_in_first_div++;
				 			}

					 	}
					 	echo 'F std :'.$total_students_in_first_div.'  | ';
 						 
 						 ?>
 						

 					</td>
 					<td>
 						<?php
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=2 group by student_id ) and gender='Male' ");
 						$mail_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage>=60) {
				 				$mail_students_pass++;
				 			}

					 	}
					 	echo 'M stud :'.$mail_students_pass.'  | ';

					 	
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=2 group by student_id ) and gender='Female' ");
 						$female_student_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage>=60) {
				 				$female_student_first_div++;
				 			}

					 	}
					 	echo 'F std :'.$female_student_first_div.'  | ';


					 	$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=2 group by student_id ) ");
 						$total_students_in_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage>=60) {
				 				$total_students_in_first_div++;
				 			}

					 	}
					 	echo 'F std :'.$total_students_in_first_div.'  | ';
 						 
 						 ?>

 					</td>
 					<td>

 						<?php
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=3 group by student_id ) and gender='Male' ");
 						$mail_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage>=60) {
				 				$mail_students_pass++;
				 			}

					 	}
					 	echo 'M stud :'.$mail_students_pass.'  | ';

					 	
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=3 group by student_id ) and gender='Female' ");
 						$female_student_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage>=60) {
				 				$female_student_first_div++;
				 			}

					 	}
					 	echo 'F std :'.$female_student_first_div.'  | ';


					 	$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=3 group by student_id ) ");
 						$total_students_in_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage>=60) {
				 				$total_students_in_first_div++;
				 			}

					 	}
					 	echo 'F std :'.$total_students_in_first_div.'  | ';
 						 
 						 ?>
 						

 					</td>
 				</tr>
 				<tr>
 					<td>Total Student 2nd Div</td>
 					<td>
 						<?php
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=1 group by student_id ) and gender='Male' ");
 						$mail_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<60 && $calculated_percentage>50) {
				 				$mail_students_pass++;
				 			}

					 	}
					 	echo 'M stud :'.$mail_students_pass.'  | ';

					 	
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=1 group by student_id ) and gender='Female' ");
 						$female_student_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<60 && $calculated_percentage>50) {
				 				$female_student_first_div++;
				 			}

					 	}
					 	echo 'F std :'.$female_student_first_div.'  | ';


					 	$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=1 group by student_id ) ");
 						$total_students_in_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<60 && $calculated_percentage>50) {
				 				$total_students_in_first_div++;
				 			}

					 	}
					 	echo 'Total students :'.$total_students_in_first_div.'  | ';
 						 
 						 ?>
 						

 					</td>
 					<td>
 						<?php
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=2 group by student_id ) and gender='Male' ");
 						$mail_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<60 && $calculated_percentage>50) {
				 				$mail_students_pass++;
				 			}

					 	}
					 	echo 'M stud :'.$mail_students_pass.'  | ';

					 	
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=2 group by student_id ) and gender='Female' ");
 						$female_student_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<60 && $calculated_percentage>50) {
				 				$female_student_first_div++;
				 			}

					 	}
					 	echo 'F std :'.$female_student_first_div.'  | ';


					 	$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=2 group by student_id ) ");
 						$total_students_in_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<60 && $calculated_percentage>50) {
				 				$total_students_in_first_div++;
				 			}

					 	}
					 	echo 'Total students :'.$total_students_in_first_div.'  | ';
 						 
 						 ?>

 					</td>
 					<td>

 						<?php
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=3 group by student_id ) and gender='Male' ");
 						$mail_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<60 && $calculated_percentage>50) {
				 				$mail_students_pass++;
				 			}

					 	}
					 	echo 'M stud :'.$mail_students_pass.'  | ';

					 	
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=3 group by student_id ) and gender='Female' ");
 						$female_student_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<60 && $calculated_percentage>50) {
				 				$female_student_first_div++;
				 			}

					 	}
					 	echo 'F std :'.$female_student_first_div.'  | ';


					 	$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=3 group by student_id ) ");
 						$total_students_in_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<60 && $calculated_percentage>50) {
				 				$total_students_in_first_div++;
				 			}

					 	}
					 	echo 'Total students :'.$total_students_in_first_div.'  | ';
 						 
 						 ?>
 						

 					</td>
 				</tr>
 				<tr>
 					<td>Total Student 3rd Div</td>
 					<td>
 						<?php
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=1 group by student_id ) and gender='Male' ");
 						$mail_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<50 && $calculated_percentage>=33) {
				 				$mail_students_pass++;
				 			}

					 	}
					 	echo 'M stud :'.$mail_students_pass.'  | ';

					 	
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=1 group by student_id ) and gender='Female' ");
 						$female_student_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<50 && $calculated_percentage>=33) {
				 				$female_student_first_div++;
				 			}

					 	}
					 	echo 'F std :'.$female_student_first_div.'  | ';


					 	$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=1 group by student_id ) ");
 						$total_students_in_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<50 && $calculated_percentage>=33) {
				 				$total_students_in_first_div++;
				 			}

					 	}
					 	echo 'Total students :'.$total_students_in_first_div.'  | ';
 						 
 						 ?>
 						

 					</td>
 					<td>
 						<?php
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=2 group by student_id ) and gender='Male' ");
 						$mail_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<50 && $calculated_percentage>=33) {
				 				$mail_students_pass++;
				 			}

					 	}
					 	echo 'M stud :'.$mail_students_pass.'  | ';

					 	
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=2 group by student_id ) and gender='Female' ");
 						$female_student_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<50 && $calculated_percentage>=33) {
				 				$female_student_first_div++;
				 			}

					 	}
					 	echo 'F std :'.$female_student_first_div.'  | ';


					 	$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=2 group by student_id ) ");
 						$total_students_in_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<50 && $calculated_percentage>=33) {
				 				$total_students_in_first_div++;
				 			}

					 	}
					 	echo 'Total students :'.$total_students_in_first_div.'  | ';
 						 
 						 ?>

 					</td>
 					<td>

 						<?php
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=3 group by student_id ) and gender='Male' ");
 						$mail_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<50 && $calculated_percentage>=33) {
				 				$mail_students_pass++;
				 			}

					 	}
					 	echo 'M stud :'.$mail_students_pass.'  | ';

					 	
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=3 group by student_id ) and gender='Female' ");
 						$female_student_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<50 && $calculated_percentage>=33) {
				 				$female_student_first_div++;
				 			}

					 	}
					 	echo 'F std :'.$female_student_first_div.'  | ';


					 	$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=3 group by student_id ) ");
 						$total_students_in_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<50 && $calculated_percentage>=33) {
				 				$total_students_in_first_div++;
				 			}

					 	}
					 	echo 'Total students :'.$total_students_in_first_div.'  | ';
 						 
 						 ?>
 						

 					</td>
 				</tr>
 				<tr>
 					<td>Total Student Fail</td>
 					<td>
 						<?php
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=1 group by student_id ) and gender='Male' ");
 						$mail_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<33) {
				 				$mail_students_pass++;
				 			}

					 	}
					 	echo 'M stud :'.$mail_students_pass.'  | ';

					 	
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=1 group by student_id ) and gender='Female' ");
 						$female_student_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<33) {
				 				$female_student_first_div++;
				 			}

					 	}
					 	echo 'F std :'.$female_student_first_div.'  | ';


					 	$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=1 group by student_id ) ");
 						$total_students_in_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<33) {
				 				$total_students_in_first_div++;
				 			}

					 	}
					 	echo 'Total students :'.$total_students_in_first_div.'  | ';
 						 
 						 ?>
 						

 					</td>
 					<td>
 						<?php
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=2 group by student_id ) and gender='Male' ");
 						$mail_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<33) {
				 				$mail_students_pass++;
				 			}

					 	}
					 	echo 'M stud :'.$mail_students_pass.'  | ';

					 	
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=2 group by student_id ) and gender='Female' ");
 						$female_student_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<33) {
				 				$female_student_first_div++;
				 			}

					 	}
					 	echo 'F std :'.$female_student_first_div.'  | ';


					 	$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=2 group by student_id ) ");
 						$total_students_in_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<33) {
				 				$total_students_in_first_div++;
				 			}

					 	}
					 	echo 'Total students :'.$total_students_in_first_div.'  | ';
 						 
 						 ?>

 					</td>
 					<td>

 						<?php
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=3 group by student_id ) and gender='Male' ");
 						$mail_students_pass = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<33) {
				 				$mail_students_pass++;
				 			}

					 	}
					 	echo 'M stud :'.$mail_students_pass.'  | ';

					 	
 						$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=3 group by student_id ) and gender='Female' ");
 						$female_student_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<33) {
				 				$female_student_first_div++;
				 			}

					 	}
					 	echo 'F std :'.$female_student_first_div.'  | ';


					 	$res = mysqli_query($conn, "select * from students where student_id in (SELECT student_id FROM `marks` where class_id=3 group by student_id ) ");
 						$total_students_in_first_div = 0;
					 	while ($row = mysqli_fetch_assoc($res)) {
					 		$student_id = $row['student_id'];
					 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
					 		//echo $marksQ."<br>";
					 		$marks_query = mysqli_query($conn, $marksQ);

					 		$marks_query_result = mysqli_fetch_assoc($marks_query);

					 			
				 			$calculated_percentage = ($marks_query_result['sum']/1500) *100;
				 			$calculated_percentage = round($calculated_percentage);
				 			if ($calculated_percentage<33) {
				 				$total_students_in_first_div++;
				 			}

					 	}
					 	echo 'Total students :'.$total_students_in_first_div.'  | ';
 						 
 						 ?>
 						

 					</td>
 				</tr>
 				<tr>
 					<td>Total Student Comp</td>
 					<td></td>
 					<td></td>
 					<td></td>
 				</tr>
 			</tbody>
 		</table>
 		
 	</div>

 	<br>
 	<br>
 	<br>
 	<br>
 	<br>




 		<table border="1">
 			<thead>
 				<td>Student Name</td>
 				<td> Merit</td>
 				<td>Score</td>
 			</thead>
 			<tbody>
 				<?php 
				 	$res = mysqli_query($conn, 'select * from students s');

				 	while ($row = mysqli_fetch_assoc($res)) {
				 		$student_id = $row['student_id'];
				 		$marksQ = "SELECT sum(marks) as sum FROM  marks m where m.student_id='$student_id' ";
				 		//echo $marksQ."<br>";
				 		$marks_query = mysqli_query($conn, $marksQ);

				 			$marks_query_result = mysqli_fetch_assoc($marks_query);

				 			
			 				$calculated_percentage = ($marks_query_result['sum']/1500) *100;
			 					  
			 				

				 		?>
				 		<tr>
		 					<td><?php  echo $row['name']; ?></td>
			 				<td>
			 					<?php 
			 					$calPer =round($calculated_percentage);
			 					if ($calPer>=60) {
			 						echo '1';
			 					}elseif ($calPer<60 && $calPer>50) {
			 						echo '2';
			 					}elseif ($calPer<50 && $calPer>30) {
			 						echo '3';
			 					}else{
			 						echo '4';
			 					}

			 					?>

			 				</td>
			 				<td>
			 				
			 					 <?php echo round($calculated_percentage)."%";  ?> 	
			 				</td>
		 				</tr>


				 		<?php
				 	}
				 	?>
 				
 				
 				
 			</tbody>

 		</table>
 
 </body>
 </html>

 <?php mysqli_close($conn); ?>
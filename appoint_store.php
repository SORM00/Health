<?php
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$num = $_POST['mobile_number'];
	$text = $_POST['text_area'];
	$time = $_POST['test'];
	
	$con = mysqli_connect('localhost','root');
	
	if(!$con)
		echo "Connection Failed";
	
	mysqli_select_db( $con ,'appointments');
	$q = "INSERT INTO app(Name , Gender , Contact , Message , Timings) VALUES ( '$name' , '$gender' , $num , '$text' , '$time')";
	
	$result = mysqli_query($con,$q);
	
	if($result)
	echo "<script>alert('Appointment Registered Successfully!!');
	</script>";
	else
		echo "<script>alert('Appointment Not Registered!!');
	</script>";	
	mysqli_close($con);
?>
<?php
	if(isset($_POST['submit-form']))
	{
		$db=mysqli_connect("localhost","root","","successzone");
		    
	if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['dob']) && isset($_POST['phone'])
	   && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['pincode'])
       && isset($_POST['country']) && isset($_POST['email']) && isset($_POST['parentname']) && isset($_POST['batches']) && isset($_POST['stand']) && isset($_POST['admissiondate']))
	   {
    $firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$DOB=$_POST['dob'];
	$phone=$_POST['phone'];
    $Address=$_POST['address'];
    $City=$_POST['city'];
    $Pincode=$_POST['pincode'];
	$Country=$_POST['country'];
	$Email=$_POST['email'];
	$ParentName=$_POST['parentname'];
	$Batches=$_POST['batches'];
	$Standard=$_POST['stand'];
	$Admission=$_POST['admissiondate'];

	
			 $query="insert into registrationdbb values('$firstname','$lastname','$DOB','$phone', 
			 '$Address', '$Pincode', '$City', '$Country',  '$Email', '$ParentName', '$Batches', '$Standard', '$Admission')";
			 
			  $run=mysqli_query($db,$query);
		if($run)
		{
			header("location: http://localhost/s.zone/Registration/registration.html");
			echo 'Hey..., Amarnath Your data is successfully inserted';
		}
		else{
			echo 'opsss!!!! Sorry data is not inserted';
		}
		
	
	   } 

	   
	}
?>
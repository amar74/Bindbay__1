<?php
	if(isset($_POST['submit-form']))
	{
		$db=mysqli_connect("localhost","root","","successzone");
		    
	if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email'])
	   && isset($_POST['phone']) && isset($_POST['password']) && isset($_POST['cpassword'])
       && isset($_POST['gen']))
	   {
    $firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $gender=$_POST['gen'];

	
			 $query="insert into registrationdb values('$firstname','$lastname','$email','$phone', 
			 '$password', '$cpassword', '$gender')";
			 
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
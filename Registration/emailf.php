<!DOCTYPE html>
<html lang="en">
<head>

  <title>Bindbay: Request Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="js/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- gallery -->
  <style>
		.label-div{
			width:; 
			height:auto; 
			margin:left; 
			padding-top:0px;
		}
	.labels{
		font-size:16px; 
		font-weight:200;
	}
	.label-div2{
		width:80%; 
		height:auto; 
		margin:left; 
		padding:20px 5px 5px 10px;
	}
  </style>
</head>
<body>

<?php
 
 include_once('Mail.php');
 include_once('Mail_Mime/mime.php');
 
 $allowed_extensions = array("jpg", "jpeg", "gif", "png");
 $upload_folder = './uploads/'; //<-- this folder must be writeable by the script
 $your_email = 'amarnathswhh1995@gmail.com';//<<--  update this to your email address

$errors ='';
 
 if(isset($_POST['submit']))
	 
 {
	//Get the uploaded file information
	$name_of_uploaded_file =  basename($_FILES['uploaded_file']['name']);
	
	//get the file extension of the file
	$type_of_uploaded_file = substr($name_of_uploaded_file, 
							strrpos($name_of_uploaded_file, '.') + 1);
	
	$size_of_uploaded_file = $_FILES["uploaded_file"]["size"]/1024;
	
	///------------Do Validations-------------
	if(empty($_POST['name'])||empty($_POST['email']))
	{
		$errors .= "\n Name and Email are required fields. ";	
	}
	if(IsInjected($visitor_email))
	{
		$errors .= "\n Bad email value!";
	}
	
	if($size_of_uploaded_file > $max_allowed_file_size ) 
	{
		$errors .= "\n Size of file should be less than $max_allowed_file_size";
	}
	
	//------ Validate the file extension -----
	$allowed_ext = false;
	for($i=0; $i<sizeof($allowed_extensions); $i++) 
	{ 
		if(strcasecmp($allowed_extensions[$i],$type_of_uploaded_file) == 0)
		{
			$allowed_ext = true;		
		}
	}
	
	if(!$allowed_ext)
	{
		$errors .= "\n The uploaded file is not supported file type. ".
		" Only the following file types are supported: ".implode(',',$allowed_extensions);
	}
	
	//send the email 
	if(empty($errors))
	{
		//copy the temp. uploaded file to uploads folder
		$path_of_uploaded_file = $upload_folder . $name_of_uploaded_file;
		$tmp_path = $_FILES["uploaded_file"]["tmp_name"];
		
		if(is_uploaded_file($tmp_path))
		{
		    if(!copy($tmp_path,$path_of_uploaded_file))
		    {
		    	$errors .= '\n error while copying the uploaded file';
		    }
		}
		
		
		
		//send the email
		
		$visitor_email = $_POST['email'];
		$Name = $_POST["fname"];
		$Phone = $_POST["phone"];
		$address = ['address'];
		$city = $_POST["city"];
		$district = $_POST["district"];
		$State = $_POST["State"];
		$pincode = $_POST["pincode"];
		$Binding = $_POST["Binding"];
		$pagetype = $_POST['pagetype'];
		$pages = $_POST["Pages"];
		$filecolor = $_POST["filecolor"];
		$copy = $_POST["copy"];
		$totalprice = $_POST["totalprice"];
		$payment = $_POST["payment"];
		$uploaded_file = $_POST['uploaded_file'];
		$to = $your_email;
		$subject="New form submission";
		$from = $your_email;
		$text = "A user  $name has sent you this message:\n $user_message";
		
		$message = new Mail_mime(); 
		$message->setTXTBody($text); 
		$message->addAttachment($path_of_uploaded_file);
		$body = $message->get();
		$extraheaders = array("From"=>$from, "Subject"=>$subject,"Reply-To"=>$visitor_email);
		$headers = $message->headers($extraheaders);
		$mail = Mail::factory("mail");
		$mail->send($to, $headers, $body);
		//redirect to 'thank-you page
		header('Location: thank-you.html');
	}
}

function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
	
 ?>
    <div class="modal-dialog " >
      <div class="modal-content" style="height:auto; background-color: rgba(255, 255, 255, .15);">
        <div class="modal-header" style="    background-color: #cab7b7;">
          <a href="../index.php"><button type="button" class="close" >&times;</button></a>
          <h3 class="modal-title" style="text-align:center;">Send Your File</h3>
          <p class="modal-title" style="text-align:center;"> Hey This is Bindbay, Happy to help you, we provide online printing services only in Delhi and Delhi NCR  </p>
        </div>
		
        <div class="modal-body" >
		
          <form class="" id="home_loan" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
		  			<div class="row">
				<div class="col-md-6 form-group label-div" >
					<label>Name</label>
					<input type="text" name="fname" placeholder="First Name" class="form-control" style="width:90%; margin:left;">
				</div>
				<div class="col-md-6 form-group label-div" style="padding-left:12px;  !important;">
					<label style="">Phone Number</label>
					<input type="number" name="phone" placeholder="Phone number" class="form-control" style="width:90%; margin:left;">
				</div>
			</div>
				
				<div class="row">
				    <div class="col-md-6 from-group label-div">
				        <input type="email" name="email" placeholder="Email" class="form-control" style="width:90%; margin:left;">
				    </div>
				</div>
					<div class="row">
				<div class="col-md-6 form-group label-div" >
					<label>Address</label>
					<input type="text" name="address" placeholder="Address" class="form-control" style="width:90%; margin:left;">
				</div>
				<div class="col-md-6 form-group label-div" style="padding-left:12px; !important;">
					<label style="color:#fff;">   </label>
					<input type="text" name="city" placeholder="City" class="form-control" style="width:90%; margin:left;">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 form-group label-div" >
					<input type="text" name="district" placeholder="District" class="form-control" style="width:90%; margin:left;">
				</div>
				<div class="col-md-6 form-group label-div" style="padding-left:12px; !important;">
					
					<input type="text" name="State" placeholder="State" class="form-control" style="width:90%; margin:left;">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 form-group label-div" >
					<input type="number" name="pincode" placeholder="Postal Code" class="form-control" style="width:90%; margin:left;">	
				</div>
				</div>
			<div class="row">
				<div class="col-md-6 form-group label-div" >
					<label>Binding Type</label>
					<select class="form-control" name="Binding" style="width:90%; margin:left;">
						<option value="">Select Binding Type</option>
						<option value="None (0)">None (Rs. 0.00/-)</option>
						<option value="Hard Binding (Rs.110.0/-)">Hard Binding (Rs. 110.0/-)</option>
						<option value="Hard Binding With Golden Print (Rs. 150.0/-)">Hard Binding With Golden Print(Rs. 150.0/-)</option>
						<option value="Soft Cover Binding (Rs. 45.0/-)">Soft Cover Binding (Rs. 45.0/-)</option>
						<option value="Soft Binding (Rs. 25.0/-) "> Soft Binding (Rs. 25.0/-)</option>
						<option value="Spiral Binding (Rs. 30.0/-)"> Spiral Binding (Rs. 30.0/-)</option>
						<option value="Spiral Binding with cover (Rs. 50.0/-)"> Spiral Binding with cover (Rs. 50.0/-)</option>
					</select>
				</div>
				<div class="col-md-6 form-group label-div" style="padding-left:12px; !important;">
					<label >Page Type</label>
						<select class="form-control" name="pagetype" style="width:90%; margin:left;">
						<option value="">Page Type</option> 
						<option value="A4 Single">A4 Size page Single sided</option>
						<option value="A4 double"> A4 Size Double sided</option>
						<option value="A5 Single"> A5 Size page Single sided</option>
						<option value="A5 double"> A5 Size Double sided </option>
					</select>
					</div>
			</div>
			<div class="row">
				<div class="col-md-6 form-group label-div" style="padding-left:12px; !important;">
					<label> Pages</label>
					<input type="number" name="pages" placeholder="Enter No. of pages" class="form-control" style="width:90%; margin:left;">
				</div>
				<div class="col-md-6 form-group label-div" style="padding-left:12px; !important;">
					<label >File Color</label>
						<select class="form-control" name="filecolor" style="width:90%; margin:left;">
						<option value="">Select File color</option>
						<option value="A4  Size">Black</option>
						<option value="A4 Size">Green</option>
						<option value="A4 Single">Blue</option>
						<option value="A4 double">Mehroon </option>
					</select>
					</div>
			</div>
			<div class="row">
				<div class="col-md-6 form-group label-div" style="padding-left:12px; !important;">
					<label> Copy</label>
					<input type="number" name="copy" placeholder="Enter No. of Copies" class="form-control" style="width:90%; margin:left;">
				</div>
				<div class="col-md-6 form-group label-div" style="padding-left:12px; !important;">
					<label>Total Price</label>
                    <input type="text" name="totalprice" placeholder="Enter Total Price" class="form-control" style="width:90%; margin:left;">
					</div>
			</div>
				<div class="row">
				    <div class="col-md-6 form-group label-div" >
				        <label> Upload Document</label>
				        <input type="file" name="uploaded_file" id="File">
				        </div>
				    
				    <div class="col-md-6 from--group label-div" style="padding-left:12px; !important;">
				
					<label>Payment Option</label>
					<select class="form-control" name="payment" style="width:90%; margin:left;">
						<option value="">Select Payment Mode</option>
						<option value="Tej">Tej</option>
						<option value="PayTm">Paytm</option>
						<option value="Phone Pe"> Phone Pe</option></option>
					</select>
				</div> 
				</div>
        
			<div class="row" >
				<div class="col-md-12" style="paddin-left:30px; margin-left:20px;">
					<input type="submit" class="btn btn-info btn-lg" name="submit" onClick="myFunction" value="Apply Now">
					<br><br>
				</div>
			</div>
		  </form>
        </div>
       
      </div>
    </div>
  </div>
<script>
function myFunction() {
    var x = document.getElementById("File");
    x.disabled = true;
}
</script>
</body>
</html>
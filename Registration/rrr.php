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

    //if there is post
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
	if (isset($_POST['submit'])) {
		// if there is an attachment
		if(!empty($_FILES['uploadFile']['name'])) {
		$file_name = $_FILES['uploadFile']['name'];
		$file_name = $_FILES['uploadFile']['tmp_name'];
		$file_type = $_FILES['uploadFile']['type'];
		
		$base = basename($file_name);
		$extension = substr($base, strlen($base)-4, strlen($base));
		
		$allowed_extension = array("doc", "pdf", "docx", "zip", "png", "jpeg", "jpg", ".doc", ".pdf", "docx", ".zip", ".png", ".jpeg", ".jpg");
		
		// check that this filetype is allowed 
		if(in_array(extension,$allowed_extension)) {
			
			//mail essentials
			$from = $_POST['email'];
			$to = "amar74.soft@gmail.com";
			$subject = "Bindbay. just fetched an online query for you.";
			$message = "fname";
			
			
			$file = $temp_name;
			$content = chunk_split(base64_encode(file_get_contents($file)));
			$uid = md5(uniqid(time()));
			
			
			// standard mail headers
			
			$header = "From: ".from."\r\n";
			$header .= "Reply-To: ".replyto. "\r\n";
			$header .= "MIME-Version: 1.0\r\n";
			
			// declaring we have multiple kinds of mail
			
				$header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
				$header .= "This is a multi-part message in MIME format. \r\n";
				
				//plain text partt
				
				$header .= "--".$uid."\r\n";
				$header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
				$header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
				$header .= $message."\r\n\r\n";
				
				//file attachment
				$header .= "--".uid."\r\n";
				$header .= "Content-Type: ".$file_type."; name=\"".$file_name."\"\r\n";
				$header .= "Content-Transfer-Encoding: base64\r\n";
				$header .= "Content-Disposition: attachment; filename\"".$file_name."\"\r\n";
				$header .= $content."\r\n\r\n";
				
				// Meassge
				
				if (mail($to, $subject, "", $header)) {
					echo "success";
				} else {
					echo "fail";
				}
				
				exit();
				
		} else {
			echo "file type not allowed";
		}
		
		} else {
			
			echo "no file posted";
		}
	}
	

?>

    <div class="modal-dialog " >
      <div class="modal-content" style="height:auto; background-color: rgba(255, 255, 255, .15);">
        <div class="modal-header" style="    background-color: #cab7b7;">
          <a href="../index.php"><button type="button" class="close" >&times;</button></a>
          <h3 class="modal-title" style="text-align:center;">Send Your File</h3>
          <p class="modal-title" style="text-align:center;"> Hey This is Bindbay, Happy to help you, we provide online printing services only in Greater Noida & Delhi NCR  </p>
        </div>
		
        <div class="modal-body" >
		
          <form class="" id="home_loan" method="post" action="#" enctype="multipart/form-data">
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
						<option value="A4 Size page Single sided">A4 Size page Single sided</option>
						<option value="A4 Size Double sided"> A4 Size Double sided</option>
						<option value="A5 Size page Single sided"> A5 Size page Single sided</option>
						<option value="A5 Size Double sided"> A5 Size Double sided </option>
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
						<option value="Black">Black</option>
						<option value="Green">Green</option>
						<option value="Blue">Blue</option>
						<option value="Mehroon">Mehroon </option>
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
				        <input type="file" name="uploadFile" id="File">
				        </div>
				    
				    <div class="col-md-6 from--group label-div" style="padding-left:12px; !important;">
				
					<label>Payment Option</label>
					<select class="form-control" name="payment" style="width:90%; margin:left;">
						<option value="">Select Payment Mode</option>
						<option value="Tej (9555443344)">Tej (9555443344)</option>
						<option value="PayTm (9555443344)">Paytm (9555443344)</option>
						<option value="Phone Pe (9555443344)"> Phone Pe (9555443344)</option></option>
					</select>
				</div> 
				</div>
        
			<div class="row" >
				<div class="col-md-12" style="paddin-left:30px; margin-left:20px;">
					<input type="submit" class="btn btn-info btn-lg" name="submit" onClick="myFunction" value="Send Mail">
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
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
 
 if (isset($_FILES)&& (bool) $_FILES) {
	
	$allowedExtensions = array("pdf", "doc", "docx");
	$files = array();
	
	foreach ($_FILES as $name => $file) {
		$file_name = $file['uploadFile'];
		$temp_name = $file['upload'];
		$file_type = $file['type'];
		$path_parts = pathinfo($uploadFile);
		$ext = $path_parts['extension'];
		if (!in_array($ext, $allowedExtensions)) {
			die("File $uploadFile has the extensions $ext which is not allowed");
		}
		array_push($files, $file);
	}

 
 
    $to = "amar74.soft@gmail.com";
	$from = $_REQUEST['email'];
    
    $headers = "From: $from"; 
    $subject = "Bindbay. just fetched an online query for you."; 
 
    $fields = array(); 
    $fields{"fname"} = "name";
	$fields{"phone"} = "Phone";
	$fields{"email"} = "email";
	$fields{"address"} = "Address";
	$fields{"city"} = "City";
	$fields{"district"} = "District";
	$fields{"State"} = "State";
	$fields{"pincode"} = "Pin code";
	$fields{"Binding"} = "Binding";
	$fields{"pagetype"} = "Page Type";
	$fields{"pages"} = "Pages";
	$fields{"filecolor"} = "File color";
	$fields{"copy"} = "Copies";
	$fields{"totalprice"} = "Total Price";
	$fileds{"payment"} = "Payment Option";
	$fields{"uploadFile"} = "Uploaded Document";
	
	$body = "Hello Sir,Jarvis this side (your personal virtual assistant). I have just fetched an online query for you, please contact this person. Here are the customer details:\n\n";

$semi_rand .= md5(time());
	$mimme_boundry = "==Multipart_Boundary_x{semi_rand}x";
    $header .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . "boundry=\"{$mime_boundary}\"";
	
	$message = "This is a multi-part message in MIIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7 bit\n\n" . $message ."\n\n";
	$message = "--{$mimme_boundry}\n";
// preparing attachement

	for ($x = 0; $x < count(files); $x++) {
		$file = fopen($files[$x]['tmp_name'], "rb");
		$data = fread($file, filesize($files[$x]['tmp_name']));
		fclose($file);
		$data = chunk_split(base64_encode($data));
		$name = $files[$x]['name'];
		$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
					"Content-Disposition: attachement;\n" . " filename=\"$name\"\n" . 
					"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
		$message .= "--{$mimme_boundry}\n";
	}

	foreach( $fields as $a => $b)
  {   
  $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
 
  if (isset($_POST["submit"])) {

    $send = mail($to, $subject, $body, $headers);
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
		
          <form class="" id="home_loan" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
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
				        <input type="file" name="uploadFile" id="File">
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
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
<!--    $to = "bindbay1@gmail.com"; -->
<?php
 
    $to = "bindbay1@gmail.com";
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
	$fields{"message"} = "Message";
	$fields{"filecolor"} = "File Color";
	
	$body = "Hello Sir,Jarvis this side (your personal virtual assistant). I have just fetched an online query for you, please contact this person. Here are the customer details:\n\n";
	
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
          <a href="../price.php"><button type="button" class="close" >&times;</button></a>
          <h3 class="modal-title" style="text-align:center;">Send Your File</h3>
          <p class="modal-title" style="text-align:center;"> Hey This is Bindbay, Happy to help you, we provide online printing services only in Greater Noida & Delhi NCR  </p>
        </div>
		
        <div class="modal-body" >
		
          <form class="" id="home_loan" method="post" action="#">
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
					<select class="form-control" name="Binding" style="width:90%; margin:left;" readonly >
						<option value="">Select Binding Type</option>
						<option value="None (0)" <?php echo $_POST['binding']==0? "selected" : "";?>>None (Rs. 0.00/-)</option>
						<option value="Hard Binding (Rs.110.0/-)" <?php echo $_POST['binding']==1 ?"selected" : "";?>>Hard Binding (Rs. 110.0/-)</option>
						<option value="Hard Binding With Golden Print (Rs. 150.0/-)" <?php echo $_POST['binding']==2 ?"selected" : "";?>>Hard Binding With Golden Print(Rs. 150.0/-)</option>
						<option value="Soft Cover Binding (Rs. 45.0/-)" <?php echo $_POST['binding']==3 ?"selected" : "";?>>Soft Cover Binding (Rs. 45.0/-)</option>
						<option value="Soft Binding (Rs. 25.0/-) " <?php echo $_POST['binding']==4 ?"selected" : "";?>> Soft Binding (Rs. 25.0/-)</option>
						<option value="Spiral Binding (Rs. 30.0/-)" <?php echo $_POST['binding']==5 ?"selected" : "";?>> Spiral Binding (Rs. 30.0/-)</option>
						<option value="Spiral Binding with cover (Rs. 50.0/-)" <?php echo $_POST['binding']==6 ?"selected" : "";?>> Spiral Binding with cover (Rs. 50.0/-)</option>
					</select>
				</div>
				<div class="col-md-6 form-group label-div" style="padding-left:12px; !important;">
					<label >Page Type</label>
						<select class="form-control" name="pagetype" style="width:90%; margin:left;" readonly >
						<option value="">Page Type</option> 
						<option value="A4 Size page Single sided" <?php echo $_POST['size']==0 && $_POST['side']==0? "selected" : "";?>>A4 Size page Single sided</option>
						<option value="A4 Size Double sided" <?php echo $_POST['size']==0 && $_POST['side']==1? "selected" : "";?>> A4 Size Double sided</option>
						<option value="A5 Size page Single sided" <?php echo $_POST['size']==1 && $_POST['side']==0? "selected" : "";?>> A5 Size page Single sided</option>
						<option value="A5 Size Double sided" <?php echo $_POST['size']==1 && $_POST['side']==1? "selected" : "";?>> A5 Size Double sided </option>
					</select>
					</div>
			</div>
			<div class="row">
				<div class="col-md-6 form-group label-div" style="padding-left:12px; !important;">
					<label> Pages</label>
					<input type="number" <?php echo "value=".$_POST['number'].""?> name="pages" placeholder="Enter No. of pages" class="form-control" style="width:90%; margin:left;" readonly >
				</div>
				<div class="col-md-6 form-group label-div" style="padding-left:12px; !important;">
					<label >File Color</label>
						<select class="form-control" name="filecolor" style="width:90%; margin:left;">
						<option value="">Select File color</option>
						<option value="Black & White"  <?php echo $_POST['size']==0 && $_POST['side']==0? "selected" : "";?>> Black & White</option>
						<option value="Full Color"  <?php echo $_POST['size']==1 && $_POST['side']==1? "selected" : "";?>>Full Color</option>
					</select>
					</div>
			</div>
			<div class="row">
				<div class="col-md-6 form-group label-div" style="padding-left:12px; !important;">
					<label> Copy</label>
					<input type="number" name="copy" <?php echo "value=".$_POST['copies'].""?> placeholder="Enter No. of Copies" class="form-control" style="width:90%; margin:left;" readonly >
				</div>
				<div class="col-md-6 form-group label-div" style="padding-left:12px; !important;">
					<label >File Color</label>
						<select class="form-control" name="filecolor" style="width:90%; margin:left;">
						<option value="">Select File color</option>
						<option value="Black"  <?php echo $_POST['size']==0 && $_POST['side']==0? "selected" : "";?>>Black</option>
						<option value="Green"  <?php echo $_POST['size']==0 && $_POST['side']==1? "selected" : "";?>>Green</option>
						<option value="Blue"  <?php echo $_POST['size']==1 && $_POST['side']==0? "selected" : "";?>>Blue</option>
						<option value="Mehroon"  <?php echo $_POST['size']==1 && $_POST['side']==1? "selected" : "";?>>Mehroon </option>
					</select>
					</div>
				<div class="col-md-6 form-group label-div" style="padding-left:12px; !important;">
					<label>Total Price</label>
                    <input type="text" <?php echo "value=".$_POST['total'].""?> name="totalprice" placeholder="Enter Total Price" class="form-control" style="width:90%; margin:left;" readonly >
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
           <!--  <div class="col-md-12 from--group label-div" style="padding-left:12px; !important;">
                <input type="textarea" value="message" name="message" placeholder="descriptions" class="form-control" style="width:90% height:100% margin:left;" >
            </div> -->
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
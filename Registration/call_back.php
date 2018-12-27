<!DOCTYPE html>
<html lang="en">
<head>
  <title>Success-Zone: Registration Form</title>
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

<div class="container" style="background:url('images/content.jpg') no-repeat; background-size:100% 1000px; width:100%;">
  
    <div class="modal-dialog " >
      <div class="modal-content" style="height:auto;">
        <div class="modal-header">
          <a href="../index.html"><button type="button" class="close" >&times;</button></a>
          <h3 class="modal-title" style="text-align:center;">Call back Request</h3>
        </div>
		
        <div class="modal-body" >
          <form class="" id="home_loan" method="post" action="regdb.php">
			<div class="row">
				<div class="col-md-6 form-group label-div" >
					<label>Name</label>
					<input type="text" name="fname" placeholder="First Name" class="form-control" style="width:90%; margin:left;">
				</div>
				<div class="col-md-6 form-group label-div" style="padding-left:12px; !important;">
					<label>Last Name</label>
					<input type="text" name="lname" placeholder="Last Name" class="form-control" style="width:90%; margin:left;">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 form-group label-div"  >
					<label>Phone Number</label>
					<input type="text" name="phone" placeholder="Your Contact" class="form-control" style="width:90%; margin:left;">
				</div>
				<div class="col-md-6 form-group label-div" style="padding-left:12px; !important;" >
					<label>Address</label>
					<input type="text" name="address" placeholder="Address" class="form-control" style="width:90%; margin:left;">
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-6 form-group label-div" >
					<label>Email</label>
					<input type="email" name="email" placeholder="Email Address" class="form-control" style="width:90%; margin:left;">
				</div>
				<div class="col-md-6 form-group label-div" style="padding-left:12px; !important;">
					<label>Standard</label>
					<select class="form-control" name="stand" style="width:90%; margin:left;">
						<option value="">Select Standard</option>
						<option value="9th Class">9th Class</option>
						<option value="10th Class">10th Class</option>
						<option value="11th Class">11th Class</option>
						<option value="12th Class"> 12th Class</option>
					</select>
				</div>
			</div>
			
			<div class="row" >
				<div class="col-md-12" style="paddin-left:20px;">
					<input type="submit" class="btn btn-info btn-lg" name="submit-form" value="Call Back">
					<br><br>
				</div>
			</div>
		  </form>
        </div>
       
      </div>
    </div>
  </div>

</body>
</html>
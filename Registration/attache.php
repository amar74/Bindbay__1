
<?php
 /* 
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
	
	$body = "Hello Sir,Jarvis this side (your personal virtual assistant). I have just fetched an online query for you, please contact this person. Here are the customer details:\n\n";
	
     foreach( $fields as $a => $b)
  {   
  $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
 
  if (isset($_POST["submit"])) {

    $send = mail($to, $subject, $body, $headers);
  }
 */
//if there is post
	if(isset($_POST) && !empty($_POST)){
		// if there is an attachment
		if(!empty($_FILES['uploadFile']['name'])){
		$file_name = $_FILES['uploadFile']['name'];
		$file_name = $_FILES['uploadFile']['tmp_name'];
		$file_type = $_FILES['uploadFile']['type'];
		
		$base = basename($file_name);
		$extension = substr($base, strlen($base)-4, strlen($base));
		
		$allowed_extennsions = array(".doc",".pdf","docx",".zip",".png");
		
		// check that this filetype is allowed 
		if(in_array(extension,$allowed_extennsions)){
			
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
<?php
$resutls="";
$size=$_POST['size'];
$copies=$_POST['copies'];
$type=$_POST['type'];
$number=$_POST['number'];
$color=$_POST['color'];
$binding=$_POST['binding'];
$side=$_POST['side'];
$bindingA=array("0","110","150","25","45","30","50");
$bind=$bindingA[$binding];
if($side=="0")
{
	if($size=="0")
	{
		if($color=="0")
		{
		$a4baws=array("1","2","3","2");
		$colors=$a4baws[$type];
		}
		else
		{
		$a4cs=array("5","7","8","7");
		$colors=$a4cs[$type];
		}
	}
	else
	{
		if($color=="0")
		{
		$a5baws=array(".75","1","1.50","1");
		$colors=$a5baws[$type];
		}
		else
		{
		$a5cs=array("2.50","3.50","4","3.50");
		$colors=$a5cs[$type];			
		}
	}
}
else
{
	if($size=="0")
	{
		if($color=="0")
		{
		$a4bawd=array(".75",".1.50","2.50","1.50");
		$colors=$a4bawd[$type];
		}
		else
		{
		$a4cd=array("4.50","6","7","6");
		$colors=$a4cd[$type];
		}
	}
	else
	{
		if($color=="0")
		{
		$a5bawd=array(".35",".50",".75",".50");
		$colors=$a5bawd[$type];
		}
		else
		{
		$a5cd=array("2","3","3.50","3");
		$colors=$a5cd[$type];
		}
	}
}
echo "Details: ";
echo "<br>";
echo "No. of Page:  ".$number;
echo "<br>";
echo "No of Copies: ".$copies;
echo "<br>";
echo "Binding Charges:  ".$bind;
echo "<br>";
$result1=$colors*$number;
$results=$result1+$bind;
echo "Total Charge: "  .$results*$copies."  INR";
echo '<input type="hidden" id="total" value="'.$results*$copies.'" name="total">';
?>
<?php 
	$error_message = "";
	$mysqli = new mysqli('localhost','root','','purchase') or die(mysqli_error($mysqli));
	if(isset($_POST['save'])) {
		$name=$_POST['name'];
		$shop=$_POST['shop'];
		$gstnum = $_POST['gstnum'];
		$mblnum = $_POST['mblnum'];
		$address=$_POST['address'];
		$accname=$_POST['accname'];
		$accnumber=$_POST['accnumber'];
		$caccnumber=$_POST['caccnumber'];
		$ifsc=$_POST['ifsc'];

		//Check for Name Pattern
		if(!preg_match('/^[a-z ]+$/i', $name)) {
        	$_SESSION['clientErrName'] = "Name contains special characters";
    		header("Location:index.php" . $error_message);
    		exit;
    	} 

    	//Checking for GST
		if(strlen($gstnum)!=15) {
			$_SESSION['clientErrGST'] = "Incorrect GST";
    		header("Location:index.php" . $error_message);
    		exit;
		}
    	//Check for Mobile Number
		if(strlen($mblnum)!=10 || !preg_match('/^[1-9][0-9]*$/', $mblnum))  {
			$_SESSION['clientErr'] = "Incorrect Mobile";
    		header("Location:index.php" . $error_message);
    		exit;
		}
		//Checking for account name
		if(!preg_match('/^[a-z ]+$/i', $accname)) {
        	$_SESSION['clientErrAName'] = "Name contains special characters";
    		header("Location:index.php" . $error_message);
    		exit;
    	}
    	//Checking for Account Number
    	if(strlen($mblnum)!=10 || !preg_match('/^[1-9][0-9]*$/', $accnumber))  {
			$_SESSION['clientErrAN'] = "Account number contains special chars";
    		header("Location:index.php" . $error_message);
    		exit;
		}
		if($accnumber!=$caccnumber) {
			$_SESSION['clientErrs'] = "Account Numbers do not match";
    		header("Location:index.php" . $error_message);
    		exit;
		}
		$mysqli->query("INSERT INTO data (name,shop_name,address,accname,accnumber,ifsc,gst,mobile) VALUES ('$name','$shop','$address','$accname','$accnumber','$ifsc','$gstnum',
			'$mblnum')") or die($mysqli->error);
	
	}
?>
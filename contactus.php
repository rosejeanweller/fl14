<?php require 'includes/config.php';?>
<?php include 'includes/header.php';?>
		 <h1>CONTACT US</h1>
         <p>Because we care</p>
     
         
<?php
if(isset($_POST['submit']))
{//if there's data, show it
	//echo $_POST['FirstName'];
	
	$message = process_post();
	
	safeEmail('rwelle02@seattlecentral.edu','test subject', $message);
	echo 'Thank you for your email!';	
	
}
else{//show the form
	echo '
	<form action="contactus-BK.php" method="post">
	First Name: <input type="text" name="first_name" />
	<br />
	Email: <input type="text" name="email" />
	<br />
	Comments:<textarea name="comments"></textarea>
	<input type="submit" value="Click Me!" name="submit" />
	</form>
	
	';
}
?>

<?php include 'includes/footer.php';?>
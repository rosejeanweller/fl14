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
	
}else{//show the form
	echo '
	<div align="center"><span class="required">(*required)</span></div>
	<form action="contactus.php" method="post">
    <table border="1" style="border-collapse:collapse" align="center">
			<td align="right"><span class="required">*</span>First Name:</td>
			<td><input type="text" name="first_name" /></td>
		</tr>
		<tr>
        	<td align="right"><span class="required">*</span>Email:</td>
			<td><input type="text" name="email" /></td>
		</tr>
        
		<tr><td align="right">When Do you Where Socks the Most?</td>
			<td>
				<select name="hearaboutus">
					<option value="">Choose How You Heard</option>
					<option value="Phone">To Work</option>
					<option value="Web">To Sleep</option>
					<option value="Magazine">In the Yard</option>
					<option value="Smoke Signal">Skiing</option>
					<option value="Other">Other</option>
				</select>
			</td>
		</tr>
		<tr><td align="right">What Type of Socks are you Interested in?:</td>
			<td>
				<input type="checkbox" name="interested" value="Knee Socks" /> New Website <br />
				<input type="checkbox" name="interested" value="Ankle Socks" /> Website Redesign <br />
				<input type="checkbox" name="interested" value="Wool Socks" /> Special Application <br />
				<input type="checkbox" name="interested" value="Tights" /> Complimentary Lollipops <br />
				<input type="checkbox" name="interested" value="Other" /> Other <br />
			</td>
		</tr>
		<tr>
			<td align="right">Would You Like To Join Our Mailing List?</td>
			<td>
				<input type="radio" name="Join_Mailing_List?" value="Yes" /> Yes <br />
				<input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
			</td>
		</tr>
		<tr><td align="right">Comments:</td>
			<td><textarea name="comments" cols="40" rows="4" wrap="virtual"></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Send to the CLOUD!!!" name="submit"/></td>
		</tr>
    </table>
    </form>
	';
}
?>
             
<?php include 'includes/footer.php';?>
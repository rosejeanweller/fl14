<?php include 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?>

<?php
//customers.php


$sql = 'SELECT * FROM test_Socks';

//---config area ends here-------------------------

echo '
<h2>socks.php</h2><!--improved-customers.php-->
<p>mysqli socks file</p>
<p><img src="images/home.jpg" alt="house" width="300px"></p>
';

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_error()));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error()));
if (mysqli_num_rows($result) > 0)//at least one record!
{//show results
	while ($row = mysqli_fetch_assoc($result))
    {
	   echo "<p>";
	   echo "SockStyle: <b>" . $row['SockStyle'] . "</b><br />";
	   echo "SockColor: <b>" . $row['SockColor'] . "</b><br />";
	   echo "SockBrand: <b>" . $row['SockBrand'] . "</b><br />";
	   echo "</p>";
    }
}else{//no records
	echo '<div align="center">What! No customers?  There must be a mistake!!</div>';
}

@mysqli_free_result($result); #releases web server memory
@mysqli_close($iConn); #close connection to database

/*
//Connect to MySQL, authenticate the MySQL users
$myConn = mysql_connect(DB_HOST,DB_USER,DB_PASS) or die(mysql_error());

//Connect to the Database, verify authorization to this resource
mysql_select_db(DB_NAME,$myConn);


//Select data to be retrieved via SQL statement
//Retrieve data set (result)
$result = mysql_query($sql,$myConn);

//Loop through the data, and insert it into our page
while($row=mysql_fetch_assoc($result))
{ //pull data from array
    echo "FirstName: " . $row['FirstName'] . "<br />";
    echo "LastName: " . $row['LastName'] . "<br />";
    echo "Email: " . $row['Email'] . "<br />";
}


//Disconnect from MySQL, and release resources
@mysql_free_result($result); # releases web server memory
mysql_close($myConn);

Select data to be retrieved via SQL statement
Disconnect from MySQL, and release resources 
?>
*/

include 'includes/footer.php';

?>


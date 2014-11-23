<?php include 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?>

<?php
//customers.php


$sql = 'SELECT * FROM test_Customers';

//---config area ends here-------------------------

echo '
<h2>Customers</h2><!--customers.php-->
<p>Home Sweet Home.</p>
<p><img src="images/home.jpg" alt="house" width="300px"></p>
';


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

include 'includes/footer.php';


?>
*/




Select data to be retrieved via SQL statement


Disconnect from MySQL, and release resources 
*/
?>


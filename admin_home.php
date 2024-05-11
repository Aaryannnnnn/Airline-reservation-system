<html>
<head>
<?php
include "header.php";
?>
</head>
<body >
<?php    include "top.php" ?>
<div>
<?php
/*
on authentic page, only valid users of website can visit
strangers(anonymous) are not allowed
*/
@session_start();
include_once "dbconfigure.php";
$msg="";
if(verifyuser())
{
if(fetchrole()=='Admin')
	{
	$un=fetchusername();
	$msg="Welcome $un , <br /><a 	href='signout.php'>Signout</a>";
	}
	else
	{
header("Location:loginerror.php");
	}
}
else
{
header("Location:loginerror.php");
}
?>



<html >
<head>

</head>
<body>
<?php
echo $msg;

?>
			
				<h2 align = center>Admin Home Page</h2>
				
				
					<p style = "font-size : 30pt">Admin Menu
<ul style = "color : red">
<li><a href = manage-flight.php>Add/Search Flight</a></li>
<li><a href = manage-booking.php>Booking</a></li>
<li><a href = manage-passenger.php>Passengers</a></li>
<li><a href = siteuser.php>Manage Users</a></li>
<ul>
</p>
				
			
			</body>
</html>


</div>
<?php  include "bottom.php "?>
</body>
</html>
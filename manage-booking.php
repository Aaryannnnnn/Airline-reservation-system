<html>
<head>
<?php
include "header.php";
?>
<script type='text/javascript' src='calendarDateInput.js'>
</script>
</head>
<body>
<?php    include "top.php" ?>
<a href = admin_home.php><img src = images/goback.png></a>
<div>


<h2 align = center>Manage Booking</h2>
				
<form method="POST">
<br>
<table border=0 align=center>
<tr>
	<th align=left>Booking ID   :</th>
	<td>
		<input type = text name = b_id>
<tr>
	<th align=left>Booking DATE   :</th>
		<td><script>DateInput('b_datetime', true, 'YYYY-MM-DD')</script>&nbsp;</td>
	</td>
</tr>
<tr>
	<th align=left>Flight No.   :</th>
	<td>
	<input type = text name = flightno>
	</td>
</tr>
<tr>
	<th align=left>From City   :</th>
	<td><select name=from_city>
	<option value='Bhopal' > Bhopal </option><option value='Indore' > Indore </option><option value='Raipur' > Raipur </option><option value='Gwalior' > Gwalior </option><option value='Lucknow' > Lucknow </option><option value='Delhi' > Delhi </option><option value='Mumbai' > Mumbai </option><option value='Trivantpuram' > Trivantpuram </option><option value='Chennai' > Chennai </option><option value='Bangluru' > Bangluru </option><option value='Cochin' > Cochin </option><option value='Nagpur' > Nagpur </option>
	</select></td>
	<th align=left>To City   :</th>
	<td>
	<select name =to_city>
	<option value='Bhopal' > Bhopal </option><option value='Indore' > Indore </option><option value='Raipur' > Raipur </option><option value='Gwalior' > Gwalior </option><option value='Lucknow' > Lucknow </option><option value='Delhi' > Delhi </option><option value='Mumbai' > Mumbai </option><option value='Trivantpuram' > Trivantpuram </option><option value='Chennai' > Chennai </option><option value='Bangluru' > Bangluru </option><option value='Cochin' > Cochin </option><option value='Nagpur' > Nagpur </option>
	</select>
	
</tr>
<tr>
	<th align=left>Total Amount   :</th>
	<td colspan=4><input type=text name=total_amt size=50></td>
</tr>
<tr>
	<th align=left>Transaction ID   :</th>
	<td colspan=4><input type="text" name="transaction_id" size=50></td>
</tr>
<tr>
	<th align=left>UserName   :</th>
	<td colspan=4><input type=text name=username size=50></td>
</tr>

<tr>
	<td colspan=2 align=center><input type=submit name=save value="Save">
	<input type=submit name=modify value="Modify">
	<input type=submit name=remove value="Cancel Booking">
	<input type=submit name=search value="Search">
	</td>
</tr>
</table>
</form>	


<?php
include "dbconfigure.php";
if(isset($_POST['save']))
{
//$b_id = $_POST['b_id'];
$b_datetime = $_POST['b_datetime'];
$flightno = $_POST['flightno'];
$from_city = $_POST['from_city'];
$to_city = $_POST['to_city'];
$total_amt = $_POST['total_amt'];
$transaction_id = $_POST['transaction_id'];
$username = $_POST['username'];


$query = "insert into booking values('','$b_datetime','$flightno','$from_city','$to_city',$total_amt,'$transaction_id','$username')";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
{
$b_id = $_POST['b_id'];
$b_datetime = $_POST['b_datetime'];
$flightno = $_POST['flightno'];
$from_city = $_POST['from_city'];
$to_city = $_POST['to_city'];
$total_amt = $_POST['total_amt'];
$transaction_id = $_POST['transaction_id'];
$username = $_POST['username'];

$query = "update booking set b_datetime='$b_datetime',flightno='$flightno',from_city='$from_city',to_city='$to_city',total_amt=$total_amt,transaction_id='$transaction_id',username='$username' where b_id=$b_id";
$n = my_iud($query);
echo "$n record modified"; 
}

if(isset($_POST['remove']))
{
$b_id = $_POST['b_id'];
$b_datetime = $_POST['b_datetime'];
$flightno = $_POST['flightno'];
$from_city = $_POST['from_city'];
$to_city = $_POST['to_city'];
$total_amt = $_POST['total_amt'];
$transaction_id = $_POST['transaction_id'];
$username = $_POST['username'];

$query = "delete from booking where b_id=$b_id";
$n = my_iud($query);
echo "$n record removed"; 
}

if(isset($_POST['search']))
{
//$b_id = $_POST['b_id'];
$b_datetime = $_POST['b_datetime'];
$flightno = $_POST['flightno'];
$from_city = $_POST['from_city'];
$to_city = $_POST['to_city'];
$total_amt = $_POST['total_amt'];
$transaction_id = $_POST['transaction_id'];
$username = $_POST['username'];

$query = "select * from booking";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>Booking ID</td>";
echo "<td>Booking Date</td>";
echo "<td>Flight No.</td>";
echo "<td>From City</td>";
echo "<td>To City</td>";
echo "<td>Total Amount</td>";
echo "<td>Transaction ID</td>";
echo "<td>UserName</td>";
echo "</tr>";
while($column=mysql_fetch_array($rs))
{

echo "<tr>";
echo "<td>$column[0]</td>";
echo "<td>$column[1]</td>";
echo "<td>$column[2]</td>";
echo "<td>$column[3]</td>";
echo "<td>$column[4]</td>";
echo "<td>$column[5]</td>";
echo "<td>$column[6]</td>";
echo "<td>$column[7]</td>";

echo "</tr>";
}
echo "</table>";
}
?>


</div>
<?php  include "bottom.php "?>
</body>
</html>
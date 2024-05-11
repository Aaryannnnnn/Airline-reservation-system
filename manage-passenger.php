<html>
<head>
<?php
include "header.php";
?>
</head>
<body>
<?php    include "top.php" ?>
<a href = admin_home.php><img src = images/goback.png></a>
<div>


<h2 align = center>Manage Passenger</h2>
				
<form method="POST">
<table border=0 align=center  width=500>
<tr>
<td colspan=3 align=center><h1>PASS_DATA </h1></td></tr>
<tr>
<td width=200>Enter passenger id</td>
<TD><input type=text name=pass_id size=30 />&nbsp;</td>
</tr>
<tr>
<td width=200>Enter Booking id</td>
<TD><input type=text name=book_id  size=30 />&nbsp;</td>
</tr>
<tr>
<td width=200>Enter name </td>
<TD><input type=text name=name size=30 />&nbsp;</td>
</tr>
<tr>
<td width=200>Enter age</td>
<TD><input type=text name=age size=30 />&nbsp;</td>
</tr>
<tr>
<td width=200>Select Gender</td>
<TD><select name='gender'><option value='male'> male </option><option value='female' > female </option></select>&nbsp;</td>
</tr>
<tr>
<td width=200>Enter Fare</td>
<TD><input type=text name=fare size=30 />&nbsp;</td>
</tr>
<tr>
<td width=200>Select Class</td>
<TD><select name='class'><option value='Economy' > Economy </option><option value=' Comfort' >  Comfort </option></select>&nbsp;</td>
</tr>
<tr>
<td width=200>Select Status</td>
<TD><select name='f_status'><option value='Confirmed' > Confirmed </option><option value='Waiting' > Waiting </option></select>&nbsp;</td>
</tr>
<tr>
<td align=center ><input type=reset name=reset value='Reset' style='width:75px;' /></td>
<td align=center>
<input type=submit name=save value='Save'  style='width:75px;' /><br/>
</td>
<td align=center>
<input type=submit name=search value='Search' style='width:75px;'  /><br/>
</td>
</tr>
<tr>
<td colspan='3'>&nbsp;</td>
</tr>
<tr>
<td align=center>
<input type=submit name=modify value='Modify' style='width:75px;' /><br/>
</td>
<td align=center>
<input type=submit name=remove value='Remove' style='width:75px;'><br/>
</td>
</tr>
</table>
</form>	


<?php
include "dbconfigure.php";
if(isset($_POST['save']))
{
//$pass_id = $_POST['pass_id'];
$book_id = $_POST['book_id'];
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$fare = $_POST['fare'];
$class = $_POST['class'];
$f_status = $_POST['f_status'];

$query = "insert into pass_data values('',$book_id,'$name',$age,'$gender',$fare,'$class','$f_status')";
$n = my_iud($query);
echo "$n record saved"; 
}

if(isset($_POST['modify']))
{
$pass_id = $_POST['pass_id'];
$book_id = $_POST['book_id'];
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$fare = $_POST['fare'];
$class = $_POST['class'];
$f_status = $_POST['f_status'];

$query = "update pass_data set book_id='$book_id',name='$name',age='$age',gender='$gender',fare='$fare',class='$class',f_status='$f_status' where pass_id=$pass_id";
$n = my_iud($query);
echo "$n record modified"; 
}

if(isset($_POST['remove']))
{
$pass_id = $_POST['pass_id'];
$book_id = $_POST['book_id'];
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$fare = $_POST['fare'];
$class = $_POST['class'];
$f_status = $_POST['f_status'];

$query = "delete from pass_data where pass_id=$pass_id";
$n = my_iud($query);
echo "$n record removed"; 
}

if(isset($_POST['search']))
{


$query = "select * from pass_data";
$rs = my_select($query);
$n = mysql_num_rows($rs);
echo "<table align = center border = 1>";
echo "<tr>";
echo "<td>Passenger ID</td>";
echo "<td>Booking No.</td>";
echo "<td>Name</td>";
echo "<td>Age</td>";
echo "<td>Gender</td>";
echo "<td>Fare</td>";
echo "<td>Class</td>";
echo "<td>Status</td>";
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
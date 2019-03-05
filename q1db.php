<?php
//include("header.php");


$name=$_POST['name'];
$usn=$_POST['cno'];
$sem=$_POST['credit'];*/
//$age=$_POST['date'];
//$sex=$_POST['time'];
//$branch=$_POST['phno'];
//$pno=$_POST['email'];
//$email=$_POST['info'];
//$cname=$_POST['cname'];

	$con=mysql_connect("localhost","root","");
	mysql_select_db("student",$con);
	
	/*if(mysql_query("CREATE DATABASE student",$con))
echo"database created";
else
echo"database not created".mysql_error();


	mysql_select_db("student",$con);

	$query1="CREATE TABLE course(cname varchar(20) ,cnum varchar(20) primary key,credit varchar(5))";
	$con1=mysql_query($query1);
if($con1)
echo"table created";
else
echo"table not created";*/

	

	/*$qu2="INSERT INTO  course VALUES('$name','$usn','$sem')";
	$con2=mysql_query($qu2);

	if($con2)
echo"u are registered";
else
echo"u  are not registreed something has gone wrong pleae check it";*/
	$query3=("SELECT * FROM course");
	$con3=mysql_query($query3);
/*if($con3)
    echo"hiiii";
else
    echo"hhhhhhhh";*/
    echo '<table border="1">
    <tr>
    <th> C_NAME</th>
    <th> C_NUM</th>
    <th> Credit</th>
      
    </tr>';
while($row=mysql_fetch_array($con3))
{ echo '
<tr>
<td>'.$row['cname'].'</td>
<td>'.$row['cnum'].'</td>
<td>'.$row['credit'].'</td>

</tr>';

    }
echo'
</table>';
	
/*$query3="SELECT * FROM event";
	$con3=mysql_query($query3);
while($row=mysql_fetch_array($con3))
{
echo "$row[ev_name]";
echo "$row[ev_num]";
    echo "$row[ev_loc]";
    echo "$row[date]";
    echo "$row[time]";
    echo "$row[evinfo]";
    echo "$row[pno]";
   echo "$row[email]";
}
//$row=mysql_fetch_array($con3) or die(mysql_error());
//echo "error";

*/	
	mysql_close();
?>
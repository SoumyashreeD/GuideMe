
<?php
//include("header.php");
/*

$name=$_POST['name'];
$usn=$_POST['cno'];
$sem=$_POST['credit'];*/
//$age=$_POST['date'];
//$sex=$_POST['time'];
//$branch=$_POST['phno'];
//$pno=$_POST['email'];
    
    session_start();
    //post variable was $_POST['name']
    //session_register('name');

	//session_register('Email');

	 

	//finally, let's store our posted values in the session variables

	//$_SESSION['name'] = $_POST['name'];

	
    //post variable was $_POST['age']
    

//$cname=$_POST['cname'];
      $m1=$_POST['sm1'];
       $m2=$_POST['sm2'];
       $m3=$_POST['sm3'];
       $m4=$_POST['sm4'];
       $m5=$_POST['sm5'];
       $m6=$_POST['sm6'];
       $m7=$_POST['sm7'];
       $m8=$_POST['sm8'];
       $m9=$_POST['sm9'];
$m10=$_POST['sm10'];
$m11=$_POST['sm11'];
$m12=$_POST['sm12'];
$m13=$_POST['sm13'];
$m14=$_POST['sm14'];
$m15=$_POST['sm15'];
$m16=$_POST['sm16'];
$m17=$_POST['sm17'];
$m18=$_POST['sm18'];



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

//UPDATE `members` SET `contact_number` = '0759 253 542' WHERE `membership_number` = 1;
$member = "-1";
if (isset($_SESSION['Email'])) {
  $member = $_SESSION['Email'];

}


	$qu2="UPDATE marks1 SET sm1='$m1' WHERE q_no='1.A)' AND Sid='CS51' AND Email='$member'";
	$con2=mysql_query($qu2);
     $qu3="UPDATE marks1 SET sm1='$m2' WHERE q_no='1.B)' AND Sid='CS51' AND Email='$member'";
	$con3=mysql_query($qu3);

      $qu4="UPDATE marks1 SET sm1='$m3' WHERE q_no='1.C)' AND Sid='CS51' AND Email='$member'";
	$con4=mysql_query($qu4);

      $qu5="UPDATE marks1 SET sm1='$m4' WHERE q_no='2.A)' AND Sid='CS51' AND Email='$member'";
	$con5=mysql_query($qu5);

      $qu6="UPDATE marks1 SET sm1='$m5' WHERE q_no='2.B)' AND Sid='CS51' AND Email='$member'";
	$con6=mysql_query($qu6);

      $qu7="UPDATE marks1 SET sm1='$m6' WHERE q_no='2.C)' AND Sid='CS51' AND Email='$member'";
	$con7=mysql_query($qu7);

      $qu8="UPDATE marks1 SET sm1='$m7' WHERE q_no='3.A)' AND Sid='CS51' AND Email='$member'";
	$con8=mysql_query($qu8);

      $qu9="UPDATE marks1 SET sm1='$m8' WHERE q_no='3.B)' AND Sid='CS51' AND Email='$member'";
	$con9=mysql_query($qu9);

      $qu10="UPDATE marks1 SET sm1='$m9' WHERE q_no='3.C)' AND Sid='CS51' AND Email='$member'";
	$con10=mysql_query($qu10);
$qu12="UPDATE marks1 SET sm2='$m10' WHERE q_no='1.A)' AND Sid='CS51' AND Email='$member'";
	$con12=mysql_query($qu12);
     $qu13="UPDATE marks1 SET sm2='$m11' WHERE q_no='1.B)' AND Sid='CS51' AND Email='$member'";
	$con13=mysql_query($qu13);

      $qu14="UPDATE marks1 SET sm2='$m12' WHERE q_no='1.C)' AND Sid='CS51' AND Email='$member'";
	$con14=mysql_query($qu14);

      $qu15="UPDATE marks1 SET sm2='$m13' WHERE q_no='2.A)' AND Sid='CS51' AND Email='$member'";
	$con15=mysql_query($qu15);

      $qu16="UPDATE marks1 SET sm2='$m14' WHERE q_no='2.B)'AND Sid='CS51' AND Email='$member'";
	$con16=mysql_query($qu16);

      $qu17="UPDATE marks1 SET sm2='$m15' WHERE q_no='2.C)' AND Sid='CS51' AND Email='$member'";
	$con17=mysql_query($qu17);

      $qu18="UPDATE marks1 SET sm2='$m16' WHERE q_no='3.A)' AND Sid='CS51' AND Email='$member'";
	$con18=mysql_query($qu18);

      $qu19="UPDATE marks1 SET sm2='$m17' WHERE q_no='3.B)' AND Sid='CS51' AND Email='$member'";
	$con19=mysql_query($qu19);

      $qu20="UPDATE marks1 SET sm2='$m18' WHERE q_no='3.C)' AND Sid='CS51' AND Email='$member'";
	$con20=mysql_query($qu20);


	if($con20)
echo"marks1 updated successfully";
else
echo"Try again";
	//$query3=("SELECT * FROM course");
	//$con3=mysql_query($query3);
/*if($con3)
    echo"hiiii";
else
    echo"hhhhhhhh";*/
    /*echo '<table border="1">
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
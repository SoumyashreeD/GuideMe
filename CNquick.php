<!DOCTYPE html>
<html lang="en">
    <style>
            body {
        background-image: url("hourglass.jpg");
                 height=100%;
              width=100%;
min-width: 1024px;
  /* Center and scale the image nicely */

  background-repeat: no-repeat;
              background-size:cover;
 

    }
        </style>



</html>

<?php
session_start();
//include("heade
$con=mysql_connect("localhost","root","");
	mysql_select_db("student",$con);

	//$con=mysql_connect("localhost","root","");
	//mysql_select_db("student",$con);
//UPDATE `members` SET `contact_number` = '0759 253 542' WHERE `membership_number` = 1;
$member = "-1";
if (isset($_SESSION['Email'])) {
  $member = $_SESSION['Email'];

}

	$query3=("SELECT topic1 from internals i natural join marks1 as m where sm1<=i.marks1/2 and sm1>=0 and Email='$member' and Sid='CS53'");
	$con3=mysql_query($query3);
$query4=("SELECT topic2 from internals i natural join marks1 as m where sm2<=i.marks2/2 and sm2>=0 and Email='$member' and Sid='CS53'");
	$con4=mysql_query($query4);
    //if($con3) and
    //{
    //while($row=mysql_fetch_array($con3))
    //echo "$row[topic1]";
    
/*if($con3)
    echo"hiiii";
else
    echo"hhhhhhhh";*/
    echo '<table border="1">
    <tr>
    <th> TOPICS</th>
    
    
      
    </tr>';
while($row=mysql_fetch_array($con3))
{ echo '
<tr>
<td>'.$row['topic1'].'</td>



</tr>';

    }
while($row=mysql_fetch_array($con4))
{ echo '
<tr>
<td>'.$row['topic2'].'</td>



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
`
*/	
	mysql_close();
?>
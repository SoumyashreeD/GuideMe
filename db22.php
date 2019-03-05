<?php
//$user=$_POST['usn'];

session_start();



$pass=$_POST['Password'];
//$gen=$_POST['phone'];
$email=$_POST['Email'];

//session_register('name');

//session_register('email_address');

	 

	//finally, let's store our posted values in the session variables

	//$_SESSION['name'] = $_POST['name'];

	$_SESSION['Email'] = $_POST['Email'];

	$con=mysql_connect("localhost","root","");
	
	
	/*if(mysql_query("CREATE DATABASE register",$con))
echo"database created";
else
echo"database not created".mysql_error();
*/

	
	mysql_select_db("student",$con);
	
	/*$query1="CREATE TABLE reg(username varchar(20),passcode varchar(20),gender char(1),email varchar(20))";
   	$con1=mysql_query($query1);
	
	
if($con1)
echo"table created";
else
echo"table not created";
*/
	

	$qu2="INSERT INTO register VALUES('$email','$pass')";

	$con2=mysql_query($qu2);
$sql="INSERT INTO login VALUES('$email','$pass')";


  
    $result=mysql_query($sql); 

$sql1="INSERT INTO enroll VALUES('$email','CS51')";
$result1=mysql_query($sql1); 
$sql2="INSERT INTO enroll VALUES('$email','CS52')";
$result2=mysql_query($sql2); 
$sql3="INSERT INTO enroll VALUES('$email','CS53')";
$result3=mysql_query($sql3); 
$sql4="INSERT INTO enroll VALUES('$email','CS54')";
$result4=mysql_query($sql4); 
$sql5="INSERT INTO enroll VALUES('$email','CS55')";
$result5=mysql_query($sql5); 
$sql6="INSERT INTO enroll VALUES('$email','CSE01')";
$result6=mysql_query($sql6); 
$sql11="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS51','1.A)')";
$result11=mysql_query($sql11);
$sql112="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS51','1.B)')";
$result112=mysql_query($sql112); 
$sql113="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS51','1.C)')";
$result113=mysql_query($sql113); 
$sql114="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS51','2.A)')";
$result114=mysql_query($sql114); 
$sql115="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS51','2.B)')";
$result115=mysql_query($sql115); 
$sql116="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS51','2.C)')";
$result116=mysql_query($sql116); 
$sql117="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS51','3.A)')";
$result117=mysql_query($sql117); 
$sql118="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS51','3.B)')";
$result118=mysql_query($sql118); 
$sql119="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS51','3.C)')";
$result119=mysql_query($sql119); 

$sql55="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS52','1.A)')";
$result55=mysql_query($sql55);
$sql52="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS52','1.B)')";
$result52=mysql_query($sql52); 
$sql53="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS52','1.C)')";
$result53=mysql_query($sql53); 
$sql54="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS52','2.A)')";
$result54=mysql_query($sql54); 
$sql555="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS52','2.B)')";
$result555=mysql_query($sql555); 
//$sql116="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS51','2.C)')";
//$result116=mysql_query($sql116); 
$sql57="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS52','3.A)')";
$result57=mysql_query($sql57); 
$sql58="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS52','3.B)')";
$result58=mysql_query($sql58); 
$sql59="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS52','3.C)')";
$result59=mysql_query($sql59);
//$sql12="INSERT INTO marks1(Email,Sid) VALUES('$email','CS52')";
//$result12=mysql_query($sql12); 
//$sql13="INSERT INTO marks1(Email,Sid) VALUES('$email','CS53')";
//$result13=mysql_query($sql13); 

$sql99="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS53','1.A)')";
$result99=mysql_query($sql99);
$sql98="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS53','1.B)')";
$result98=mysql_query($sql98); 
$sql97="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS53','1.C)')";
$result97=mysql_query($sql97); 
$sql96="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS53','2.A)')";
$result96=mysql_query($sql96); 
$sql95="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS53','2.B)')";
$result95=mysql_query($sql95); 
$sql94="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS53','2.C)')";
$result94=mysql_query($sql94); 
$sql93="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS53','3.A)')";
$result93=mysql_query($sql93); 
$sql92="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS53','3.B)')";
$result92=mysql_query($sql92); 
$sql91="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS53','3.C)')";
$result91=mysql_query($sql91);
//$sql14="INSERT INTO marks1(Email,Sid) VALUES('$email','CS54')";
//$result14=mysql_query($sql14); 
//$sql15="INSERT INTO marks1(Email,Sid) VALUES('$email','CS55')";
//$result15=mysql_query($sql15); 
//$sql16="INSERT INTO marks1(Email,Sid) VALUES('$email','CSE01')";
//$result16=mysql_query($sql16); 


$sql81="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS54','1.A)')";
$result81=mysql_query($sql81);
$sql82="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS54','1.B)')";
$result82=mysql_query($sql82); 
$sql83="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS54','1.C)')";
$result83=mysql_query($sql83); 
$sql84="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS54','2.A)')";
$result84=mysql_query($sql84); 
$sql85="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS54','2.B)')";
$result85=mysql_query($sql85); 
$sql86="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS54','2.C)')";
$result86=mysql_query($sql86); 
$sql87="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS54','3.A)')";
$result87=mysql_query($sql87); 
$sql88="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS54','3.B)')";
$result88=mysql_query($sql88); 
$sql89="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS54','3.C)')";
$result89=mysql_query($sql89);

$sql71="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS55','1.A)')";
$result71=mysql_query($sql71);
$sql72="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS55','1.B)')";
$result72=mysql_query($sql72); 
$sql73="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS55','1.C)')";
$result73=mysql_query($sql73); 
$sql74="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS55','2.A)')";
$result74=mysql_query($sql74); 
$sql75="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS55','2.B)')";
$result75=mysql_query($sql75); 
$sql76="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS55','2.C)')";
$result76=mysql_query($sql76); 
$sql77="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS55','3.A)')";
$result77=mysql_query($sql77); 
$sql78="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS55','3.B)')";
$result78=mysql_query($sql78); 
$sql79="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CS55','3.C)')";
$result79=mysql_query($sql79);
 

$sql61="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CSE01','1.A)')";
$result61=mysql_query($sql61);
$sql62="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CSE01','1.B)')";
$result62=mysql_query($sql62); 
$sql63="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CSE01','1.C)')";
$result63=mysql_query($sql63); 
$sql64="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CSE01','2.A)')";
$result64=mysql_query($sql64); 
$sql65="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CSE01','2.B)')";
$result65=mysql_query($sql65); 
$sql66="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CSE01','2.C)')";
$result66=mysql_query($sql66); 
$sql67="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CSE01','3.A)')";
$result67=mysql_query($sql67); 
$sql68="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CSE01','3.B)')";
$result68=mysql_query($sql68); 
$sql69="INSERT INTO marks1(Email,Sid,q_no) VALUES('$email','CSE01','3.C)')";
$result69=mysql_query($sql69);

	if($result)
echo '<script>alert("Thank you for Register");
  
window.location.href="admin.php";  //$redirect
      </script>';
/*$qu3="INSERT INTO  log VALUES('$name','$user')";
$con2=mysql_query($qu3);*/
	else
echo'<script>alert("Error in Register");
      
      window.location.href="registerccc.php";  //$redirect
      </script>';

	mysql_close();
?>

<!DOCTYPE html>

<html lang="en">
    <style>
            body {
        background-image: url("login and reg bg.png");
                 height: 100%;
                width:100%;
                min-width: 1024px;

  /* Center and scale the image nicely */

  background-repeat: no-repeat;
  background-size: cover;

    }
        </style>
        

<!-- Mirrored from brandio.io/envato/iofrm/html/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Dec 2018 16:58:19 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme2.css">
</head>
<body>
    <!--
    <form action"#" method="">
         <a href="front1.php"> list</a>
    <div class="form-body">
        <div class="website-logo">
   
        </div> -->
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="page-links">
                            
                           <li> <a href="registerccc.php"><font size="+2" color="white" face="Calibri"><b>REGISTER</b></font></a>
                        </div>
                        <form action="" method="POST">
                            <input class="form-control" type="text" name="Email" placeholder="EMAIL" required>
                            <input class="form-control" type="password" name="Password" placeholder="PASSWORD" required>
                            
                            
                            <div class="form-button">
                                <input type="submit" value="Login" name="submit" /> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['Email']) && !empty($_POST['Password'])) {  
    $email=$_POST['Email'];  
    $pass=$_POST['Password'];  
  
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('student') or die("cannot select DB");  
  
    $query=mysql_query(" SELECT * FROM login WHERE Email='$email' AND Password='$pass' ");  
    $numrows=mysql_num_rows($query);
//	$query1=mysql_query("SELECT * FROM reg WHERE email='admin@gmail.com'");
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbusername=$row['Email'];  
    $dbpassword=$row['Password'];  
    }  
	
/*	 while($row=mysql_fetch_assoc($query1))  
    {  
    $dbusername1=$row['email'];  
    $dbpassword1=$row['password'];  
    }  

	  if($email == $dbusername1 && $pass == $dbpassword1)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser  
    //header("Location: customer.php");  
	
     echo '<script>alert("Thank you for Login");
      
      window.location.href="front1.php";  //$redirect
      </script>';
	} */ 
    
  
    if($email == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['Email']=$email;  
  
    /* Redirect browser */  
    //header("Location: customer.php");  
	//$sql="INSERT INTO login(username,password) VALUES('$user','$pass')";  
  
    //$result=mysql_query($sql);  
     echo '<script>alert("Thank you for Login");
      
      window.location.href="front1.php";  //$redirect
      </script>';
	}  
    } 
    else 
	{  
   echo '<script>alert("Database error")</script>';
      echo '<script>window.open("admin.php","_self")</script>';
    }  
  
} 
    else {  
    echo "All fields are required!";  
}  
}  
?>  
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
    </form>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Dec 2018 16:58:26 GMT -->
</html>
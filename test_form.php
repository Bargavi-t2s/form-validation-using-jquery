</!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
form submitted
<?php
include ("test_bar_config.php");
session_start();
$store="";
if(isset($_POST['submit']))
{ echo "<h1>true<h1>";
	$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$em=$_POST['email'];
$age=$_POST['age'];
$nat=$_POST['r'];
echo '<h3>Your name is ' . $lastname .' ' . $firstname . '</h3>';
echo '<h3>Your emai is ' .$em. '</h3>';
echo '<h3>Your age is ' .$age. '</h3>';
echo '<h3>Your nationality is '. $nat. '</h3>';
	$firstname = mysqli_real_escape_string($db, $_POST['fname']);
  	$lastname = mysqli_real_escape_string($db, $_POST['lname']);
   	$email = mysqli_real_escape_string($db, $_POST['email']);
   	$age= mysqli_real_escape_string($db, $_POST['age']);
   	$nation = mysqli_real_escape_string($db, $_POST['r']);
       
 $store="INSERT INTO `formtab` (`fname`, `lname`, `email`, `age`, `nationality`) VALUES ('$firstname','$lastname','$email','$age','$nation')";
 //$update="UPDATE `team` SET playername1='bhuvi' WHERE captainname='dhoni' ";

 if(mysqli_query($db,$store))
 { echo "query executed";
     
   }
   else
   {
      echo" <br>not stored ";   }

//if(mysqli_query($db,$update))
 //{ echo "update query executed";
     
   //}
  // else
   //{
     // echo" <br> update not stored ";   }
//}
}
?>
</body>
</html>
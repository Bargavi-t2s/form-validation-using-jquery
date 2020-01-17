 
<?php
 $db_name="bartestdb"; // database name
   $db_user="homestead"; // database username
   $db_pass="secret"; // database password
   $db_host="localhost"; // 
   $error="";
   $db="";
   $db=mysqli_connect("$db_host","$db_user","$db_pass","$db_name");
   if (!$db)
   {
   echo "Fail!";
   }
   else 
   {
   echo "Success!";
   }
   ?>
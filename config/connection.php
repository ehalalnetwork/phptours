<?php
$googleapikey = "";

$server = "localhost";  // server name of the database
$database = "";     // database name
$username = "";     // username of the database
$password = "";  // password of the  database

//connect the database server
 $connection = mysql_connect($server,$username,$password);
 if(!$connection){
    die("database connection failed ".mysql_error());
 }
// else
  //  echo "connection successfully";
 // if connection successful then connect the selected database
 $db_select = mysql_select_db($database,$connection);
 if(!$db_select){
    die("database selection failed ".mysql_error()); 
 }
 
   
 
?>

 
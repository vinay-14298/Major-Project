<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'testdb.ccknqz3pruo1.us-east-2.rds.amazonaws.com');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'VinayVel11');
define('DB_NAME', 'demo');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
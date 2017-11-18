<?php

$dbname = 'User';
$dbuser = 'root';
$dbpass = 'root';
$dbhost = 'localhost';
$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");

echo "Win" ;

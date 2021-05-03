<?php
session_start();
$host = "127.0.0.1:3307"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "dbstudies"; /* Database name */
$dbconn =  mysqli_connect($host, $user, $password,$dbname);

// Check connection
if (!$dbconn) {
  die("Connection failed: " . mysqli_connect_error());
}
<?php
session_start();
$host = "localhost"; /* Host name */
$user = "postgres"; /* User */
$password = "admin"; /* Password */
$port="5432";
$dbname = "webusers"; /* Database name */
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);

// Check connection
if (!$dbconn) {
  die("Connection failed: ");
}
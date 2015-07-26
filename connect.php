<?php 
//error_reporting(E_ALL);
$db = new mysqli('127.0.0.1', 'root', '', 'mysqli');

if ($db->connect_errno) {
	echo $db->connect_error;
}
<?php 
require 'connect.php';

if ($update = $db->query("UPDATE people SET created = now()")) {
	echo $db->affected_rows;
}
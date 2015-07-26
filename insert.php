<?php 
require 'connect.php';

if ($insert = $db->query("INSERT INTO people (first_name, last_name, bio, created) VALUES('Alex', 'Bentaj', 'im a web developer', now())")) {
	echo $db->affected_rows;
}	
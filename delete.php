<?php 
require 'connect.php';

if ($update = $db->query("DELETE FROM people WHERE id = 2")) {
	echo $db->affected_rows;
}
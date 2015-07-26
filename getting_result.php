<?php 
require 'connect.php';

$result = $db->query("SELECT * FROM people") or die($db->error);

if ($result->num_rows) {
	while ($row = $result->fetch_assoc()) {
		echo $row['first_name'];
		echo "<br>";
	}
}
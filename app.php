<?php 

require "connect.php";
require "security.php";

$records = array();
if ($results = $db->query("SELECT * FROM people")) {
	if ($results->num_rows) {
		while ($row = $results->fetch_object()) {
		$records[] = $row;
		}
		$results->free();
	}
}

?>

<html>
	<head>
		<title>People</title>
	</head>
	<body>
		<header>
			<h3>People</h3>
		</header>
		<?php 
if (!count($records)) {
	echo "No records";
}else{
		 ?>
		<table>
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Bio</th>
					<th>Created</th>
				</tr>
			</thead>
			<tbody>
				<?php 
foreach ($records as $r) {
	

				 ?>
				<tr>
					<td><?php echo escape($r->first_name); ?></td>
					<td><?php echo escape($r->last_name); ?></td>
					<td><?php echo escape($r->bio); ?></td>
					<td><?php echo escape($r->created); ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<?php } ?>
		<hr>

	</body>
</html>
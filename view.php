<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/view.css">
	<title>Assignment 1</title>
</head>

<body>

	<div class="container">
		<div class="row">
			<?php
			include_once 'crud.php';
			$crud = new crud();
			$query = 'SELECT * FROM Assignment1';
			$result = $crud->getData($query);
			?>
			<table class="table">
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Address</th>
					<th>Mobile</th>
					<th>Email</th>
					<th>Payment</th>
				</tr>
				<?php

				foreach ($result as $key => $res) {
					echo "<tr>";
					echo "<td>" . $res['fname'] . "</td>";
					echo "<td>" . $res['lname'] . "</td>";
					echo "<td>" . $res['address'] . "</td>";
					echo "<td>" . $res['mobile'] . "</td>";
					echo "<td>" . $res['email'] . "</td>";
					echo "<td>" . $res['payment'] . "</td>";
					echo "</tr>";
				}
				?>

			</table>
		</div>
	</div>

</body>

</html>
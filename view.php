<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
</head>
<body>

	<div class="container">
		<div class="row">
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
				while ($r = mysqli_fetch_assoc($res)) {
				?>
					<tr>
						<td><?php echo $r['fname'] . " " . $r['lname']; ?> </td>
						<td><?php echo $r['address']; ?></td>
						<td><?php echo $r['mobile']; ?></td>
						<td><?php echo $r['email']; ?></td>
						<td><?php echo $r['payment']; ?></td>
					</tr>
				<?php
				}
				?>
			</table>
		</div>
	</div>

</body>
</html>
<table cellpadding="6">
	<tr>
		<th>#</th>
		<th>USERNAME</th>
		<th>PASSWORD</th>
	</tr>
	<?php foreach($users as $user): ?>
		<tr>
			<td><?php echo $user[0]; ?></td>
			<td><?php echo $user[1]; ?></td>
			<td><?php echo $user[2]; ?></td>
		</tr>
	<?php endforeach; ?>
</table>

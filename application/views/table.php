<!DOCTYPE html>
<html>
<head>
	<title>TABLE</title>
</head>
<body>

<table border="1">
	<thead>
		<tr>
			<td>Field</td>
			<td>Type / Length</td>
			<td>Key</td>
			<td>Keterangan</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($tabel as $key) {
			if ($key->COLUMN_KEY=='PRI') {
				$pri = "Primary Key";
			}else { $pri = ""; }
			
			echo "
				<tr>
					<td>$key->COLUMN_NAME</td>
					<td>$key->COLUMN_TYPE</td>
					<td>$pri</td>
					<td>$key->EXTRA</td>
				</tr>
			";
		}?>
	</tbody>
</table>

</body>
</html>
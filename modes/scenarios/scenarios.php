<!DOCTYPE html>
<html>
<head>
	<title>Tableau des horaires</title>
	<style>
		table {
			border-collapse: collapse;
		}
		td {
			border: 1px solid black;
			padding: 5px;
			text-align: center;
		}
		button {
			width: 100%;
			height: 100%;
			border: none;
			background-color: transparent;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th></th>
				<th>Lundi</th>
				<th>Mardi</th>
				<th>Mercredi</th>
				<th>Jeudi</th>
				<th>Vendredi</th>
				<th>Samedi</th>
				<th>Dimanche</th>
			</tr>
		</thead>
		<tbody>
			<?php
			for ($i=0; $i<24; $i++) {
				echo "<tr>";
				if ($i==0) {
					echo "<td>00:00</td>";
				} else {
					echo "<td>".$i.":00</td>";
				}
				for ($j=0; $j<7; $j++) {
					echo "<td><button onclick=\"alert('Jour ".($j+1).", heure ".str_pad($i, 2, "0", STR_PAD_LEFT).":00')\"></button></td>";
				}
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
</body>
</html>

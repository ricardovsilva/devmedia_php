<html>
	<head>
		<title>Aula 7 - Loop For</title>
	</head>
	<body>
		<p>Criar um código que liste os 100 primeiros números.</p>
		<?php
			/* for($i=0; $i<100;$i++)
			{
				echo "<p>".$i."</p>";
			} */
		?>
		
		<table width="100%" border="1">
			<tr>
				<td><h3>Código</h3></td>
				<td><h3>Nome</h3></td>
				<td><h3>Endereço</h3></td>
			</tr>
			<?php
				for($i=1; $i <= 100; $i++)
				{
					echo $i;
			?>
			<tr>
				<td><?=$i?></td>
				<td>Ricardo Silva</td>
				<td>Endereço</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
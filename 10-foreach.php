<html>
	<head>
		<title>Aula 10 - For each</title>
	</head>
	<body>
		<?php
			$estrutura = array(
								array("Valor 1", "Valor 2", "Valor 3"), 
								array("Valor 4", "Valor 5", "Valor 6"));
			foreach($estrutura as $val1)
			{
				print_r($val1);
				echo "<br>";
			}
		?>
	</body>
</html>
<html>
	<head>
		<title>Aula 9 - Array</title>
	</head>
	<body>
		<p>Criar um código que liste os 100 primeiros números.</p>
		<?php
			$nossoArray = array("Valor 1", "Valor 2", "Valor 3");
			$nossoArray[3] = "Novo Valor";
			
			unset($nossoArray[1]);
			print_r($nossoArray);
			
			$arrayMultiNivel[0][1] = "Valor 0 - 1";
			$arrayMultiNivel[1][1] = "Valor 1 - 1";
			
			print_r($arrayMultiNivel);
		?>
	</body>
</html>
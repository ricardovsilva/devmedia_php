<html>
	<head>
		<title>Aula 04 - Variaveis</title>
	</head>
	<body>
		<?php
			$idade = 29; //esta é uma variável do tipo int
			$nome = "Ricardo Silva"; //esta é uma variável do tipo string
			$habilitado = true; //esta é uma variável do tipo booleana, aceita true ou false.
			$valor = 100.00; //variável do tipo ponto flutuante (float)
			
			// constantes
			define("IDADE","52");
		?>
		
		<p> Olá, me chamo <?=$nome?>, tenho <?=$idade?> anos.		
		<p>Ops, <?=IDADE?>
	</body>
</html>
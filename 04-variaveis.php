<html>
	<head>
		<title>Aula 04 - Variaveis</title>
	</head>
	<body>
		<?php
			$idade = 29; //esta � uma vari�vel do tipo int
			$nome = "Ricardo Silva"; //esta � uma vari�vel do tipo string
			$habilitado = true; //esta � uma vari�vel do tipo booleana, aceita true ou false.
			$valor = 100.00; //vari�vel do tipo ponto flutuante (float)
			
			// constantes
			define("IDADE","52");
		?>
		
		<p> Ol�, me chamo <?=$nome?>, tenho <?=$idade?> anos.		
		<p>Ops, <?=IDADE?>
	</body>
</html>
<?php
	// vamos receber uma variável via GET e exibir a mesma na tela.
	$texto = $_GET['nome'];
?>
<html>
	<head>
		<title>Aula 02 - Curso de PHP</title>
	</head>
	<body>
		<?=$texto?>, seja bem vindo!.
	</body>
</html>
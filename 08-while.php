<html>
	<head>
		<title>Aula 8 - Loop While</title>
	</head>
	<body>
		<p>Criar um c�digo que liste os 100 primeiros n�meros.</p>
		
		<?php
			$contador = 0;
			
			while($contador < 100)
			{
				echo $contador."<br/>";
				$contador++;
				
				if($contador == 50)
				{
					echo "A variavel contador est� em ".$contador;
					break;
				}
			}
		?>
	</body>
</html>
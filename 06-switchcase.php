<html>
	<head>
		<title>Aula 06 - Switch Case</title>
	</head>
	<body>
		<?php
			$resultado = "";
			
			if(isset($_POST['btnOperacao']))
			{
				$valor1 = $_POST['valor1'];
				$valor2 = $_POST['valor2'];
				
				switch($_POST['operacao'])
				{
					case "1":
						$resultado = $valor1 + $valor2;
						break;
					case "2":
						$resultado = $valor1 - $valor2;
						break;
					case "3":
						$resultado = $valor1 * $valor2;
						break;
					case "4":
					{
						if($valor2 != 0)
						{
							$resultado = $valor1 / $valor2;
						}
						else
						{
							$resultado = "N�o � poss�vel dividir por zero";
						}
						break;
					}
				}
			}
			
			if ($resultado != "")
			{
				echo "<h3>O resultado �: ".$resultado."</h3>";
			}
		?>
		<form method="post">
			<p>Valor 1: <input type="text" name="valor1"/></p>
			<p>Valor 2: <input type="text" name="valor2"/></p>
			
			<p>Selecione a operacao:
				<select name="operacao">
					<option value="1">Adi��o</option>
					<option value="2">Subtra��o</option>
					<option value="3">Multiplica��o</option>
					<option value="4">Divis�o</option>
				</select>
			</p>
			
			<p><input type="submit" value="Executar" name="btnOperacao" /></p>
		</form>
	</body>
</html>
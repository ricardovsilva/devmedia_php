<?php
	$logado = "";
	$mensagem = "";
	
	// vamos verificar se a vari�vel btnLogar que veio por post possui o valor Logar.
	if(isset($_POST['btnLogar']))
	{
		if($_POST['usuario'] == "123" && $_POST['senha'] == "456")
		{
			$logado = $_POST['usuario'];
		}
		else
		{
			$mensagem = "Usu�rio e/ou senha incorretos ou inexistentes";
		}
	}
	else
	{
	}
?>
<html>
	<head>
		<title>Aula 05 - If e Else</title>
	</head>
	<body>
		<?php
			if($logado != "")
			{
				echo "Seja bem vindo ".$logado;
			}
			else if($mensagem != "")
			{
				echo $mensagem;
			}
		?>
		<form method="post">
			<p>Informe o usu�rio: <input type="text" name="usuario" /></p>
			<p>Informe a senha: <input type="password" name="senha" /></p>
			<p><input type="submit" value="Logar" name="btnLogar" /></p>
		</form>
	</body>
</html>
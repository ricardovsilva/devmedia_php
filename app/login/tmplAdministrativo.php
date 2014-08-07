<html>
	<head>
		<title><?=$titulo?></title>
	</head>
	<body>
		<h1> Você <?=$_SESSION['usuario']?> está logado </h1>
		
		<p><a href="index.php?r=login&ac=logout">Efetuar Logoff</a></p>
	</body>
</html>
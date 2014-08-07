<?php
	// se o usuário não estiver lgoado, vamos abrir o formulário de login.
	// mas se o usuário estiver logado, vamos mostrar uma mensagem de boas vindas
	// e mostrar também o seu nome de usuário.
	
	// iniciar o uso de sessão.
	session_start();
	
	$titulo = "Video aula 12 - Login";
	
	if(isset($_GET['ac']) 
		&&  $_GET['ac'] == "logout"
		&& isset($_SESSION['usuario']))
	{
		unset($_SESSION['usuario']);
	}
	
	if(isset($_POST['usuario']) 
			 && $_POST['usuario'] == "admin"
			 && isset($_POST['senha'])
			 && $_POST['senha'] == "123")
	{
		$_SESSION['usuario'] = $_POST['usuario'];
	}
	
	if(isset($_SESSION['usuario']))
	{
		require_once("tmplAdministrativo.php");
	}
	else
	{
		require_once("tmplFormularioLogin.php");
	}
<?php

	include_once "../persist/SqlManager.class.php";
	
	$nomeCerva = utf8_encode($_POST["nomeCerva"]);
	$nomeBar = utf8_encode($_POST["nomeBar"]);
	
	if ( strlen($nomeCerva) == 0 || strlen($nomeCerva) > 15 )
	{
		header('Location: index.php?flag=2&page=bebidas');
		exit();
	}
	elseif ( strlen($nomeBar) == 0 || strlen($nomeBar) > 20 )
	{
		header('Location: index.php?flag=3&page=bebidas');
		exit();
	}
	
	$conn = new SqlManager("connect");
	
	$query = "INSERT INTO venda VALUES ('" . $nomeBar . "', '" . $nomeCerva . "')";
	
	$numLinhas = $conn->executeCommand($query);
	
	$conn->closeConnection();
	
	if ( $numLinhas == 1 )
		header('Location: index.php?flag=1&page=bebidas');
	else
		header('Location: index.php?flag=0&page=bebidas');
	
?>

<?php
	
	include_once "../persist/SqlManager.class.php";
	
	$bar = utf8_encode($_POST["bares"]);
	
	$conn = new SqlManager("connect");

	$query = ""; /* adicione a query aqui */


	$result = $conn->ExecuteRead($query);
	
	$return = "<table align='center' border=1  cellpadding='0' cellspacing='0'>";
	$return .= "<tr><td><label>Nome Bar:</label></td>";
	$return .= "<td><label>" . utf8_decode($bar) . "</label></td></tr>";
	
	foreach ( $result as $row )
	{
		$valor = utf8_decode($row["pessoa"]);
		$return .= "<tr>";
		$return .= "<td colspan='2'>";
		$return .= "<label>" . $valor . "</label>";
		$return .= "</td>";
		$return .= "</tr>";
	}

	
	$return .= "</table>";
	
	$conn->closeConnection();
	
	/* Modifique aqui ao criar a nova aba */

	header('Location: index.php?page=consultas&ret3=' . $return);

?>

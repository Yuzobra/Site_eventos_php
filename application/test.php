<?php
	
	include_once "../persist/SqlManager.class.php";
	
	$conn = new SqlManager("connect");
	
	//$query = "SELECT * FROM venda";
	
	$bar = "Bar Lagoa";
	
	$query = "SELECT DISTINCT pessoa ";
	$query += "FROM gostam ";
	$query += "WHERE cerveja IN ";
	$query += "( ";
	$query += "SELECT cerveja ";
	$query += "FROM venda ";
	$query += "WHERE bar = '" . $bar . "' ";
	$query += ")";
	
	$result = $conn->ExecuteRead($query);
    
	foreach ( $result as $row )
	{
		echo $row["pessoa"];
		echo "<br/>";
		//echo $row["cerveja"];
	}
	
?>
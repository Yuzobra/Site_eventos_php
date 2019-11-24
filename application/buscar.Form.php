<?php

	include_once "../persist/SqlManager.class.php";
	
	$conn = new SqlManager("connect");
	
	$query = "SELECT distinct bar FROM venda";
	
	$result = $conn->ExecuteRead($query);
	
	echo "<form action='buscar.php' name='buscar' method='post'>";
	echo "<table align='center' cellpadding='0' cellspacing='5px'>";
	echo "<tr>";
	echo "<td align='right'><label>Listar todas as pessoas que gostam das ";
	echo "cervejas vendidas no:</label></td>";
	echo "<td align='left'><select name='bares'>";
	foreach ( $result as $row )
	{
		$valor = utf8_decode($row["bar"]);
		echo "<option value={$valor}>" . $valor . "</option>";
	}
	echo "</select></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td colspan='2' align='center'><input type='submit' value='Buscar'/></td>";
	echo "</tr>";
	echo "</table>";
	echo "</form>";

        $result = $conn->ExecuteRead($query);

        if ( isset($_GET["ret1"]) )
        {
                echo $_GET["ret1"];
        }

        echo "<form action='ex1.php' name='buscar' method='post'>";
        echo "<table align='center' cellpadding='0' cellspacing='5px'>";
        echo "<tr>";
        echo "<td align='right'><label>Listar todas as pessoas que gostam apenas das ";
        echo "cervejas vendidas no:</label></td>";
        echo "<td align='left'><select name='bares'>";
        foreach ( $result as $row )
        {
                $valor = utf8_decode($row["bar"]);
                echo "<option value={$valor}>" . $valor . "</option>";
        }
        echo "</select></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td colspan='2' align='center'><input type='submit' value='Buscar'/></td>";
        echo "</tr>";
        echo "</table>";
        echo "</form>";

        $result = $conn->ExecuteRead($query);

        if ( isset($_GET["ret2"]) )
        {
                echo $_GET["ret2"];
        }

        echo "<form action='ex2.php' name='buscar' method='post'>";
        echo "<table align='center' cellpadding='0' cellspacing='5px'>";
        echo "<tr>";
        echo "<td align='right'><label>Listar todas as pessoas que gostam das ";
        echo "cervejas vendidas apenas no:</label></td>";
        echo "<td align='left'><select name='bares'>";
        foreach ( $result as $row )
        {
                $valor = utf8_decode($row["bar"]);
                echo "<option value={$valor}>" . $valor . "</option>";
        }
        echo "</select></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td colspan='2' align='center'><input type='submit' value='Buscar'/></td>";
        echo "</tr>";
        echo "</table>";
        echo "</form>";

        $result = $conn->ExecuteRead($query);

        if ( isset($_GET["ret3"]) )
        {
                echo $_GET["ret3"];
        }

        echo "<form action='ex3.php' name='buscar' method='post'>";
        echo "<table align='center' cellpadding='0' cellspacing='5px'>";
        echo "<tr>";
        echo "<td align='right'><label>Listar todas as pessoas que gostam apenas das ";
        echo "cervejas vendidas apenas no:</label></td>";
        echo "<td align='left'><select name='bares'>";
        foreach ( $result as $row )
        {
                $valor = utf8_decode($row["bar"]);
                echo "<option value={$valor}>" . $valor . "</option>";
        }
        echo "</select></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td colspan='2' align='center'><input type='submit' value='Buscar'/></td>";
        echo "</tr>";
        echo "</table>";
        echo "</form>";

        if ( isset($_GET["ret4"]) )
        {
                echo $_GET["ret4"];
        }
	

	$conn->closeConnection();

?>

<?php
	if ( isset($_GET["flag"]) )
	{
		if ( $_GET["flag"] == 1 )
			$msg = "Inserido com sucesso";
		elseif ( $_GET["flag"] == 0 )
			$msg = "Falha ao inserir dados";
		elseif ( $_GET["flag"] == 3 )
			$msg = "Preencha corretamente o campo Nome Bar!";
		elseif ( $_GET["flag"] == 2 )
			$msg = "Preencha corretamente o campo Nome Cerveja!";
		print ( "<script language='javascript'>window.alert('" . $msg . "');</script>" );
	}
	echo "<form action='cadastroBebidas.php' name='insereBebidas' method='post'>";
	echo "<table align='center' cellpadding='0' cellspacing='5px'>";
	echo "<tr>";
	echo "<td align='right'><label>Nome Bar:</label></td>";
	echo "<td align='left'><input type='text' name='nomeBar'/></td>";
	echo "</tr>";
	echo "<td align='right'><label>Nome Cerveja:</label></td>";
	echo "<td align='left'><input type='text' name='nomeCerva'/></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td colspan='2' align='center'><input type='submit' value='Cadastrar'/></td>";
	echo "</tr>";
	echo "</table>";
	echo "</form>";
?>


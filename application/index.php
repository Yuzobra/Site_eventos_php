<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
	<head>
		<title>Events</title>
		<link href="css/style.css" type="text/css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
	</head>
	<body>
		<div>
			<div class="row row--menu">
				<div class="menu">
					<div class="col-1-of-4">
						<a class="menu__item btn-text"href="index.php?page=home">Home</a>
					</div>
				</div>
			</div>
			<?php
				if ( isset($_GET["page"]) )
				{
					$page = $_GET["page"];
					if ( strcmp($page, "consultas") == 0 )
					include "buscar.Form.php";
					else
						include "home.php";
					/* Adicione aqui uma entrada para novas abas */
				}
			?>
		</div>
	</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Lista de templates</title>
</head>
<body>
	<h1>Lista de templates:</h1>
	<ul>
		<?php
			// Obtém o caminho do diretório atual
			$dir_path = dirname(__FILE__);

			// Obtém a lista de diretórios no diretório atual
			$dirs = array_filter(glob($dir_path . '/*'), 'is_dir');

			// Gera um link para cada diretório
			foreach ($dirs as $dir) {
				$dir_name = basename($dir);
				echo "<li><a href=\"$dir_name\">$dir_name</a></li>";
			}
		?>
	</ul>
</body>
</html>

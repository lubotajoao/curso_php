<?php
include 'header.php';
$aula_atual = 'formularios';
?>

<body>
<h2>Formulários</h2>
<hr>
<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

<h3>Envie seus dados</h3>
<form action="valida-formularios.php" method="post">
	Nome: *
	<br>
	<label>
		<input class="field" name="nome" type="text">
	</label>
	<br><br>

	E-mail: *
	<br>
	<label>
		<input class="field" name="email" type="text">
	</label>
	<br><br>

	<input class="submit" name="submit" type="submit"><br>
</form>

<?php include 'functions/bottom_index.php'; ?>
</body>

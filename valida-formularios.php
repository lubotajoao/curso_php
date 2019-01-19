<?php
include 'header.php';
$aula_atual = 'valida-formularios';
?>

<?php
function clean_input($data)
{
	$cleandata = trim($data);
	$cleandata = stripcslashes($cleandata);
	$cleandata = htmlspecialchars($cleandata);

	return $cleandata;
}

?>

<body>
<h2>Formulários</h2>
<hr>
<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

<h3>Envie seus dados</h3>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nome = $_POST['nome'];
	$email = $_POST['email'];
//
//	global $erro_nome;
//	global $erro_email;

	if ($nome == "") {
		$erro_nome = '* O nome é obrigatório';
	} elseif ($email == "") {
		$erro_email = '* O e-mail é obrigatório';
	} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
		$erro_email = '* O e-mail informado é inválido.';
	} else {
		$nome = clean_input($nome);
		$email = clean_input($email);
	}
}; ?>

<form action="valida-formularios.php" method="post">
	Nome: *<br>
	<input class="field" name="nome" type="text">
	<br>

	<div class="erro-form"><?php global $erro_nome;
		echo $erro_nome; ?></div>
	<br>

	E-mail: *<br>
	<input class="field" name="email" type="email">
	<br>

	<div class="erro-form"><?php global $erro_email;
		echo $erro_email; ?></div>
	<br>

	<input class="submit" name="submit" type="submit"><br>
	<div class="sucesso-form"></div>
</form>

<h3>Confirmaçao</h3>
<p>
	<?php
	echo $nome;
	echo "<br>";
	echo $email;
	?>
</p>

<?php include 'functions/bottom_index.php'; ?>
</body>

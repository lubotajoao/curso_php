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

		$server = 'localhost';
		$db_name = 'curso_php';
		$user = 'root';
		$password = '';
		$port = '3306';

		$db_connect = new mysqli($server, $user, $password, $db_name, $port);

		if ($db_connect->connect_error == true) {
			$ms_envio = "Erro de conexao." . $db_connect->connect_error;
		} else {
			$sql = "INSERT INTO clientes(nome, email) VALUES ('$nome', '$email')";

			if ($db_connect->query($sql) == true) {
				$ms_envio = "Formulario enviado com sucesso";
				$nome = NULL;
				$email = NULL;
			} else {
				$ms_envio = "Nao foi possivel enviar o formulario. " . mysqli_error($db_connect);
			}
		}
	}
}; ?>

<form action="valida-formularios.php" method="post">
	Nome: *<br>
	<input class="field" name="nome" type="text" value="<?php echo $nome; ?>">
	<br>

	<div class="erro-form">
		<?php
		global $erro_nome;
		echo $erro_nome;
		?>
	</div>
	<br>

	E-mail: *<br>
	<input class="field" name="email" type="email" value="<?php echo $email; ?>">
	<br>

	<div class="erro-form">
		<?php
		global $erro_email;
		echo $erro_email;
		?>
	</div>
	<br>

	<input class="submit" name="submit" type="submit"><br>
	<div class="sucesso-form">
		<?php
		global $ms_envio;
		echo $ms_envio;
		?>
	</div>
</form>

<?php include 'functions/bottom_index.php'; ?>
</body>

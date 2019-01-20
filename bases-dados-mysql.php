<?php
include 'header.php';
include 'functions/functions.php';
$aula_atual = 'base-dados-mysql';
?>

<body>

<h2>Bases de Dados MySQL</h2>
<hr>
<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


<h3>MySQLi</h3>

<?php
$server = 'localhost';
$db_name = 'curso_php';
$user = 'root';
$password = '';
$port = '3306';

$db_connect = new mysqli($server, $user, $password, $db_name, $port);

if ($db_connect->connect_error == true) {
	echo 'Falha na conexão: <br>';
	echo $db_connect->connect_error;
} else {
	echo 'Conexão feita com sucesso. <br>';

	$sql = "INSERT INTO clientes(nome, email) VALUES ('Pedro', 'pedro@gmail.com')";

	if ($db_connect->query($sql) == true) {
		echo "Dados inseridos com sucesso. <br>";
	} else {
		echo "Falha no envio dos dados " . "<br>";
	}
}

?>

<?php include 'functions/bottom_index.php'; ?>

</body>
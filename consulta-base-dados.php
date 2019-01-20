<?php
include 'header.php';
$aula_atual = 'consulta-base-dados';
?>


<body>


<h2>Consulta à base de dados</h2>
<hr>
<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


<h3>Dados dos clientes</h3>


<?php

$server = 'localhost';
$user = 'root';
$password = '';
$dbname = 'curso_php';
$port = '3306';

$db_connect = new mysqli($server, $user, $password, $dbname, $port);

if ($db_connect->connect_error == true) {
	echo 'Não foi possível conectar à base de dados.';
} else {
// echo 'Conectado à base de dados.' . '<br><br>';

	$sql = "SELECT * FROM clientes";
	$result = $db_connect->query($sql);

	?>


	<table>
		<tr>
			<th>Nome</th>
			<th>E-mail</th>
		</tr>

		<?php
		while ($row = $result->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $row['nome']; ?></td>
				<td><?php echo $row['email']; ?></td>
			</tr>
		<?php } ?>
	</table>
<?php } ?>

<?php include 'functions/bottom_index.php'; ?>

</body>

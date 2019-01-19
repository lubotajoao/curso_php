<?php
include 'header.php';
include 'functions/functions.php';
$aula_atual = 'data-hora';
?>

<body>
<h2>Data e Hora</h2>
<hr>
<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

<h3>Epoch</h3>

<p>Unix Epoch -> 01 Jan 1970 00:00:00 GMT</p>

<h3>Função time - segundos desde o Epoch (formato unix timestamp)</h3>

<?php
$agora = time();
echo date("d/m/Y", $agora);
?>

<h3>Função mktime</h3>

<?php
$nascimento = mktime(0, 0, 0, 6, 10, 1989);
echo date("d m Y", $nascimento);
?>

<h3>Função strtotime</h3>
<?php
$outra_data = strtotime("now + 4 weeks monday");
echo date("d m Y", $outra_data);
?>

<h3>Função date</h3>
<?php
$outra_data = strtotime("now");
echo date("d/m/Y H:i:s", $outra_data);
?>

<h3>Fuso horário</h3>
<?php
echo date_default_timezone_get();
?>

<h3>Cálculos com data e hora</h3>
<?php
$data_entrega = strtotime('26 dec 2017');
$data_esperada = strtotime('24 dec 2017');

if ($data_entrega > $data_esperada) {
	$atraso = ($data_entrega - $data_esperada) / 60 / 60 / 24;
	echo 'Produto entregue com atraso de ' . $atraso . ' dias.';
} else {
	echo "Produto entregue no prazo.";
}
?>

<h3>Tabela de caracteres da função date</h3>
<?php include 'tabela-date.php'; ?>

<?php include 'functions/bottom_index.php'; ?>

</body>

<?php
include 'header.php';
$aula_atual = 'operacoes-arrays';
?>


<body>

<h2>OPERAÇÕES COM ARRAYS</h2>
<hr>
<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

<?php

$alunos = array(
	array(
		'matricula' => '98855',
		'nome' => 'João Fernando Oliveira',
		'ano_nasc' => 1980,
		'cidade' => 'São Paulo'
	),

	array(
		'matricula' => '98844',
		'nome' => 'Letícia Maria Gomes',
		'ano_nasc' => 1992,
		'cidade' => 'Teresópolis'
	),

	array(
		'matricula' => '98840',
		'nome' => 'Carlos Henrique Matos',
		'ano_nasc' => 1976,
		'cidade' => 'Belo Horizonte'
	),

	array(
		'matricula' => '98837',
		'nome' => 'Fernando Costa',
		'ano_nasc' => 1996,
		'cidade' => 'São Paulo'
	)
);

?>

<h3>Array Push</h3>

<?php
$aluno_novo = array();
$aluno_novo['matricula'] = '98898';
$aluno_novo['nome'] = 'Carla Alves Neto';
$aluno_novo['ano_nasc'] = 1986;
$aluno_novo['cidade'] = 'Fortaleza';

array_push($alunos, $aluno_novo);

//echo "<pre>";
//print_r($alunos);
//echo"</pre>"

$alunos_90 = array();

foreach ($alunos as $aluno) {
	if ($aluno['ano_nasc'] >= 1990) {
		$alunos_90[$aluno['matricula']] = array();
		$alunos_90[$aluno['matricula']]['nome'] = $aluno['nome'];
		$alunos_90[$aluno['matricula']]['ano_nasc'] = $aluno['ano_nasc'];
	}
}

?>

<h4>Alunos Nascidos depois de 1990: </h4>
<br>
<pre>
	<?php
	print_r($alunos_90);
	?>
</pre>


<h3>Array Keys</h3>
<?php

?>

<h4>Matrícula dos Alunos Nascidos depois de 1990: </h4>
<br>
<pre>
	<?php
	print_r(array_keys($alunos_90));
	?>
</pre>


<h3>In Array</h3>
<?php
$matricula = '9883790';
?>

<h4>Busca de aluno por matrícula: </h4>
<br>
<?php if (in_array($matricula, array_keys($alunos_90))) { ?>
	<p>
		<?php
		echo 'A matricula ' . $matricula . ' pertence a(o) aluno(a) ' . $alunos_90[$matricula]['nome'] . ', nascido(a) no ano de ' . $alunos_90[$matricula]['ano_nasc'] . '.';
		?>
	</p>

<?php } else { ?>
	<p>
		<?php
		echo 'A matricula ' . $matricula . ' nao foi encontrada.';
		?>
	</p>
<?php } ?>


<?php include 'functions/bottom_index.php'; ?>


</body>

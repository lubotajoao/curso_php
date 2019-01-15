<?php
include 'header.php';
$aula_atual = 'tipos-dados';
?>

<body>

<h2>Tipos de Dados</h2>
<hr>
<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>
<br>

<h3>Função var_dump</h3>

<?php
$nome = 'Ivan';
$saldo = 965.35;
?>

<h4>Tipo da variável $nome: </h4>
<p><?php var_dump($nome);?></p>

<br>

<h4>Tipo da variável $saldo: </h4>
<p><?php var_dump($saldo);?></p>


<?php include 'functions/bottom_index.php'; ?>


</body>

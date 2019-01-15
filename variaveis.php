<?php
include 'header.php';
$aula_atual = 'variaveis';
?>


<body>

<h2>VARIÁVEIS E CONSTANTES</h2>
<hr>
<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>
<br>

<h3>Apresentar valor de variáveis</h3>

<?php
$nome = "Joao";
$saldo = 7548.50;
?>

<h4>Nome: <?= $nome;?> </h4>
<p></p>

<br>

<h4>Saldo: <?= $saldo;?></h4>
<p></p>

<br>

<h4>Mensagem: <?= "Olá {$nome}, o seu saldo é {$saldo}.";?></h4>
<p></p>


<?php include 'functions/bottom_index.php'; ?>


</body>

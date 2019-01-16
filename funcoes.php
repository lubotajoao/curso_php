<?php
include 'header.php';
include 'functions/functions.php';
$aula_atual = 'funcoes';
?>

<body>

<h2>FUNÇÕES</h2>
<hr>
<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

<h3>Função simples sem argumento</h3>

<?php
function ola_mundo()
{
	echo "Ola Mundo!";
	echo "<br>";
	echo "Fim da Funcao";
}

ola_mundo();

?>

<h3>Função com argumentos</h3>
<?php
function soma($num1, $num2)
{
	$soma = $num1 + $num2;
	echo $soma;
}

soma(78, 32);

?>

<h3>Função com argumento e valor default</h3>
<?php
//O cliente e' utilizado como o valor padrao para evitar algum erro no caso de argumento vazio.
function ola_clinete($nome = 'cliente')
{
	echo "Ola, $nome, como vai?";
}

ola_clinete("Lubota");

?>

<h3>echo ou return?</h3>
<?php
function media($num1, $num2){
	$media = ($num1 + $num2) / 2;
	return $media;
}

$media_numeros = media(54, 73);
echo $media_numeros;
?>

<?php include 'functions/bottom_index.php'; ?>


</body>

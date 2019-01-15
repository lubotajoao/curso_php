<?php
include 'header.php';
$aula_atual = 'arrays';
?>

<body>

<h2>ARRAYS</h2>
<hr>
<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


<h3>Meus Cursos</h3>

<?php $cursos1 = array("Excel", "HTMML & CSS", "Python"); ?> <!--Array indexado-->
<?php $cursos = array(
	"Excel" => array(
		"n_alunos" => 400,
		"titulo" => "Do zero ao avancado",
		"url" => "http://www.udemy.com",
		"aval" => 300
	),

	"HTML-CSS" => array(
		"n_alunos" => 400,
		"titulo" => "Aprenda o Desenvolvimento Web",
		"url" => "http://www.udemy.com",
		"aval" => 200
	),

	"Python" => array(
		"n_alunos" => 400,
		"titulo" => "A linguagem de DataScience",
		"url" => "http://www.udemy.com",
		"aval" => 150
	)
); ?> <!--Array associativo-->


<h4>Conteúdo do Array: </h4>
<p><?php echo $cursos1[0]; ?></p>
<br>


<h3>Informação do Curso</h3>

<h4>Título: </h4>
<p><?= $cursos['Excel']['titulo']?></p>
<br>

<h4>Número de Alunos: </h4>
<p><?= $cursos['Excel']['n_alunos']?></p>
<br>

<h4>Número de Avaliações: </h4>
<p><?= $cursos['Excel']['aval']?></p>
<br>


<h4>URL: </h4>
<p><?= $cursos['Excel']['url']?></p>
<br>

<h4>URL da foto: </h4>
<p><?= $cursos['Excel']['url']?></p>
<br>


<h3>Agora é a sua vez</h3>

<p>Crie um Array e solte as suas informações em sequência. Pesquise também funções que podem ser aplicadas neste tipo de
	dados.</p>
<br>


<?php include 'functions/bottom_index.php'; ?>


</body>
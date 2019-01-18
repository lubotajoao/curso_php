<?php
include 'header.php';
$aula_atual = 'include-require';
?>

<body>
<h2>Include e Require</h2>
<hr>
<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>
<h3>Include</h3>

<p><?php ?></p>
<br>

<h3>Componente galeria de fotos 1</h3>
<?php
$photoGallery = array(
	'img/prato_1.jpg',
	'img/prato_2.jpg',
	'img/prato_3.jpg',
	'img/prato_4.jpg'
);
?>
<?php
include 'components/gallery-001.php';
?>

<h3>Componente galeria de fotos 2</h3>
<?php
$photoGallery = array(
	'img/prato_5.jpg',
	'img/prato_6.jpg',
	'img/prato_7.jpg',
	'img/prato_8.jpg'
);
?>
<?php
include 'components/gallery-001.php';
?>

<?php include 'functions/bottom_index.php'; ?>

</body>
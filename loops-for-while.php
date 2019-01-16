<?php
include 'header.php';
$aula_atual = 'loops-for-while';
?>
<body>

<h2>LOOPS WHILE e FOR</h2>
<hr>
<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

<h3>Selecione o ano de nascimento:</h3>

<label>
	<?php
	$ano_atual = date('Y');
	$ano = $ano_atual;
	?>
	<select>
		<option>Selecione o ano</option>
		<?php
		while ($ano > 1979) { ?>
			<option><?php echo $ano; ?></option>
			<?php $ano = $ano - 1; ?>
		<?php } ?>
	</select>
</label>

<h3>Selecione o ano estimado de aposentadoria:</h3>

<label>
	<select>
		<option>Selecione o ano</option>
		<?php for ($ano = $ano_atual; $ano <= 2050; $ano++) { ?>
			<option value=""> <?php echo $ano; ?></option>
		<?php } ?>
	</select>
</label>


<h3>Agora é a sua vez.</h3>

<p>Use o loop for ou while para apresentar os anos em que vão haver Copa do mundo e Olímpiadas, até 2050.</p>

<h4>Anos de Copa do Mundo: </h4>

<p>apresente aqui os anos</p>
<br>

<h4>Anos de Olimpíadas: </h4>

<p>apresente aqui os anos</p>
<br>

<?php include 'functions/bottom_index.php'; ?>

</body>
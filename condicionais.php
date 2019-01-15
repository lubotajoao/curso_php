<?php 
		include 'header.php';
		$aula_atual = 'condicionais';
	?>


	<body>

		<h2>CONDICIONAIS</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		<h3>Selecione o produto:</h3>

		<?php 

			$produtos = array(
							array(
									'nome' => 'Laptop Lenovo Ideapad Core i7 32GB',
									'estoque' => 12
							),

							array(
									'nome' => 'Laptop ASUS X441NA3350 Celeron N3350 16GB',
									'estoque' => 6
							),

							array(
									'nome' => 'Laptop HP BS013DX Core i5 8GB',
									'estoque' => 1
							),

							array(
									'nome' => 'Dell Inspiron I7373 Core i7 8GB',
									'estoque' => 0
							)		

			)

		?>

		<select>
			<option>Nenhum produto selecionado</option>

			<?php foreach ($produtos as $item) { ?>

			<option><?php echo $item['nome']; ?></option>

			<?php } ?>
			
		</select>

			

		<h3>Agora é a sua vez</h3> 

		<p>Apague todo o código acima e tente recriá-lo desde o começo. Crie um array com outros produtos, faça o loop foreach para criar o select box e depois use os condicionais para desabilitar os itens que não estão em estoque.</p><br>

			<p></p>
			<br>

		


		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>
<?php 
		include 'header.php';
		$aula_atual = 'operacoes-arrays';
	?>


	<body>

		<h2>OPERAÇÕES COM ARRAYS</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		<?php

			$alunos = array (
				array (
					'matricula' => '98855',
					'nome' => 'João Fernando Oliveira',
					'ano_nasc' => 1980,
					'cidade' => 'São Paulo'
				),

				array (
					'matricula' => '98844',
					'nome' => 'Letícia Maria Gomes',
					'ano_nasc' => 1992,
					'cidade' => 'Teresópolis'
				),
				array (
					'matricula' => '98840',
					'nome' => 'Carlos Henrique Matos',
					'ano_nasc' => 1976,
					'cidade' => 'Belo Horizonte'
				),
				array (
					'matricula' => '98837',
					'nome' => 'Fernando Costa',
					'ano_nasc' => 1996,
					'cidade' => 'São Paulo'
				)
			
			);

		?>


		<h3>Array Push</h3>
			
		<?php 

		?>

		<h4>Alunos Nascidos depois de 1990: </h4>
		<br>
		<pre></pre>




		<h3>Array Keys</h3>
		<?php 

		?>

		<h4>Matrícula dos Alunos Nascidos depois de 1990: </h4>
		<br>
		<pre></pre>




		<h3>In Array</h3>

		<h4>Busca de aluno por matrícula: </h4>
		<br>
		<p></p>


		

		

		
	






		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>
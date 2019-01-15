<?php 
		include 'header.php';
		$aula_atual = 'include-require';
	?>


	<body>


		<h2>Include e Require</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


		

		<h3>Include</h3>
		
		<?php 

		?>


		<p><?php ?></p>
		<br>




		<h3>Componente galeria de fotos</h3>
		<?php

			$photoGallery = array (
				
				'img/prato_1.jpg',
				'img/prato_2.jpg',
				'img/prato_3.jpg',
				'img/prato_4.jpg'

			);

		?>
		
		<div class="gallery-001">

			<?php foreach ($photoGallery as $photo) { ?>

				<img src="<?php echo $photo; ?>" alt="galeria-fotos">

			<?php } ?>

		</div>

		



		

		

		
		










		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>
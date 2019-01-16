<?php
include 'header.php';
$aula_atual = 'tipo-objetos';
?>

<body>

<h2>OBJETOS</h2>
<hr>
<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


<h3>Propriedades</h3>
<?php

class carro
{
	private $ano;
	private $modelo;
	private $placa;
	private $cpf_dono;

	/**
	 * carro constructor.
	 * @param $ano
	 * @param $modelo
	 * @param $placa
	 * @param $cpf_dono
	 */
	public function __construct($ano, $modelo, $placa, $cpf_dono)
	{
		$this->ano = $ano;
		$this->modelo = $modelo;
		$this->placa = $placa;
		$this->cpf_dono = $cpf_dono;
	}

	public function mostrar_info()
	{
		echo 'Ano: ' . $this->ano . '<br>';
		echo 'Modelo: ' . $this->modelo . '<br>';
		echo 'Placa: ' . $this->placa . '<br>';
	}

	public function mostrar_dono()
	{
		echo $this->cpf_dono . '<br>';
	}

	public function mudar_dono($cpf)
	{
		$this->cpf_dono = $cpf;
	}
}

$carro1 = new carro(2018, "Fox", "AAA", "345.876.809-90")

?>

<h4>Propriedades do Objeto Carro1: </h4>
<pre><?php $carro1->mostrar_info(); ?></pre>

<h3>Métodos</h3>

<h4>Dono do Carro1: </h4>
<p><?php $carro1->mostrar_dono(); ?></p>
<br>

<h4>---------- Troca do dono do carro ----------</h4>

<br>
<?php $carro1->mudar_dono('832.382.882-89'); ?>

<h4>Novo Dono do Carro1: </h4>
<p><?php $carro1->mostrar_dono(); ?></p>


<?php include 'functions/bottom_index.php'; ?>


</body>


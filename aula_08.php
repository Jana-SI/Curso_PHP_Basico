<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <?php
	
	$texto = isset($_GET["texto"])?$_GET["texto"]:"Texto Generico";
	$tamanho = isset($_GET["tamanho"])?$_GET["tamanho"]:"12pt";
	$cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
  
  ?>
  <style>
	span.texto{
		font-size: <?php echo $tam;?>;
		color: <?php echo $cor; ?>
	}
  </style>  
</head>
<body>
<div>
	
	<h2>Aula 8</h2>

	<!--<p>Exercício 01 - Ler um valor e mostrar sua raiz quadrada</p>-->

    <?php
	
		/* $valor = $_GET["valor"];
		
		echo "<p>Valor: $valor</p>";
		
		$raiz = sqrt($valor);
		
		echo "<p>Raiz Quadrada: ".number_format($raiz, 2)."</p>"; */
        
    ?>
	
	<!--<p>Exercício 02 - Ler nome, ano de nascimento e sexo de uma pessoa, mostrando sua idade atual</p>-->
	
	<?php
	
		/* $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
		$ano = isset($_GET["ano"])?$_GET["ano"]:0;
		$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"sem sexo";
		
		$idade = date("Y") - $ano;
		
		echo "<p>Nome: $nome<br>Idade: $idade<br>Ano de nascimento: $ano<br>Sexo: $sexo</p>"; */
	?>
	
	<p>Exercício 03 - Permitir a personalização de um texto através de um formulário</p>
	
	<?php
		
		echo "<p><span class='texto'>".$texto."</span></p>";
	?>
	
	<button><a href="aula_08.html">Voltar</a></button>
	
</div>
</body>
</html>
 
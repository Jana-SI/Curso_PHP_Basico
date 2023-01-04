<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

	<h2>Aula 15</h2>
	
	<!--<p>Exercício 1 - Criar um procedimento que use a passagem de parâmetros por referência.</p>-->
	
    <?php
	
        /* function teste(&$x){ //& referencia valor
			$x += 2;
			echo "<p>X: $x</p>";
		}
		
		$a = 3;
		teste($a);
		echo "<p>A: $a</p>"; */
    ?>
	
	<p>Exercício 2 - </p>
	
    <?php
	
        include "funcoes.php"; // obriga o codigo externo a ser puxado, gerando erro se nao existir
		//require "funcoes.php"; // solicita se ele existir
		//include_once // once é pra fazer a função uma vez soh
		//require_once 
		
		ola();
		
		mostraValor(4);
		
    ?>
	
	<a class="botao" href="javascript:history.go(-1)">Voltar</a>
	
</div>
</body>
</html> 
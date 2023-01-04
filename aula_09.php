<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

	<h2>Aula 9</h2>
	
	<!--<p>Exercício 01 - Ler o ano de nascimento de uma pessoa e mostrar se ela pode votar e dirigir.</p>-->
	
    <?php
        /*$ano = isset($_GET["ano"])?$_GET["ano"]:1900;
		$idade = date("Y") - $ano;
		
		echo "<p>Ano de nascimento: $ano<br>Idade: $idade</p>";
		
		 if($idade >= 18){
			$votar = "Já pode votar";
			$dirigir = "Já pode dirigir";
		}else{
			$votar = "Não pode votar";
			$dirigir = "Nãp pode dirigir";
		}
		
		echo "<p>".$votar."<br>".$dirigir."</p>"; 
		
		if($idade < 16){
			$tipo = "Não vota";
		}elseif(($idade >= 16 && $idade < 18) || ($idade > 65)){
			$tipo = "Opcional";
		}else{
			$tipo = "Obrigatorio";
		}
		
		echo "<p>Tipo de voto: $tipo</p>";*/
		
    ?>
	
	<p>Exercício 3</p>
	
	<?php
		
		$n1 = isset($_GET["n1"])?$_GET["n1"]:0;
		$n2 = isset($_GET["n2"])?$_GET["n2"]:0;
				
		$media = ($n1 + $n2)/2;
		
		echo "<p>Nota 1: $n1<br>Nota2: $n2<br>Media: $media</p>";
		
		if($media >= 0 && $media < 5){
			$situacao = "Reprovado";
		}elseif($media >= 5 && $media < 7){
			$situacao = "Recuperação";
		}elseif($media >= 7 && $media <= 10){
			$situacao = "Aprovado";
		}
		
		echo "<p>Situação: $situacao</p>";
	
	?>
	
	<button class="botao"><a href="aula_09.html">Voltar</a></button>
	
</div>
</body>
</html>
 
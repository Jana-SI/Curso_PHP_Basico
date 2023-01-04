<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

	<h2>Aula 10</h2>
	
	<!-- <p>Exercício 01 - Ler um número e qual operação realizar: dobro, cubo ou raiz quadrada.</p> -->

    <?php
	
        /*$n = isset($_GET["num"])?$_GET["num"]:0;
        $op = isset($_GET["op"])?$_GET["op"]:1;
		
		echo "<p>Numero: $n</p>";
		
		switch($op){
			case 1:
				$r = $n * 2;
				$oper = "Dobro";
				break;
				
			case 2:
				$r = pow($n,3);
				$oper = "Cubo";
				break;
				
			case 3:
				$r = sqrt($n);
				$oper = "Raiz Quadrada";
				break;
		}
		
		echo "<p>Operação: $oper<br>Resultado: <span class='foco'>$r</span></p>";*/
    ?>
	
	<!-- <p>Exercício 02 - Ler o dia da semana(2-7) e mostrar se precisa ou não ir para escola.</p> -->
	
	<?php
	
		/*$d = isset($_GET["ds"])?$_GET["ds"]:0;
		
		switch($d){
			case 2:
			case 3:
			case 4:
			case 5:
			case 6:
				echo "<p>Levanta e vai estudar! :)</p>";
				break;
			case 7:
			case 8:
				echo "<p>Descanse, pequeno gafanhoto! ;)</p>";
				break;
			default:
				echo "dia da semana invalido, tente novamente!";
				break;
		}*/
	
	?>
	
	<p>Exercício 03</p>
	
	<?php
	
		$estado = isset($_GET["estados"])?$_GET["estados"]:0;
		
		switch($estado){
			
			case 1:
			case 2:
			case 3:
			case 4:
			case 5:
			case 6:
			case 7:
				$regiao = "Região Norte";
				break;
			
			case 8:
			case 9:
			case 10:
			case 11:
			case 12:
			case 13:
			case 14:
			case 15:
			case 16:
				$regiao = "Região Nordeste";
				break;
				
			case 17:
			case 18:
			case 19:
				$regiao = "Região Centro-Oeste";
				break;
				
			case 20:
			case 21:
			case 22:
			case 23:
				$regiao = "Região Sudeste";
				break;
			
			case 24:
			case 25:
			case 26:
				$regiao = "Região Sul";
				break;
			
			default:
				$religao = "Distrito Federal";
				break;
				
			}
			
			echo "<p><span class='foco'>$regiao</span></p>";
	?>
	
	
	
	<br>
	<a class="botao" href="javascript:history.go(-1)">Voltar</a>
	
</div>
</body>
</html>
 
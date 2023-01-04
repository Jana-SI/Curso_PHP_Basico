<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

	<h2>Aula 14</h2>
	
	<!--<p>Exercício 0</p>-->
	
    <?php
        
		/* function soma($a, $b){
			$s = $a + $b;
			echo "<p>$a + $b = $s</p>";
		}
		
		soma(3,4);
		soma(8,2);
		
		$x = 9;
		$y = 15;
		
		soma($x,$y); */
		
    ?>
	
	<!--<p>Exercício 02 -  Criar uma função que some dois valores numéricos inteiros.</p>-->
	
	<?php
		
		/* function soma($a, $b){
			//$s = $a + $b;
			//return $s;
			
			return $a + $b;
		}
		
		$x = 3;
		$y = 8;
		
		$r = soma($x, $y);
		
		echo "<p>$x + $y = $r</p>"; */
	?>
	
	<p>Exercício 3 - Realizar uma soma com múltiplos parâmetros</p>
	
	<?php
	
		function soma(){
			$p = func_get_args();
			$t = func_num_args();
			
			$s = 0;
			
			for($i=0; $i < $t; $i++){
				$s += $p[$i];
			}
			
			return $s;
		}
		
		$r = soma(3, 5, 2, 8, 9, 4);
		
		echo "<p>Soma = $r</p>";
	
	?>
	
	<a class="botao" href="javascript:history.go(-1)">Voltar</a>
	
</div>
</body>
</html>
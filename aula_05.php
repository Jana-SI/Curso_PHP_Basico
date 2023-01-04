<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

	<h2>Aula 5</h2>
	
    <?php
        $n1 = $_GET["a"];
		$n2 = $_GET["b"];
		
		$soma = $n1 + $n2;
		$sub = $n1 - $n2;
		$mult = $n1 * $n2;
		$div = $n1 / $n2;
		$mod = $n1 % $n2;
		
		echo"<table border='1px'>
				<tr>
				<td colspan='2'>N1 = $n1, N2 = $n2</td></tr>
				<tr><td>$n1 + $n2 = $soma<br><br>
					$n1 - $n2 = $sub<br><br>
					$n1 * $n2 = $mult<br><br>
					$n1 / $n2 = $div<br><br>
					$n1 % $n2 = $mod<br><br></td>";
			
		/* ordem de precedência
		1 - ()
		2 - * / %
		3 - + - */
		
		$media = ($n1 + $n2)/2;
		
		echo "<td>Media = $media<br><br>";
		
		//Funçoes matematicas
		
		echo "Absoluto de $n2 = ".abs($n2); 
		echo "<br><br>$n1<sup>$n2</sup> = ".pow($n1, $n2); 
		echo "<br><br>Raiz de $n1 = ".sqrt($n1);
		echo "<br><br>Valor arredondado de $n2 = ".round($n2); //a partir de 5 o arredondamento é pra cima, ceil arredonda para cima, floor arredonda para baixo, 		
		echo "<br><br>Parte inteira de $n2 = ".intval($n2);
		echo "<br><br> $n1 em moeda = ".number_format($n1,2,",", ".");
		"</td></tr>"; 
		
    ?>
</div>
</body>
</html>
 
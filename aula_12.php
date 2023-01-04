<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

	<h2>Aula 12</h2>
	
	<p>Exercício 01 - Mostrar uma contagem progressiva de 1 até 10.</p>

	<?php
	
		$cont = 0;
		
		do{
			
			echo $cont." - ";
			
			$cont += 2;
			
		}while($cont <= 20);
		
		echo "<br>";
		
		$cont = 20;
		
		do{
			
			echo $cont." - ";
			
			$cont -= 2;
			
		}while($cont >= 2);

	?>
	
	<p>Exercício 02 - Script para calcular o fatorial de um número inteiro.</p>
	
	<form method="get" actin="">
		<p>Valor: <input type="number" name="val" min="0" max="15" value="1"></p>
		
		<button class="botao" type="submit">Fatorial</button>	
	</form>
	
	<?php
	
		$v = isset($_GET["val"])?$_GET["val"]:1;
		
		echo "<p>Valor: $v<br>Fatorial:";
		
		$cont = $v;
		$fat = 1;
		
		do{
			echo "$fat - ";
			$fat = $fat * $cont;
			$cont--;
		}while($cont >= 1);
		
		echo "</p>";
	?>
	
	<p>Exercício 03 - Exibir a tabuada de um número escolhido pelo usuário, de 1 a 10.</p>
	
	<form method="get" actin="">
		<p>Numero: 
			<select name="num">
				<?php
					$cont = 1;
					
					do{
						
						echo "<option value='$cont'>$cont</option>";
						
						$cont++;
					
					}while($cont <= 10);
				?>
			</select>
		</p>
		
		<button class="botao" type="submit">Tabuada</button>	
	</form>
	
	<?php
		
		$n = isset($_GET["num"])?$_GET["num"]:1;
		$cont = 1;
		
		do{
			
			$r = $n * $cont;
			
			echo"<p>$n X $cont = <span class='foco'>$r</span></p>";
			
			$cont++;
			
		}while($cont <= 10);	
	?>
	
	<a class="botao" href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
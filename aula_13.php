<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	
	<h2>Aula 13</h2>
	
	<!--<p>Exercício 01 - Mostrar várias contagens utilizando a estrutura for</p>-->
	
    <?php
	
        /* for($i = 1; $i <= 10; $i++){
			echo $i." - ";
		}
		
		echo "<br>";
		
		for($i = 10; $i >= 1; $i--){
			echo $i." - ";
		}
		
		echo "<br>";
		
		for($i = 0; $i <= 50; $i+=5){
			echo $i." - ";
		}
		
		echo "<br>";
		
		for($i = 20; $i >= 0; $i-=2){
			echo $i." - ";
		} */
    ?>
	
	<!--<p>Exercício 02 - Exibir a tabuada de um número escolhido pelo usuário, de 1 a 10</p>
	
	<form method="get" action="">
		<p>Número:
			<select name="num">
				<?php
					for($i = 1; $i <= 10; $i++){
						echo "<option value='$i'>$i</option>";
					}				
				?>
			<select>		
		</p>		
		<button class="botao" type="submit">Tabuada</button>	
	</fom>-->
	
    <?php
	
		/* $num = isset($_GET["num"])?$_GET["num"]:1;
		
		echo "<p>Número: $num</p>
				<table border='1'>";
		
		for($i = 1; $i <= 10; $i++){
			$r = $num * $i;
			echo "<tr>
					<td> $num </td>
					<td> X </td>
					<td> $i </td>
					<td> = </td>
					<td> <span class='foco'>$r<span> </td></tr>";
		}
		
		echo "</table>"; */
    ?>
	
	<p>Exercício 03 - Verifique se um número digitado pelo usuário é primo.</p>
	
	<form method="get" action="">
		<p>Número: <input type="number" name="num" value="1" min="1" max="100"></p>
		<button class="botao" type="submit">Primo ?</button>
	</form>
	
	<?php
		$num = isset($_GET["num"])?$_GET["num"]:1;
		$total_m = 0;
		
		echo "<p>Número: $num</p>";
		echo "<p>Valores múltiplos: ";
		
		for($i = 1; $i <= $num; $i++){
			if(($num%$i) == 0){
				echo $i." - ";
				$total_m++;
			}			
		}
		
		if($total_m == 2){
			echo "</p><p>Total de múltiplos: $total_m</p>
						<p>Resultado: $num <span class='foco'>É Primo<span></p>";
		}else{
			echo "</p><p>Total de múltiplos: $total_m</p>
						<p>Resultado: $num <span class='foco'>Não é Primo<span></p>";
		}
	?>
	
	<a class="botao" href="javascript:history.go(-1)">Voltar</a>
	
</div>
</body>
</html>
 
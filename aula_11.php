<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

	<h2>Aula 11</h2>
	
	<!--<p>Exercício 01 - Mostrar uma contagem progressiva de 1 ate 10.</p>

    <?php
		
		/*$cont = 1;
		
		while($cont <= 10){
			
			echo "$cont - ";
			
			$cont++;
		}
		
		echo "<br>";
		
		$cont = 10;
		
		while($cont >= 1){
			
			echo "$cont - ";
			
			$cont--;
		}*/
		
    ?>
	
	<p>Exercício 02 - Criar dinamicamente 5 caixas de texto em um formulário.</p>
	
	<form method="get" action="aula_11.php">
		
		<?php
			/* $cont = 1;
			
			while($cont <= 5){
		
				echo "<p>Valor $cont: <input type='number' name='v$cont' max='100' min='0' value='0'</p>";
				
				$cont++;
		
			} */
		?>
		
		<br>
		<br>
		
		<button class="botao" type="submit">Enviar</button>
	</form>-->
	
	<?php
		/* $cont = 1;
		
		while($cont <= 5){
			$v = "num".$cont;
			$url = "v".$cont;
			
			$$v = isset($_GET[$url])?$_GET[$url]:0;
			
			$cont++;
		}
		
		$cont = 1;
		
		while($cont <= 5){
			$v = "num".$cont;
			
			echo "<p>Valor $cont: ".$$v."<br></p>";
			
			$cont++;
		} */
	
	?>
	
	<p>Exercício 03 - Criar um contador personalizável.</p>
	
	<form method="get" action="">
		<p>Inicio: <input type="number" name="inicio" value="0" min="0" max="100"</p>
		<p>Final: <input type="number" name="final" value="0" min="0" max="100"</p>
		
		<p>Incremento: 
			<select name="incremento">
				<?php
					$cont = 1;
					
					while($cont <= 5){
						echo "<option value='$cont'>$cont</option>";
						$cont++;
					}
				?>
			</select>
		</p>
		
		<button class="botao" type="submit">Enviar</button>
	</form>

	<?php
	
		$inicio = isset($_GET["inicio"])?$_GET["inicio"]:0;
		$final = isset($_GET["final"])?$_GET["final"]:0;
		
		$incremento = isset($_GET["incremento"])?$_GET["incremento"]:1;
		
		echo "<p>Inicio: $inicio<br>Final: $final<br>Incremento: $incremento</p>";
		
		if($inicio <= $final){
		
			echo "<p>Tipo: Incremento</p>";
		
			while($inicio <= $final){
				
				$num = $inicio;
				
				echo $num." - ";
				
				$inicio += $incremento;
				
			}
			
		}elseif($inicio >= $final){
		
			echo "<p>Tipo: Decremento</p>";
		
			while($inicio >= $final){
			
				$num = $inicio;
				
				echo $num." - ";
				
				$inicio -= $incremento;
			}
		}
	
	?>
	
	<br>
	<br>
	
	<a class="botao" href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
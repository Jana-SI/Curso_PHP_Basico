<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

	<h2>Aula 18</h2>
	
	<p>Exemplo 1 - array</p>
	
	<table border="1">
		<tr>	
		<?php
		
			$n[0] = 3;
			$n[1] = 5;
			$n[2] = 8;
			$n[3] = 2;
			
			//print_r($n);
			foreach($n as $valor){
				echo "<td> $valor </td>";
			}
			echo "</tr><tr>";
			
			$n[4] = 7;
			
			//print_r($n);
			foreach($n as $valor){
				echo "<td> $valor </td>";
			}
			echo "</tr><tr>";
			
			$n = array(3,5,8,2);
			
			//print_r($n);
			foreach($n as $valor){
				echo "<td> $valor </td>";
			}
			echo "</tr><tr>";
			
			$n[] = 7;
			
			//print_r($n);
			foreach($n as $valor){
				echo "<td> $valor </td>";
			}
		?>
		</tr>
	<table>
	
	<p>Exemplo 2 - range</p>
	
	<table border="1">
		<tr>
		<?php	
			$c = range(5, 20, 5); // começa com 5 ate 30, pulando de 2 em 2
			//print_r($c);
			
			foreach($c as $valor){
				echo "<td> $valor </td>";
			}

		?>
		</tr>
	<table>
	
	<p>Exemplo 3 - chave personalizada</p>
	
	<table border="1">
		<tr>
		<?php	
			
			$v = array(3=>5, 1=>9, 0=>8, 7=>7);
			unset($v[0]); //deslocar vetor
			
			//print_r($v);
			foreach($v as $k => $valor){
				echo "<td> $k => $valor </td>";
			}
			
		?>
		</tr>
	<table>
	
	<p>Exemplo 4 - chaves Associativas</p>
	
	<table border="1">
		<tr>
		<?php	
			$v = array("nome" => "Jana", "idade" => 23, "peso" => 80);
			
			//print_r($v);
			foreach($v as $k => $c){
				echo "<td> $k => $c </td>";
			}
		?>
		</tr>
	<table>
	
	<p>Exemplo 5 - Matriz - vetor dentro de vetor</p>
	
	<table border="1">
		<?php	
			$v = array(array(6,4), array(4,9),array(3,2));
			
			//echo "<pre>";
			//print_r($v);
			//echo "</pre>";
			
			foreach($v as $y){
				echo "<tr>";
				foreach($y as $x){
					echo "<td> $x </td>";
				}
				echo "</tr>";
			}
		?>
	<table>
	
	<br>
	<a class="botao" href="javascript:history.go(-1)">Voltar</a>
	
</div>
</body>
</html>
 
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  
  <style>
	#div1 {
		display: flex;
	}
	table {
		border: 2px solid black;
		margin: auto;
	} 
  
  </style>
  
</head>
<body>
<div>

	<h2>Aula 19</h2>
	
	<p>funções em vetores </p>
	
	<table border="1">
	<?php
		$n = array("A","J","M","X","K");
		
		echo "<tr><td> key </td><td> valor </td></tr>";

		foreach($n as $k => $valor){
			echo "<tr><td> $k </td><td> $valor </td></tr>";
		}	
	?>
	</table>
	
	<ol>
		<li><span class="foco">var_dump</span>: mesmo q print_r so q mais completo, tipo dos elementos e quantidade de itens no vetor</li>
		<pre>
		<?php				
			var_dump($n); // mesmo q print_r so q mais completo, tipo dos elementos e quantidade de itens no vetor
		?>
		</pre>
		
		<li><span class="foco">count</span>: obtem quantidade de elementos q vetor tem.</li>
		<?php				
			echo "<p>Quantidade de elementos: ".count($n)."</p>";			
		?>

		<li><span class="foco">array_push</span>: coloca o valor no final do vetor</li>
		<table border="1">
		<?php			
			array_push($n,"O");
			
			echo "<tr><td> key </td><td> valor </td></tr>";

			foreach($n as $k => $valor){
				echo "<tr><td> $k </td><td> $valor </td></tr>";
			}
			
		?>
		</table>
		
		<li><span class="foco">array_pop</span>: elimina ultimo elemento do vetor</li>
		<table border="1">
		<?php			
			array_pop($n);
			
			echo "<tr><td> key </td><td> valor </td></tr>";

			foreach($n as $k => $valor){
				echo "<tr><td> $k </td><td> $valor </td></tr>";
			}
			
		?>
		</table>
		
		<li><span class="foco">array_unshift</span>: coloca o valor no inicio do vetor</li>
		<table border="1">
		<?php			
			array_unshift($n, "O");
			
			echo "<tr><td> key </td><td> valor </td></tr>";

			foreach($n as $k => $valor){
				echo "<tr><td> $k </td><td> $valor </td></tr>";
			}
			
		?>
		</table>

		<li><span class="foco">array_shift</span>: elimina primeiro elemento do vetor</li>
		<table border="1">
		<?php			
			array_shift($n);
			
			echo "<tr><td> key </td><td> valor </td></tr>";

			foreach($n as $k => $valor){
				echo "<tr><td> $k </td><td> $valor </td></tr>";
			}
			
		?>
		</table>
		
		<li><span class="foco">sort</span>: ordena os elementos do vetor(crescente)</li>
		<table border="1">
		<?php			
			sort($n);
			
			echo "<tr><td> key </td><td> valor </td></tr>";

			foreach($n as $k => $valor){
				echo "<tr><td> $k </td><td> $valor </td></tr>";
			}
			
		?>
		</table>
		
		<li><span class="foco">rsort</span>: ordena os elementos do vetor(decrescente)</li>
		<table border="1">
		<?php			
			rsort($n);
			
			echo "<tr><td> key </td><td> valor </td></tr>";

			foreach($n as $k => $valor){
				echo "<tr><td> $k </td><td> $valor </td></tr>";
			}
			
		?>
		</table>
		
		<li><span class="foco">asort</span>: ordena os elementos do vetor(crescente), mas mantem os indices</li>
		<table border="1">
		<?php	
			
			$n = array("A","J","M","X","K");
			
			asort($n);
			
			echo "<tr><td> key </td><td> valor </td></tr>";

			foreach($n as $k => $valor){
				echo "<tr><td> $k </td><td> $valor </td></tr>";
			}
			
		?>
		</table>
		
		<li><span class="foco">arsort</span>: ordena os elementos do vetor(decrescente), mas mantem os indices</li>
		<table border="1">
		<?php	
			
			$n = array("A","J","M","X","K");
			
			arsort($n);
			
			echo "<tr><td> key </td><td> valor </td></tr>";

			foreach($n as $k => $valor){
				echo "<tr><td> $k </td><td> $valor </td></tr>";
			}
			
		?>
		</table>
		
		<li><span class="foco">ksort</span>: ordena os indices do vetor(crescente), mas mantem os valores</li>
		<span id="div1">
		<?php	
			
			$n = array(2=>"A",5=>"J",0=>"M",3=>"X",4=>"K");
			
			echo "<table border='1'><tr><td> key </td><td> valor </td></tr>";

			foreach($n as $k => $valor){
				echo "<tr><td> $k </td><td> $valor </td></tr>";
			}
			echo "</table>";
			ksort($n);
			
			echo "<table border='1'><tr><td> key </td><td> valor </td></tr>";

			foreach($n as $k => $valor){
				echo "<tr><td> $k </td><td> $valor </td></tr>";
			}
			echo "</table>";
		?>
		</span>
		
		<li><span class="foco">krsort</span>: ordena os indices do vetor(decrescente), mas mantem os valores</li>
		<span id="div1">
		<?php	
			
			$n = array(2=>"A",5=>"J",0=>"M",3=>"X",4=>"K");
			
			echo "<table border='1'><tr><td> key </td><td> valor </td></tr>";

			foreach($n as $k => $valor){
				echo "<tr><td> $k </td><td> $valor </td></tr>";
			}
			
			echo "</table>";
			
			krsort($n);
			
			echo "<table border='1'><tr><td> key </td><td> valor </td></tr>";

			foreach($n as $k => $valor){
				echo "<tr><td> $k </td><td> $valor </td></tr>";
			}
			
			echo "</table>";
		?>
		</span>	
	</ol>
	
	<br>
	<a class="botao" href="javascript:history.go(-1)">Voltar</a>
	
</div>
</body>
</html>
 
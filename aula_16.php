<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

	<h2>Aula 16 - lista de funções para Strings pt1</h2>
	
	<ol>
	
		<li><span class="foco">Printf</span>: printa ja formatado</li>
		<br>
		<?php
        
			$p = "Leite";
			$pr = 4.5;
			
			printf ("O %s custa RS %.2f.", $p, $pr);//%d valor decimal (positivo ou negativo), %u valor decimal sem sinal(apenas positivos), %f valor real, %s string
		
		?>
		
		<br>
		<br>
		<li><span class="foco">Print_r</span>: mostrar detalhes de uma variavel, principalmente se for um vetor, util para testes, var_dump, var_export</li>

		<br>
		<?php
		
			$v[0] = 4;
			$v[1] = 8;
			$v[2] = 3;
			
			print_r($v);
			echo "<br>";
			
			var_dump($v);
			echo "<br>";
			
			var_export($v);
			echo "<br>";
			
			/* $v2 = array(3,7,6,2,1,9);
			print_r($v2); */
			
		?>
		
		<br>
		<li><span class="foco">wordwrap</span>: quebra valor dentro do codigo html, quando add tag br quebra o texto na pagina, true e false quebra por palavra ou letras.</li>

		<?php
			
			$txt = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap.";
			$r = wordwrap($txt,20,"<br>\n",true);
			
			echo "<p>$r</p>";
			
		?>
		
		<li><span class="foco">Strlen</span></li>

		<?php
			$txt = "Curso em Vídeo";
			$t = strlen($txt);
			
			echo "<p>string:$txt <br>tamanho $t</p>";
		?>

		<li><span class="foco">Trim</span>: remove os espaços do inicio e do fim da string</li>

		<?php
			
			$nome = "   Janaina da Silva   ";
			$t = strlen($nome);
			echo "<p>$nome - $t - com espaços</p>";
			
			$novo = trim($nome);
			$t = strlen($novo);
			echo "<p>$novo - $t - sem espaços</p>";
			
		?>
		
		<li><span class="foco">ltrim</span>: remove os espaços do inicio da string</li>

		<?php
			$nome = "   Janaina da Silva   ";
			$t = strlen($nome);
			echo "<p>$nome - $t - com espaços</p>";
			
			$novo = ltrim($nome);
			$t = strlen($novo);
			echo "<p>$novo - $t - sem espaços do inicio</p>";
		?>
		
		<li><span class="foco">rtrim</span>: remove os espaços do final da string</li>

		<?php
			$nome = "   Janaina da Silva   ";
			$t = strlen($nome);
			echo "<p>$nome - $t - com espaços</p>";
			
			$novo = rtrim($nome);
			$t = strlen($novo);
			echo "<p>$novo - $t - sem espaços do final</p>";
		?>
		
		<li><span class="foco">str_word_count</span>: quantidade de palavras q tem na string</li>

		<?php
			$frase = "Eu vou estudar PHP";
			$cont = str_word_count($frase,0); //0 conta, 1 vetor, 2 vetor mantendo posiçao de cada palavra dentro da string
			
			echo "<p>$frase - $cont</p>";
		?>
		
		<li><span class="foco">explode</span>: pega cada palavra e coloca num indice.</li>

		<?php
			$site = "Curso em Video";
			$vetor = explode(" ",$site);
			
			echo "<p>";
			print_r($vetor);
			echo "</p>";
		?>
		
		<li><span class="foco">str_split</span>: pega cada letra e coloca num indice</li>

		<?php
			$nome = "Maria";
			$vetor = str_split($nome);
			
			echo "<p>";
			print_r($vetor);
			echo "</p>";
		?>		
		
		<li><span class="foco">implode</span>: transforma vetor em uma string</li>

		<?php
			$vetor[0] = "Curso";
			$vetor[1] = "em";
			$vetor[2] = "Vídeo";
			
			$texto = implode("#",$vetor);//join
			
			echo "<p>$texto</p>";
		?>
		
		<li><span class="foco">chr</span>: que letra esta no codigo recebido</li>

		<?php
			$letra = chr(67);
			echo "<p>Letra do codigo 67 é $letra</p>";
		?>
		
		<li><span class="foco">ord</span>: que codigo esta na letra recebida.</li>

		<?php
			$letra = "C";
			$cod = ord($letra);
			
			echo "<p>Letra C é o codigo $cod</p>";
		?>
		
	</ol>
	
	<a class="botao" href="javascript:history.go(-1)">Voltar</a>
	
</div>
</body>
</html>
 
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

	<h2>Aula 17 - lista de funções para Strings pt2</h2>
	
	<ol start="14">
	
		<li><span class="foco">strtolower</span>: transforma as letras da string em minúscula</li>
		
		<?php
			$nome = "Janaina da Silva";
			
			echo "<p>$nome - ".strtolower($nome)."</p>";
		?>
		
		<li><span class="foco">strtoupper</span>: transforma as letras da string em maiúscula</li>
		
		<?php
			$nome = "Janaina da Silva";
			
			echo "<p>$nome - ".strtoupper($nome)."</p>";
		?>
		
		<li><span class="foco">ucfirst</span>: transforma a primera letra da string em minúscula</li>
		
		<?php
			$nome = "janaina da silva";
			
			echo "<p>$nome - ".ucfirst($nome)."</p>";
		?>
		
		<li><span class="foco">ucwords</span>: transforma a primera letra de cada palavra da string em minúscula</li>
		
		<?php
			$nome = "janaina da silva";
			
			echo "<p>$nome - ".ucwords($nome)."</p>";
		?>
		
		<li><span class="foco">strrev</span>: inverte string</li>
		
		<?php
			$nome = "janaina da silva";
			
			echo "<p>$nome - ".strrev($nome)."</p>";
		?>
		
		<li><span class="foco">strpos</span>: encontra a posição da string pesquisada.</li>
		
		<?php
			$frase = "Estou aprendendo PHP";
			$pos = strpos($frase, "PHP");
			
			echo "<p>$frase - PHP esta na posição $pos</p>";
		?>	
		
		<li><span class="foco">stripos</span>: encontra a posição da string pesquisada, mesmo se tiver em minúscula ou maiúscula.</li>
		
		<?php
			$frase = "Estou aprendendo PHP";
			$pos = stripos($frase, "php");
			
			echo "<p>$frase - php esta na posição $pos</p>";
		?>	
		
		<li><span class="foco">substr_count</span>: conta quantas vezes uma palavra aparece na string.</li>
		
		<?php
			$frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
			$cont = substr_count($frase,"PHP");
			
			echo "<p>$frase<br>PHP encontrado $cont vezes</p>";
		?>	
		
		<li><span class="foco">substr</span>: pega uma substring da posição desejada.</li>
		
		<?php
			$site = "Curso em Video";
			$sub = substr($site,0,5);
			
			echo "<p>$site<br>$sub</p>";
		?>	
		
		<li><span class="foco">str_pad</span>: preenche uma string na esquerda, direita ou ambos os lados.</li>
		
		<?php
		
			$nome = "Janaina";
			$novo = str_pad($nome, 30, "-", STR_PAD_RIGHT);
			$novo1 = str_pad($nome, 30, "-", STR_PAD_BOTH);
			$novo2 = str_pad($nome, 30, "-", STR_PAD_LEFT);
			
			echo "<p>$novo é namorada do Carlos</p>";
			echo "<p>$novo1 é namorada do Carlos</p>";
			echo "<p>$novo2 é namorada do Carlos</p>";
			
		?>
		
		<li><span class="foco">str_repeat</span>: repetir determinada string.</li>
		
		<?php
		
			$txt = str_repeat("PHP",5);
			
			echo "<p>$txt</p>";
			echo str_repeat("-", 20);
			
		?>
		
		<li><span class="foco">str_replace</span>: substitui uma palavra pela outra na string.</li>
		
		<?php
		
			$frase = "Gosto de estudar Matemática!!!";
			$n_frase = str_ireplace("matemática", "PHP", $frase); //str_ireplace ignora se eh maiuscula ou minuscula
			
			echo "<p>$frase</p>";
			echo "<p>$n_frase</p>";
			
		?>
		
	</ol>
	
	<a class="botao" href="javascript:history.go(-1)">Voltar</a>
	
</div>
</body>
</html>
 
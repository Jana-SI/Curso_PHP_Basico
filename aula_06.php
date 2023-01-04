<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

	<h2>Aula 6</h2>
	
    <?php
		echo "----------------------------------------------------------------------------------";
        echo "<p>Exercício 01 - Aplicar 10% de desconto e aumento ao preço de um produto</p>";
		
		$preco = $_GET["p"];
		
		echo "<p>Preço: R$ ".number_format($preco, 2, ",", ".")."</p>";
		
		$preco += ($preco*10/100);
		
		echo "<p>Aumento = R$ ".number_format($preco, 2, ",", ".")."</p>";
		
		$preco -= ($preco*10/100);
		
		echo "<p>Desconto = R$ ".number_format($preco, 2, ",", ".")."</p>";
		
		echo "----------------------------------------------------------------------------------";
		
		echo "<p>Exercício 02 - Mostrar qual foi o ano anterior ao ano atual</p>";
		
		$ano_atual = $_GET["aa"];
		
		echo "<p>Ano atual: $ano_atual</p>";
		echo "<p>Ano anterior: ".--$ano_atual."</p>";//pré-incremento(++$a), pós-incremento($a++), pré-decremento(--$a) e pós-decremento($a--) 
		
		echo "----------------------------------------------------------------------------------";
		
		echo "<p>Exercício 03 - Vamos praticar o uso de variaveis referenciadas</p>";
		
		$a = 3;
		$b = &$a;
		$b += 5;
		
		echo "<p>A = $a</p>";
		echo "<p>B = $b</p>";
		
		echo "----------------------------------------------------------------------------------";
		
		$x = "abc";
		$$x = "def";
		
		echo $x."<br>".$abc;
		echo "<br>'\$x'$x <br> '\$abc' $abc";
    ?>
</div>
</body>
</html>
 
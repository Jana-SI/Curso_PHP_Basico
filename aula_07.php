<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>

	<h2>aula 7</h2>
	
    <?php
	
	/* Operadores Relacionais

		maior >
		menos <
		maior ou igual >=
		menor ou igual <=
		diferente <> , !=
		igual ==
		identico === (do mesmo tipo e iguais) 

		operador unário
		expressão ? verdadeiro : falso*/
		echo "----------------------------------------------------------------------------------";
		
		echo "<p>Exercício 01 - Permitir que o usuário escolha entre somar e multiplicar dois números</p>";
		
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		
		$tipo = $_GET["op"];
		
		echo "<p>A: $n1, B: $n2</p>";
		
		$r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;
		
		echo "<p>Resultado: $r</p>";
		
		echo "----------------------------------------------------------------------------------";
		
		echo "Exemplo de igual e identico";
		
		$a = 3;
		$b = "3";
		
		$r = ($a === $b) ? "SIM" : "NÃO";
		
		echo "<p>A: $a e B: $b são identicas: $r</p>";
		
		echo "----------------------------------------------------------------------------------";
		
		echo "<p>Exercício 03 - Mostrar a situação de um aluno, de acordo com a sua média obtida</p>";
		
		$nota1 = $_GET["n1"];
		$nota2 = $_GET["n2"];
		
		$media = ($nota1 + $nota2)/2;
		
		echo "<p>Nota 1: $nota1, Nota 2: $nota2</p>";
		echo "<p>Media: $media</p>";
		
		//$situacao = ($media < 6) ? "REPROVADO" : "APROVADO";
		
		echo "<p>Situação: ".(($media < 6) ? "REPROVADO" : "APROVADO")."</p>";
		
		echo "----------------------------------------------------------------------------------";
		/* operadores logicos
		e = and , &&
		ou = or, ||
		ou exclusivo = xor
		nao = ! */
		
		echo "<p>Exercício 04 - Mostrar se um eleitor é obrigado a votar ou não</p>";
		
		$ano = $_GET["ano"];
		$idade = 2022 - $ano;
		
		echo "<p>Ano de nascimento: $ano<br>Idade: $idade</p>";
		
		$tipo = ($idade >= 18 && $idade < 65) ? "OBRIGATORIO" : "NÃO OBRIGATORIO";
		
		echo "<p>Tipo de voto: $tipo</p>";
    ?>
</div>
</body>
</html>
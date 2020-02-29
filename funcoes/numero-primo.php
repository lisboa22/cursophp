<form>
    <input type="text" name="nome">
    <input type="submit" value="OK">    
</form>




<?php 

/**
 * impressão de números primos de 1 a 100
 *
 * Números primos são aqueles que só são divisíveis por 1 e por ele mesmo. Logo
 * ele possui apenas 2 divisores.
 */


//Função para Testar se um Número é Primo.


foreach ($_GET as $key) 
{

	function verificaNumeroPrimo($numero)
	{ 

		// variavel que armazena o número de divisores de um número
		$divisores = 0;
		    
		// recupera o nº atual no loop e, a partir dele, o decrementa até chegar a 1 
		for($j = $numero; $j >= 1; $j--)
		{
			// se o número do 1º loop for divisível por algum número anterior a ele, ou seja, resto 0 
		    // incrementa o número de divisores
		    if (($numero % $j) == 0)
		    {
		        	
		    	$divisores++;

		    }
		}

		     
		// se o número do loop principal tiver exatamente 2 divisores
		// (lembre-se, nº primos tem somente 2 divisores: 1 e ele próprio), exibe o nº primo
		if ($divisores == 2)
		{
		    echo "O número: $numero - É um número Primo.<br><br>";

		} else {

		    	echo "O número: $numero - Não é um número Primo.<br><br>";

		}

	}
	
verificaNumeroPrimo($key);

}



//Função para Gerar Números Primos sequênciais.



foreach ($_GET as $key)
{
	
	function imprimeNumeroPrimo($numero)
	{ 
		// loop de 1 a 100
		for($i = 1; $i <= $numero; $i++)
		{
			if ((($i % 2) != 0) || ($i==2))
			{

		    	// variavel que armazena o número de divisores de um número
		    	$divisores = 0;
		     
		    	// recupera o nº atual no loop e, a partir dele, o decrementa até chegar a 1 
			    for($j = $i; $j >= 1; $j--)
			    {
			        // se o número do 1º loop for divisível por algum número anterior a ele, ou seja, resto 0 
			        // incrementa o número de divisores
			        if (($i % $j) == 0)
			        {
			        	
			            $divisores++;

			        }
			    }

			    // se o número do loop principal tiver exatamente 2 divisores
			    // (lembre-se, nº primos tem somente 2 divisores: 1 e ele próprio), exibe o nº primo
			    if ($divisores == 2)
			    {

			        echo $i . ', ';

			    } 

			}

		}

	}

//imprimeNumeroPrimo($key);

} 

 ?>
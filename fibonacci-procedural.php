<form method="get">
	<label for="numeroLimite">Número Limite: </label>
	<input type="number"  name="numeroLimite" id="numeroLimite"><br>
	
	<input type="submit" name="submit" value="Rodar">
</form>
<?php	
	$numLimit = $_GET["numeroLimite"];
	$fib = [ 0, 1 ];#Primeiro e segundo elementos na cadeia de Fibonacci
	
	if($_GET['submit'] == "Rodar")
	{
		for( $i = 0 ; $i+2 < $numLimit ; $i++)#"Mágica" de Fibonacci.
		{
			$fib[$i+2] =  $fib[$i] + $fib[$i+1]; 
		}
		for($i = 0; $i < $numLimit; $i++)#Imprimir parciais.
		{
			echo ($i+1)."º -> ".$fib[$i]."<br>";
		}
		echo "<br>Resultante: ".end($fib);#Imprimir resultante.
	}
?>
<br><br><hr>
<form method="get">
	<input type="submit" value="Zerar">
</form>
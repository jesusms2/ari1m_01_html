<h1>Ejercicio 2:</h1>
<h2>Se quiere construir un jardín de 1 m de ancho alrededor de una fuente circular de 4 m de diámetro.Si la profundidad de la fuente es de 0.75 m ¿cuántos litros caben? </h2>
<form>
<input id="a" name="a" placeholder="Diámetro" value="4" onkeyup="calcular2()"/>
<input id="b" name="b" placeholder="Profundidad" value="0.75" onkeyup="calcular2()"/> 
<button onclick="calcular2()"> Calcular </button>
</form>
<h7>Resultado:</h7>
<div id="d">Resultado</div>
	<script>
	function calcular2(){
	a=document.getElementById('a').value;
	b=document.getElementById('b').value;
	c=Math.PI* (a/2) * (a/2) * b;
	d=Math.round(c*100) / 100;
	document.getElementById('d').
	innerHTML=d+ ' litros.';
}		
calcular2();
</script>
<?php
if(isset (
$_GET['a'])) {$a=$_GET['a'];
$b=$_GET['b']; 
echo 'Resultado: '.(3.14* ($a/2) * ($a/2) * $b).' litros.';
}
?>
</div>

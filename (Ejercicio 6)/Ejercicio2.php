<h1> Segundo ejercicio  </h1>
<h7> Calcula el área de un trapecio de 10cm de altura y cuyas bases miden 200mm y 160 mm. Expresa la medida en centímetros cuadrados.</h7> 

<form>

	Base1 <input id="b1" name="b1" value="20" placeholder="Base1" onkeyup="calcular()" />
	Base 2 <input id="b2" name="b2" value="16" placeholder="base2" onkeyup="calcular()"/>
	Altura <input id="A" name="A" value="10" placeholder="Altura" onkeyup="calcular()"/>
	<button onclick="calcular()"> Calcular </button>
</form>
<div id="e" style="
	padding:15px;
	background-color:blue;
	">
	Resultado
</div>
<script>

	function calcular(){
		b1=document.getElementById("b1").value;
		b2=document.getElementById("b2").value;
		A=document.getElementById("A").value;
		d=((b1/1) + (b2/1))/2
		e=d*A
		
		document.getElementById('e').innerHTML= e +' cm^2';
		}calcular();
</script>
<?php
	if(isset($_GET)) print_r($_GET);
?>
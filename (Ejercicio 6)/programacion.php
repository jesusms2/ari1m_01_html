<h1>Ley de Ohm</h1>
<form>
V <input placeholder="Voltaje" 
	value="30" id="v" name="v" onkeyup="calcular()"/>
R <input placeholder="Resistencia"
	value="1"/ id="r" name="r" onkeyup="calcular()">
<button onclick="calcular()">Calcular</button>
</form>
<div id="i" style="
	padding:20px;
	background-color:pink;
">
Resultado
</div>

<script>
//alert('hola mundo');
//console.log('hola otra vez');
function calcular(){
	v=document.getElementById('v').value;
	r=document.getElementById('r').value;
	i=v/r;
	document.getElementById('i').innerHTML=i+' Amperios';
}
calcular();
</script>

<?php
if(isset($_GET['r'])){
	$r = $_GET['r'];
	$v = $_GET['v'];
	echo 'Intensidad eléctrica: '.($v/$r);
	
}
?>

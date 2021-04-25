
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maxium-scale=2">
</head>
<h1><center>Provincias</center></h1>

<pre>
<?php
$provincias=[
	['Galicia','La Coruña','1122799','7950'],
	['Galicia','Lugo','336527','9856'],
	['Galicia','Orense','314853','7273'],
	['Galicia','Pontevedra','944346','4494'],
	['Principado de Asturias','Asturias','1042608','10603'],
	['Cantabria','Cantabria','582206','5321'],
	['País Vasco','Vizcaya','1147576','2217'],
	['País Vasco','Guipúzcoa','717832','1997'],
	['País Vasco','Álava','324126','3037'],
	['La Rioja','La Rioja','315794','5045'],
	['Comunidad Foral de Navarra','Navarra','640647','10391'],
	['Aragón','Huesca','221079','15636'],
	['Aragón','Zaragoza','950507','17274'],
	['Aragón','Teruel','136977','14809'],
	['Cataluña','Barcelona','5542680','7733'],
	['Cataluña','Tarragona','792299','6302'],
	['Cataluña','Lérida','434041','12172'],
	['Cataluña','Gerona','753576','5909'],
	['Comunidad Valenciana','Castellón','579245','6636'],
	['Comunidad Valenciana','Valencia','2544264','10807'],
	['Comunidad Valenciana','Alicante','1836459','5817'],
	['Región de Murcia','Murcia','1464847','11313'],
	['Andalucía','Huelva','519596','10127'],
	['Andalucía','Sevilla','1939775','14036'],
	['Andalucía','Córdoba','791610','13771'],
	['Andalucía','Jaén','648250','13496'],
	['Andalucía','Almería','704297','8775'],
	['Andalucía','Granada','915392','12646'],
	['Andalucía','Málaga','1629298','7306'],
	['Andalucía','Cádiz','1239889','7440'],
	['Extremadura','Cáceres','403665','19868'],
	['Extremadura','Badajoz','684113','21766'],
	['Comunidad de Madrid','Madrid','6466996','8027'],
	['Castilla y León','León','473604','15580'],
	['Castilla y León','Zamora','180406','10561'],
	['Castilla y León','Salamanca','335985','12349'],
	['Castilla y León','Palencia','164644','8052'],
	['Castilla y León','Burgos','360995','14022'],
	['Castilla y León','Valladolid','523679','8110'],
	['Castilla y León','Ávila','162514','8050'],
	['Castilla y León','Segovia','155652','6920'],
	['Castilla y León','Soria','90040','10306'],
	['Castilla-La Mancha','Toledo','688672','15369'],
	['Castilla-La Mancha','Ciudad Real','506888','19813'],
	['Castilla-La Mancha','Albacete','392118','14926'],
	['Castilla-La Mancha','Cuenca','201071','17140'],
	['Castilla-La Mancha','Guadalajara','252882','12214'],
	['Canarias','Santa Cruz de Tenerife','1004124','3381'],
	['Canarias','Las Palmas','1097800','4065'],
	['Islas Baleares','Baleares','1107220','4991'],
];


$campos=[
	'autonomia','provincia','poblacion','superficie'
];
foreach($provincias as $i=>$p) foreach($p as $j=>$dato){
	$provincias[$i][$campos[$j]]=$dato;
	unset($provincias[$i][$j]);
}
?>
<script>
provincias=<?=json_encode($provincias)?>;
console.log(provincias);
</script>

<h2><center>29) ¿Cuánto mide el nombre de autonomía más corto?</center></h2>
<br/>
<?php

$numero = 1000000;
$menor = " ";
foreach($poblacion as $var1){
	if($numero < strlen($var1['$poblacion'])){
		$numero = strlen($var1['$poblacion']);
		$menor=$var1;
		echo $menor['$poblacion'] . " con " . $numero . " caracteres";
	}
}
?>


</div>
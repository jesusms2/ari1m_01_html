<!DOCTYPE html>
<html>
	<head>
	
	</head>
	<body>
		<table border="1">
			<tr>
				<td width="25%">
					<h1>
						Problema 1
					</h1>
						</td><td width="25%">
					<h1>
						Problema 2
					</h1>
						</td><td width="25%">
					<h1>
						Problema 3
					</h1>
						</td><td width="25%">
					<h1>
						Problema 4
					</h1>
				</td>
			</tr><tr>
				<td>
					<h2>
						Se quiere construir un jardín de Xm de ancho alrededor de una fuente circular de Ym de diámetro. ¿Qué superficie ocupa la fuente?
					</h2>
						</td><td>
					<h2>
						Calcula el perímetro y el área de un hexágono regular de Xcm de lado
					</h2>
						</td><td>
					<h2>
						En el año 2010 la edad de Ana era el triple de la de su hija María. En 2015, sus edades sumaban 54 años. ¿Qué edad tenía María en 2010? ¿En qué año nació María? ¿Qué años tenía su madre cuando nació María?
					</h2>
						</td><td>
					<h2>
						Queremos fabricar una caja de base cuadrada, de tal manera que la altura de la caja más el perímetro de la base sumen 60 cm. Determina sus dimensiones para que contenga el mayor volumen posible
					</h2>
				</td>
			</tr><tr>
				<td>
					<form>
						<label> Ancho del Jardin:</label> <p>
						<input id="r" name="r" placeholder="Ancho del Jardin" value="1" onkeyup="calculo()"/> <p>
						<label> Diametro de la fuente:</label> <p>
						<input id="d" name="d" placeholder="Diametro de la fuente" value="4" onkeyup="calculo()"/> <p>
						<p id="S"></p>
						<button type="button" onclick="calculo()">calcular</button>
					</form>
						</td><td>
					<form>
						<label> lado del hexagono :</label> <p>
						<input id="l" name="l" placeholder="lado del hexagono" value="8" onkeyup="calculo2()"/> <p>
						<p id="s2"></p>
						<button type="button" onclick="calculo2()">Calcular</button>
					</form>
						</td><td>
					<form>
						<label> Año de entrada:</label> <p>
						<input id="an1" name="an1" placeholder="año de entrada" value="2010" onkeyup="calculo3()"/> <p>
						<label> diferencia de edad: </label> <p>
						<input id="dif" name="dif" placeholder="diferencia de edad" value="3" onkeyup="calculo3()"/> <p>
						<label> Año de salida:</label> <p>
						<input id="an2" name="an2" placeholder="Año de salida" value="2015" onkeyup="calculo3()"/> <p>
						<label> suma de edad:</label> <p>
						<input id="su" name="su" placeholder="suma de edad" value="54" onkeyup="calculo3()"/> <p>
						<p id="S3"></p>
						<button type="button" onclick="calculo3()">Calcular</button>
					</form>
						</td><td>
					<form>
						<label> suma perimetro de base y altura:</label> <p>
						<input id="u" name="u" placeholder="calculo de cosa" value="60" onkeyup="calculo4()"/> <p>
						<p id="s4"></p>
						<button type="button" onclick="calculo4()">Calcular</button>
					</form>
				</td>
			</tr><tr>
				
			</tr>
		</table>
		<script>
		function calculo(){
			r=document.getElementById("r").value;
			d=document.getElementById("d").value;
			ad=2*3.14*d;
			ar=2*3.14*r;
			q=ad-ar;
			document.getElementById('S').innerHTML = q +" m2";
		}
		function calculo2(){
			l=document.getElementById("l").value;
			p=6*l;
			ap=Math.sqrt(l+l/2);
			a=p*ap/2;
			document.getElementById('s2').innerHTML = p +' cm '+ a + 'cm2';
		}
		function calculo3(){
			an1=document.getElementById("an1").value;
			dif=document.getElementById("dif").value;
			an2=document.getElementById("an2").value;
			su=document.getElementById("su").value;
			ano=an2-an1;
			ano1=2*ano;
			em1=su-ano1;
			cons= 1;
			em2= cons+parseInt(dif);
			em=em1/em2;
			ea=3*em;
			amn=an1-em;
			eanm=ea-em;
			document.getElementById('S3').innerHTML = 'Ana tiene ' + ea + ' años y su hija ' + em + ' años. Maria nacio en ' + amn + ' y su madre tenia ' + eanm + ' años';
		}
		function calculo4(){
			u=document.getElementById("u").value;
			x=2*u/12;
			y= u-(4*x)	;
			v=x*x*y;
			document.getElementById('s4').innerHTML = "Tiene un volumen de " + v + " cm^3";
			}
		</script>
	</body>
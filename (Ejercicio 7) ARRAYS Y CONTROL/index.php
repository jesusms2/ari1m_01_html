<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maxium-scale=2">
</head>
<h1>Problemas de Arrays y control</h1>
<br/>
<h2>Muestra el listado ordenado de meses que contengan la letra R:   </h2>
<br/>
<h3>Problema 1 con PHP:</h3>
<pre> 

<?php
      // arrays
      $meses = [
         "Enero",
         "Febrero",
         "Marzo",
         "Abril",
         "Mayo",
         "Junio",
         "Julio",
         "Agosto",
         "Septiembre",
         "Octubre",
         "Noviembre",
         "Diciembre",
      ];

      foreach ($meses as $mes) {

         if (strstr($mes, "r"))
            echo "<div>" . $mes . "</div>";
      }
      ?>
<h3>Problema 1 con JS:</h3> 
   <div id="m"> </div>
     
<script>
meses= [
"Enero",
"Febrero",
"Marzo",
"Abril",
"Mayo",
"Junio",
"Julio",
"Agosto",
"Septiembre",
"Octubre",
"Noviembre",
"Diciembre",
];

for(i in meses){

   
}
txt="";
for(i in meses)
if (meses[i].indexOf("r")>0)
txt+= meses[i]+"<br/>";
document.getElementById("m").innerHTML=txt;
</script>

<h2>Almacena en un array la tabla de las potencias de 2 y muestra el 
contenido del array:   </h2>
<h3>Problema 2 con PHP :</h3> 
   <?php
   $tabla = [];

   for ($i = 0; $i <= 20; $i++)

      $tabla[] = 2 ** $i;

   print_r($tabla);
   ?>


<h3>Problema 2 con JS:</h3> 
   <div id="p"> </div>
   <script>
   tabla = [];
   txt="";
   for (i = 0; i <= 20; i++){
   tabla[i] = 2**i;
   txt+= tabla[i]+"<br/>";
document.getElementById("p").innerHTML=txt;
} 
   // document.getElementById("p").innerHTML += tabla;
   // console.log(tabla); 
 </script>


<h2>Crea un array con el nombre de tus compañeros, en qué puesto se sienta y
reubícalos por su nombre de pila mostrando ambas tablas</h2>
    <br/>
<h3>Problema 3 con PHP:</h3>

   <?php
 
   $companeros =[
      'Andrei',
      'Fabian',
      'Hector',
      'Gabriel',
      'Nury',
      'Agus',
      'Jesus',
      'Ismael',
      'Jose',
      'Alfonso',
      'Javier',
      'Rodrigo',
      'Alvaro',
      'Darius',
      'Ivan',
      
   ];
   $puestos =[
      "1",
      '2',
      '3',
      '4',
      '5',
      '6',
      '7',
      '8',
      '9',
      '10',
      '11',
      '12',
      '13',
      '14',
      '15',
      
        
     
      
   ];
   $companerosordenados=$companeros;
   
   sort($companeros);
   for ($i=0; $i < count($companeros); $i++) {
   
   echo $puestos [$i]."-";
   echo $companerosordenados[$i]."-";
   echo $companeros [$i]."<br/>";
   echo "<br>";
   }
   ?>
   <br/>
<h3>Problema 3 con PHP:</h3>
<br/>
   <div id="x"> </div>
   <script>
   companeros =[
      'Andrei',
      'Fabian',
      'Hector',
      'Gabriel',
      'Nury',
      'Agus',
      'Jesus',
      'Ismael',
      'Jose',
      'Alfonso',
      'Javier',
      'Rodrigo',
      'Alvaro',
      'Darius',
      'Ivan',
      
   ];
   companerossinordenar =[
      'Andrei',
      'Fabian',
      'Hector',
      'Gabriel',
      'Nury',
      'Agus',
      'Jesus',
      'Ismael',
      'Jose',
      'Alfonso',
      'Javier',
      'Rodrigo',
      'Alvaro',
      'Darius',
      'Ivan',
      
   ];
   puestos =[
      "1",
      '2',
      '3',
      '4',
      '5',
      '6',
      '7',
      '8',
      '9',
      '10',
      '11',
      '12',
      '13',
      '14',
      '15',
   ];
   txt="";
      companeros.sort();
      console.log(puestos.length);
for (i=0; i < companeros.length; i++) {
   txt+= puestos[i]+"-";
   txt+= companerossinordenar[i]+"-";
   txt+= companeros[i]+"<br/>";
}
  
document.getElementById("x").innerHTML=txt;
        
     
      
   
   </script>
       
</pre>

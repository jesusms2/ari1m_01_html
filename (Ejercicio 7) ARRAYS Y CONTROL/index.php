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
"Dicembre",
   ];
   print_r($meses);
   foreach($meses as $mes){
   
   if ( strstr($mes,"r"))
   echo $mes;
}
   ?>
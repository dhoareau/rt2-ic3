<html>
   <head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   </head>
<body>

<?php
   $fruits = array() ;
   $fruits[0] = "banane" ;
   $fruits[1] = "poire" ;
   $fruits[2] = "voiture en chocolat aux letchis" ;

   $liste_course = array() ;
   $liste_course['lait'] = 6 ;
   $liste_course['oeufs'] = 12 ;
   $liste_course['riz'] = 1 ;

//   for ($i = 0 ; $i<3 ; $i++) {
//     echo $fruits[$i]."<br/>" ;
//   }

   foreach($liste_course as $indice => $valeur) {
     echo $indice." : ".$valeur."<br/>" ;
   }
   
?>

</body>
</html>

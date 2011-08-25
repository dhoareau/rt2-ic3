<?php

$compteur = 0 ;
if (isset($_COOKIE['gateau'])) {
  $compteur = $_COOKIE['gateau'] ;
} 

$compteur++ ;
setcookie('gateau',$compteur) ;

echo $compteur ;

?>
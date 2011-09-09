<?php
session_start() ;


function login($login,$password) {

    $link = mysql_connect("localhost", "root", "root") 
              or die("Impossible de se connecter : " . mysql_error());



    $query = 'SELECT email,password FROM users WHERE email="'
	.$login
        .'" AND password="'
        .$password
        .'"' ;

    //$query = 'SELECT * FROM users ' ;
    //echo $query ;
    mysql_select_db("ic3",$link) ;
    $result = mysql_query($query,$link) ;

    if (mysql_num_rows($result) != 1) {
	return false ;
    } else {
	return true ;
    }
/*
    $t = mysql_fetch_assoc($result) ;
    print_r($t) ;
    $t = mysql_fetch_assoc($result) ;
    print_r($t) ;

    return false ;*/
}

if (login($_POST['email'],
	  $_POST['password'])) {

    $_SESSION['loggedin'] = true ;
    $_SESSION['user'] = $_POST['email'] ;
    $_SESSION['IP_ADDRESS'] = $_SERVER['REMOTE_ADDR'] ;

} else {
    echo 'Mauvais login ou mot de passe' ;
    echo '<a href="index.php">Retourner à la page d accueil</a>' ;
}
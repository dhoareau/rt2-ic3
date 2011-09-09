<?php

$comment = $_POST['comment'] ;

    $link = mysql_connect("localhost", "root", "root") 
              or die("Impossible de se connecter : " . mysql_error());


    $query = 'INSERT comments (email,comment) VALUES ("' 
	.$_SESSION['user']
	.'","'
	.$comment
	.'")' ;

    //echo $query ;
    mysql_select_db("ic3",$link) ;
    mysql_query($query,$link);
    mysql_close($link);


?>

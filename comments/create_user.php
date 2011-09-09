<?php

function create_user($login,$mdp) {

    $link = mysql_connect("localhost", "root", "root") 
              or die("Impossible de se connecter : " . mysql_error());


    $query = 'INSERT users (email,password) VALUES ("' 
	.$login
	.'","'
	.$mdp
	.'")' ;

    //echo $query ;
    mysql_select_db("ic3",$link) ;
    mysql_query($query,$link);
    mysql_close($link);

}

if (isset($_POST['email'])) {
    create_user($_POST['email'],$_POST['password']) ;
}

?>
<html>

<body>

<h1>Creer un utilisateur</h1>

<form action="create_user.php" method="POST">
        login <input type="text" name="email" /> <br/>
        password <input type="password" name="password" /> <br/>
        <input type="submit" value="creer"/>
      </form>' ;


</body>

</html>

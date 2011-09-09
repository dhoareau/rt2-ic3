<?php
session_start() ;
?>
<html>

<body>

<h1>Mon premier article</h1>

<?php
if (isset($_SESSION['loggedin'])) {

echo '<form action="a_comment.php" method="POST">
        <textarea rows="10" cols="60" name="comment"></textarea>
        <input type="submit" value="Commenter"/>
      </form>' ;

}  else {

echo '<form action="a_login.php" method="POST">
        login <input type="text" name="email" /> <br/>
        password <input type="password" name="password" /> <br/>
        <input type="submit" value="Connecter"/>
      </form>' ;

}
?>

<?php
    $link = mysql_connect("localhost", "root", "root") 
              or die("Impossible de se connecter : " . mysql_error());


$query = 'SELECT comment FROM comments'; 

    //echo $query ;
    mysql_select_db("ic3",$link) ;
$result = mysql_query($query,$link);
while ($row = mysql_fetch_assoc($result)) {
    echo $row['comment'] ;
}


    mysql_close($link);
?>


</body>

</html>

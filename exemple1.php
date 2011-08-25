<html>
   <head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   </head>
<body>
  <form method="POST" action="traitement.php">

    Lastname : <input type="text" name="lastname" /></br>
    Firstname : <input type="text" name="firstname" /></br>
    email : <input type="text" name="email" />
    <input type="hidden" name="form" value="toupper"/>

    <input type="submit" value="Valider"/>

  </form>

  <form method="POST" action="traitement.php">

    Lastname : <input type="text" name="lastname" /></br>
    Firstname : <input type="text" name="firstname" /></br>
    email : <input type="text" name="email" />
    <input type="hidden" name="form" value="tolower"/>

    <input type="submit" value="Valider"/>

  </form>



</body>
</html>

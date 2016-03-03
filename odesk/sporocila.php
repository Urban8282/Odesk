<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
 <?php
    include_once 'header.php';
    include_once 'database.php';
?>
<form> 

  Ime prejemnika: <input type="text" name="username" style="width: 440px;"><br><br>
  
  Sporočilo:<br>
  <input type="text" name="sporocilo" style="height:500px;width:540px;" maxlength="500" /><br><br>
   <p align="middle">
  <input type="button" value="Pošlji sporčilo" />
</p>

<?php
    include_once 'footer.php';
?>
    </body>
</html>

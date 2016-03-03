<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
		<link rel="stylesheet" type="text/css" href="novo_sporocilo.css">
    </head>
    <body>
 <?php
    include_once 'header.php';
    include_once 'database.php';
	
?>
<div class="textbox">
<form> 

  Ime prejemnika: <input type="text" name="username" ><br>
  Zadeva:         <input type="text" name="subject" ><br>
  Soprejemniki: <input type="text" name="copy" ><br><br></div>
  
  Sporočilo:<br>
  <textarea rows="14" cols="75"></textarea><br><br>
   <p align="middle">
  <input type="button" value="Pošlji sporočilo" />
</p>

<?php
	
    include_once 'footer.php';
?>
    </body>
</html>


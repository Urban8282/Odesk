<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
		<link rel="stylesheet" type="text/css" href="novo_sporocilo.css" />
    </head>
    <body>
 <?php
    include_once 'header.php';
    include_once 'database.php';

?>
<form> 
  
  <div id="glavnimeni">
  
  <div id="sporočila">
  SPOROČILA 
  </div>
  
  <div id="Prijatelji">
  PRIJATELJI 
  </div>
  
  </div>
  
  <div id="spodnjimeni">
  
  <div id="izbira">
  
  <div id="novasporočila">
  <a href="novo_sporocilo.php">Novo sporočilo</a>
  </div>
  
  <div id="prejeta">
  Prejeta
  </div>
  <div id="poslana">
  Poslana
  </div>
  <div id="osnutki">
  Osnutki 
  </div>
  
  </div>
  
   <div id="okno">
  <div class="textbox">
<form> 

  Ime prejemnika: <input type="text" name="username" ><br>
  Zadeva:         <input type="text" name="subject" ><br>
  Soprejemniki: <input type="text" name="copy" ><br><br></div>
  
  Sporočilo:<br>
  <textarea rows="14" cols="69"></textarea><br><br>
   <p align="middle">
  <input type="button" value="Pošlji sporočilo" />
</p>
  </div> 
  
  </div>
  
  </div>
  
 
  
  
  
  
  
 

<?php
   
?>
    </body>
</html>

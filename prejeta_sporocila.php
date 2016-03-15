<?php
    include_once 'sp_mz.php';
   
?>
  <div id="okno">
  
 
<table cellpading="0" cellspacing="0" border="1">
    <tr>
        <th>Prejemnik</th>
        <th>Sporočilo</th>
		<th>Pošiljatelj</th>
		<th>Zadeva</th>
		
       
    </tr>

    <?php
        $query = "SELECT * FROM sporocila";
        //pošljemo ukaz v bazo in shranimo rezultat
        $result = mysqli_query($link, $query);
        
        while($row = mysqli_fetch_array($result)) {
            echo '<tr>';
                echo '<td>'.$row['prejemnik'].'</td>';
                echo '<td><pre>'.$row['sporocilo'].'</pre></td>';
				 echo '<td>'.$row['posiljatelj'].'</td>';
				  echo '<td>'.$row['zadeva'].'</td>';
				   

            echo '</tr>';
        }
		
		
	$user_id = $_SESSION['user_id'];
    
    $query = "SELECT * FROM users WHERE id =$user_id";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_array($result);
	?>
	
	<form>
		E-naslov: <input type="text" name="email" value="<?php echo $user['email']; ?>" /><br />
    
</table> 
</div>
<?php
    include_once 'sp_ms.php';
?>
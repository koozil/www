
<?php
  include 'nav.php';
  $waga = 92;
  echo '<table class="table" style="width:20%">';
  for ($wzrost = 180; $wzrost<=205; $wzrost+=5){
    echo "<tr> <td>$wzrost cm</td><td>=</td> <td>$waga kg</td></tr>";
    $waga+=3.5;
  }
  
?>
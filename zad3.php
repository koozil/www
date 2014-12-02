<?php
  include 'nav.php';
?>

  <form method="get" action="siewo.php">
    <table>
      <tr>
        <td>Podaj swój wiek: </td>
        <td><input type="text" name="age" size=2/></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="submit_age" value="Wyslij" /></td>
      </tr>
    </table>
  </form>
<?php
  extract($_REQUEST);
    if (! isset ( $submit_age ))
      exit;
?>

  <table class="table">
<?php
  if ( $age >0 ){
    if ( $age == 23 ){
      echo "Na pewno jesteś istotą żyjącą, potrafiącą obsługiwać komputer";
    }
    else {
        if ( $age < 23 ){
        echo "jestes za mlody by byc stary";
      }
      else {
        echo "jestes za stary by byc młody";
      }
    }
  }
  else {
    echo "Ups cos poszło nie tak ";
    echo "<br>";
    echo "Proszę spróbować ponownie ";
  }
?>
  </table>


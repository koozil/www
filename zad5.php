<?php
  include 'nav.php';
  print '<form method="post" action="c.php">
    <br />Wymierz kolor czcionki:
    <br /><input type="radio" name="place" value="San Francisco" /> San Francisco
    <br /><input type="radio" name="place" value="Nowy Jorku" /> Nowy Jork
    <br /><input type="radio" name="place" value="Londynie" /> Londyn
    <br /><input type="radio" name="place" value="Honolulu" /> Honolulu
    <br /><input type="radio" name="place" value="Tokyo" /> Tokyo
    <p>
      <br /><input type="submit" value="Wybierz" /><br />
      <br /><input type="reset" value="Wyczysc" /><br />
    </p>';
  extract($_REQUEST);
    $temp = "place$i";
    echo 'Witamy w '.$temp.'! Uważaj na portfel!';

?>
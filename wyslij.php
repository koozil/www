<?php
  include 'nav.php';
  $naglowki = "From: kooziloo@gmail.com".PHP_EOL."Reply-To: kooziloo@gmail.com".PHP_EOL."Content-type: text/plain; charset=iso-8859-2";
  
  if(mail('$do', '$temat', '$tresc', $naglowki))
    echo 'Wiadomość została wysłana';
  else
    echo 'Wiadomosc nie zostala wyslana';
  
?>

<?php
  include 'nav.php';
  ?>



<? echo ("Hello World"."<br />");
	$a = 1;
	for ( $i = 1; $i<=5; $i++){
		while ( $i <= 5 ){
			$a++;
			echo $a.("<br />");
		}
		echo $i.("<br />");
	}
 ?>
 <?php
/* example 1 */

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

/* example 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

/* example 3 */

$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i;
    $i++;
}

/* example 4 */

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
?>
</body>
<footer class="bs-docs-footer" role="contentinfo">
  <div class="container">
  <ul class="bs-docs-footer-links muted">
   
      <li><a href="https://github.com/koozil">GitHub- koozil</a></li>
	  <li><a href="https://github.com/twbs/bootstrap/releases">Releases- Bootstrap</a></li>
  </ul>
  </footer>
</html>


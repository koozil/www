﻿<?php
  include 'nav.php';
  ?>
		<div class="container- fluid">
  <h1>Specjalizacje- PHP</h1>

  <div class="alert alert-info" role="alert">Poniżej podane zadania są zrobione w niekoniecznie dobrej kolejności.
  Więcej informacji w pliku  <a href="https://github.com/koozil/PHP"> README</a> </div>
<div class="alert alert-info" role="alert">Zawsze możesz zmienić wersję kolorystyczną strony (work in progress)  <a href="indexalt.php">"Więc chodź, pomaluj mi stronkę :) "</a> </div>



</div>

                <div class="row">
                    <div class="col-lg-12">
                        <h1>Simple Sidebar</h1>
                        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
        
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


</body>
<footer class="bs-docs-footer" role="contentinfo">
  <div class="container">
  <ul class="bs-docs-footer-links muted">

      <li><a href="https://github.com/koozil">GitHub- koozil</a></li>
	  <li><a href="https://github.com/twbs/bootstrap/releases">Releases- Bootstrap</a></li>
  </ul>
  </footer>
</html>

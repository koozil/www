<!Doctype hmtl>
<html>
<head>
<title><h1>KOZA</h1></title>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/docs.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">
<script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="../assets/js/ie-emulation-modes-warning.js"></script>
<link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-precomposed.png">
<link rel="icon" href="/favicon.ico">
</head>
<body>
    <div class="container">
      <div class="masthead">
        <h1 class="text-muted">KOZA</h1>
        <div role="navigation">
          <ul class="nav nav-justified">
            <li><a href="index.php">Home</a></li>
       <li><a href="https://github.com/koozil">My GitHub</a></li>
             <li><a href="about.php">About</a></li>
            <li><a href="https://www.facebook.com/Strychrock?ref=hl">The Strychers </a></li>
          </ul>
        </div>
      </div>
		
		
<?php
$colors=array('black','red','#eaeaea','yellow'); //lista kolorow
$key=rand(0,count($colors)-1); //losowanie koloru
$color=$colors[$key]; //pobranie koloru
echo "<body style=\"background-color:$color;\">"; //wyswietlenie
?>
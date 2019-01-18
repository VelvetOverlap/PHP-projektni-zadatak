<?php
	print '
	<!DOCTYPE html>
<html lang="hr">
<head>
<meta charset="UTF-8"/>
<link type="text/css" rel="stylesheet" href="stil.css" />
<title>Početna  Stranica</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>

<header>
<div'; if (!isset($_GET['menu']) || $_GET['menu'] ==1) { print ' class="main-img"'; } else { print ' class="main-imgsml"'; }  print '></div>
<img src="htmllogo.png"alt="HTML logo"class="logo"/>
<nav id="meni">
	<ul>
		<li style="list-style-type:none"><a href="index.php?menu=1"class="link"> Početna Stranica </a></li>
		<li><a href="index.php?menu=2"class="link"> Vijesti </a></li>	
		<li><a href="index.php?menu=3"class="link"> Kontakt </a></li>	
		<li><a href="index.php?menu=4"class="link"> O Nama </a></li>	
		<li><a href="index.php?menu=5"class="link"> Galerija</a></li>	
	
	</ul>		
</nav>
</header>
			
			<main>';
				# početna stranica
				if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("1. projektni zadatak.php"); }
		
				# vijesti
				else if ($_GET['menu'] == 2) { include("vijesti.php"); }
												
				# kontakt
				else if ($_GET['menu'] == 3) { include("kontakt.php"); }
		
				# o nama
				else if ($_GET['menu'] == 4) { include("o nama.php"); }
				
				# galerija
				else if ($_GET['menu'] == 5) { include("galerija.php"); }
				
				# vijesti1
				else if ($_GET['menu'] == 6) { include ("vijesti1.php"); }
								
				# vijesti2
				else if ($_GET['menu'] == 7) { include("vijesti2.php"); }
							
				# vijesti3
				else if ($_GET['menu'] == 8) { include("vijesti3.php"); }
							
			
							
				
			print '
			</main>		
			<div class="icon">
<a href="https://www.youtube.com/channel/UC8pXYqdskkz-2_hNsLiaCHQ?view_as=subscriber" class="fa fa-youtube " target="blank"></a>
<a href="https://www.facebook.com/HCLgaming/" class="fa fa-facebook" target="blank"></a>
</div>	
		<footer>
			<center>
				<ul>
				<li><p>Copyright &copy; 2018 Vito Turbić.</p></li>
				<li><a href="https://github.com/VelvetOverlap"target="blank"title="MojGitHub"><img class="githublogo" src="githublogo.png"alt="GitHubLogo"/></a></li>
				</ul>
			</center>
		</footer>
	</body>
</html>';
?>
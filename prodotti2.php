<html>			<!-- NUOVO -->
  <head>
    <title>Andrea Oian</title>
    <link rel="stylesheet" type="text/css" href="style2.css"/>
  </head>
  <body>
		<img src="sfondo.png" id="sfondo" />
	    <div id="container">
			<div id="header">
				<div id="logo">		<!-- Blocco di testa -->
					<div id="supernova"><img src="scrittaSupernova.png" width="700" height="300"></div>
						<?php 
							$nomeUtente=$_GET['nomeUtente'];
							echo "<b>Utente: $nomeUtente</b>"
						?> 
						<a href="iniziale.php">Logout</a>
						<?php
							echo "<ul id='Carrello'>
									<li><a href='Carrello.php?nomeUtente=$nomeUtente'><strong>Carrello</strong></a></li>
								 </ul>";
						?>
						<div id="logo2"><img src="logo.png" align="left" width="300" height="300"></div>		<!-- Logo supernova -->
				</div>
				<div id="navigation">
					<?php
						echo "<ul id='menu'>
								<li><a href='utente_loggato.php?nomeUtente=$nomeUtente'>Azienda</a></li>
								<li><a href='ricerca_vera.php?nomeUtente=$nomeUtente'>Ricerca</a></li>
								<li class='active'><a href='prodotti2.php?nomeUtente=$nomeUtente'>Prodotti</a></li>
								<li><a href='news2.php?nomeUtente=$nomeUtente'>News</a></li>
								<li><a href='contatti_con_scrittura.php?nomeUtente=$nomeUtente'>Contatti</a></li>
							</ul>";
					?>
				</div><!--#navigation-->
				 
			</div><!--#header-->
		 
			<div id="main">
				<div id="uno">
					<?php
						echo "<a href='manodomestico2.php?nomeUtente=$nomeUtente' class='shiny-button'><strong>MANODOMESTICO</strong></a>
						<a href='linea_da_tavola2.php?nomeUtente=$nomeUtente' class='shiny-button2'><strong>LINEA DA TAVOLA</strong></a>
						<a href='gadget2.php?nomeUtente=$nomeUtente' class='shiny-button3'><strong>GADGET</strong></a>
						<a href='espositori2.php?nomeUtente=$nomeUtente' class='shiny-button4'><strong>ESPOSITORI</strong></a>";
					?>
				</div>
			</div><!--#main-->
			 
			<div id="sidebar">
				<div id="sinistra">
				</div>
				<div id="destra">
					<img src="supernova_sfondo.jpg" width="250" height="600">
				</div>
			</div><!--#sidebar-->
			 
			<div id="footer">
				<marquee direction="left"> La Supernova srl è una ditta leader nel territorio per la produzione e vendita degli articoli da cucina. Ha una storia decennale e vanta numerosi premi vinti.</marquee>
				<img src="immagineFondo.jpg" width="1400" height="40">
			</div><!--#footer-->
	 
		</div><!--#container-->
  </body>
</html>
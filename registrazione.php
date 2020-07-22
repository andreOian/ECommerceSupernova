<html>		<!-- NUOVO -->
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
					<a href="registrazione.php">Registrazione</a>  <a href="Login.php">Login</a>
					<div id="logo2"><img src="logo.png" align="left" width="300" height="300"></div>
				</div>
				<div id="navigation">
					<ul id="menu">
						<li><a href="iniziale.php">Azienda</a></li>
						<li><a href="ricerca_nulla.php">Ricerca</a></li>
						<li><a href="prodotti.php">Prodotti</a></li>
						<li><a href="news.php">News</a></li>
						<li><a href="contatti.php">Contatti</a></li>
					</ul>
				</div><!--#navigation-->
				 
			</div><!--#header-->
		 
			<div id="main">
				<div id="uno">
					<form action="registrazione_completata.php" method="post">
						<b>Nome:</b>
						<input type="text" name="nome" size="20" maxlength="40" >
						<br><br>
						<b>Indirizzo:</b>
						<input type="text" name="indirizzo" size="20" maxlength="40" >
						<br><br><b>Anno di nascita:</b>
						<select name="anno">
							<option value="1990">1990</option>
							<option value="1991">1991</option>
							<option value="1992">1992</option>
							<option value="1993">1993</option>
							<option value="1994">1994</option>
							<option value="1995">1995</option>
							<option value="1996">1996</option>
							<option value="1997">1997</option>
							<option value="1998">1998</option>
						</select>
						<br><br><b>M/F:</b>
						<input type="checkbox" name="sesso" value="M">M
						<input type="checkbox" name="sesso" value="F">F
						<br><br><b>Nome utente:</b>
						<input type="text" name="nomeUtente" size="20" maxlength="40" >
						<br><br><b>Psw:</b>
						<input type="text" name="psw" size="20" maxlength="40" >
						<br><br>
						<input type="submit" >
					</form>
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
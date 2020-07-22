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
					<?php
						$nomeUtente=$_POST['nomeUtente'];
						$psw=$_POST['psw'];
						$user='root'; $password=''; $host='localhost'; $database="progetto_basi_dati";
						$con=mysqli_connect($host,$user,$password,$database);
						$query="SELECT nome_utente,psw FROM utente";
						$result=mysqli_query($con,$query);
						mysqli_close($con);
						$num=mysqli_num_rows($result);
						$nomiUtente=array();
						$pswUtente=array();
						$i=0;
						while($row = mysqli_fetch_assoc($result)) {
						   $id = $row['nome_utente'];
						   $nomiUtente[]=$id;
						   $id = $row['psw'];
						   $pswUtente[]=$id;
						   $i++;
						}
						
						$i=0;
						$trovato=0;
						$lung=count($nomiUtente);
						while($i<$lung AND $trovato==0) {
							if($nomiUtente[$i]==$nomeUtente AND $pswUtente[$i]==$psw	AND $nomeUtente != NULL){
								$trovato=1;
							}
						   $i++;
						}
						
						if($trovato == 1){
							echo "<a href='utente_loggato.php?nomeUtente=$nomeUtente'> Utente trovato!!! </a>";
						}
						else{
							echo "<a href='iniziale.php'> Utente non trovato!!! </a>";
						}
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
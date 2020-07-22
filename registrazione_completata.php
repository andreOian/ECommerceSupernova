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
					<?php
						$nome=$_POST['nome'];
						$nomeUtente=$_POST['nomeUtente'];
						$indirizzo=$_POST['indirizzo'];
						$sesso=$_POST['sesso'];
						$anno=$_POST['anno'];
						$psw=$_POST['psw'];
						$user='root'; $password=''; $host='localhost'; $database="progetto_basi_dati";
						$con=mysqli_connect($host,$user,$password,$database);
						$query="SELECT * FROM utente";
						$result=mysqli_query($con,$query);
						$nomiUtente=array();
						$i=0;
						while($row = mysqli_fetch_assoc($result)) {
							$id = $row['nome_utente'];
						    $nomiUtente[]=$id;
							$i++;
						}
						
						$i=0;
						$trovato=0;
						$lung=count($nomiUtente);
						while($i<$lung AND $trovato==0) {
							if($nomiUtente[$i]==$nomeUtente){
								$trovato=1;
							}
						   $i++;
						}
						if($trovato==0){
							$query="INSERT INTO utente VALUES ('$nomeUtente','$psw','$nome','$indirizzo','$sesso','$anno');";
							$result=mysqli_query($con,$query);
							echo "<a href='iniziale.php'> Utente aggiunto!!! </a>";
						}
						else{
							echo "<a href='registrazione.php'> Utente non aggiunto, nome utente già usato!!! </a>";
						}
						mysqli_close($con);
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
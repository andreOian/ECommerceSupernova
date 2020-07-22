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
						<li class="active"><a href="prodotti.php">Prodotti</a></li>
						<li><a href="news.php">News</a></li>
						<li><a href="contatti.php">Contatti</a></li>
					</ul>
				</div><!--#navigation-->
				 
			</div><!--#header-->
		 
			<div id="main">
				<div id="uno">
					<table border="1" width="900">
						<tr><td bgcolor="#FF0000" width="10%"><font color="#FFFFFF">id_prodotto</font></td><td bgcolor="#FF0000"><font color="#FFFFFF">Nome</font></td><td bgcolor="#FF0000"><font color="#FFFFFF">Prezzo</font><td bgcolor="#FF0000"><font color="#FFFFFF">Colore</font></td><td bgcolor="#FF0000"><font color="#FFFFFF">Categoria</font></td><td bgcolor="#FF0000"><font color="#FFFFFF" width="25%">Immagine</font></td></tr>
						<?php
							$user='root'; $password=''; $host='localhost'; $database="progetto_basi_dati";
							$con=mysqli_connect($host,$user,$password,$database);
							$query="SELECT * from prodotto WHERE categoria='Manodomestico'";
							$result=mysqli_query($con,$query);
							mysqli_close($con);
							$num=mysqli_num_rows($result);
							$nomi=array();
							$id_prodotti=array();
							$prezzi=array();
							$colori=array();
							$categorie=array();
							$i=0;
							while($row = mysqli_fetch_assoc($result)) {
							   $id = $row['nome'];
							   $nomi[]=$id;
							   $id= $row['id_prodotto'];
							   $id_prodotti[]=$id;
							   $id = $row['prezzo'];
							   $prezzi[]=$id;
							   $id= $row['colore'];
							   $colori[]=$id;
							   $id= $row['categoria'];
							   $categorie[]=$id;
							   $i++;
							}
							
							$i=0;
							$lung=count($nomi);
							while($i < $lung) {
							   $id_stringa=(string)$id_prodotti[$i];
							   $link="Prodotti/".$id_stringa.".jpg";
							   echo "<tr><td>$id_prodotti[$i]</td><td>$nomi[$i]</td><td>$prezzi[$i]</td><td>$colori[$i]</td><td>$categorie[$i]</td><td><a href='$link'><img src=$link width='100' height='150'></a></td><tr>";
							   $i++;
							}
						?>
					</table>
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
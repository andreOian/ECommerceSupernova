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
								<li class='active'><a href='ricerca_vera.php?nomeUtente=$nomeUtente'>Ricerca</a></li>
								<li><a href='prodotti2.php?nomeUtente=$nomeUtente'>Prodotti</a></li>
								<li><a href='news2.php?nomeUtente=$nomeUtente'>News</a></li>
								<li><a href='contatti_con_scrittura.php?nomeUtente=$nomeUtente'>Contatti</a></li>
							</ul>";
					?>
				</div><!--#navigation-->
				 
			</div><!--#header-->
		 
			<div id="main">
				<div id="uno">
					<table border="1" width="900">
						<tr><td bgcolor="#FF0000" width="10%"><font color="#FFFFFF">Preso</font></td><td bgcolor="#FF0000" width="10%"><font color="#FFFFFF">id_prodotto</font></td><td bgcolor="#FF0000"><font color="#FFFFFF">Nome</font></td><td bgcolor="#FF0000"><font color="#FFFFFF">Prezzo</font><td bgcolor="#FF0000"><font color="#FFFFFF">Colore</font></td><td bgcolor="#FF0000"><font color="#FFFFFF">Categoria</font></td><td bgcolor="#FF0000"><font color="#FFFFFF" width="25%">Immagine</font></td></tr>
						<?php
							$prezzoMax=$_POST['prezzoMax'];
							$colore=$_POST['colore'];
							$categoria=$_POST['categoria'];
							$user='root'; $password=''; $host='localhost'; $database="progetto_basi_dati";
							$con=mysqli_connect($host,$user,$password,$database);
							$query="SELECT * from prodotto";
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
							
							if($prezzoMax != NULL){
								$i=0;
								$lung=count($nomi);
								while($i < $lung) {
									if($prezzi[$i]>$prezzoMax){
										unset($nomi[$i]);$nomi[$i]=NULL;
										unset($id_prodotti[$i]);$id_prodotti[$i]=NULL;
										unset($prezzi[$i]);$prezzi[$i]=NULL;
										unset($colori[$i]);$colori[$i]=NULL;
										unset($categorie[$i]);$categorie[$i]=NULL;
									}
									$i++;
								}
							}
							
							if($colore != NULL){
								$i=0;
								$lung=count($nomi);
								while($i < $lung) {
									if($colori[$i]!=$colore){
										unset($nomi[$i]);$nomi[$i]=NULL;
										unset($id_prodotti[$i]);$id_prodotti[$i]=NULL;
										unset($prezzi[$i]);$prezzi[$i]=NULL;
										unset($colori[$i]);$colori[$i]=NULL;
										unset($categorie[$i]);$categorie[$i]=NULL;
									}
									$i++;
								}
							}
							
							if($categoria != NULL){
								$i=0;
								$lung=count($nomi);
								while($i < $lung) {
									if($categorie[$i]!=$categoria){
										unset($nomi[$i]);$nomi[$i]=NULL;
										unset($id_prodotti[$i]);$id_prodotti[$i]=NULL;
										unset($prezzi[$i]);$prezzi[$i]=NULL;
										unset($colori[$i]);$colori[$i]=NULL;
										unset($categorie[$i]);$categorie[$i]=NULL;
									}
									$i++;
								}
							}
							
							$nomi2=array();
							$id_prodotti2=array();
							$prezzi2=array();
							$colori2=array();
							$categorie2=array();
							$i=0;
							$lung=count($nomi);
							$lung2=count($id_prodotti);
							while($i < $lung) {
								if($nomi[$i] != NULL){
								   $nomi2[]=$nomi[$i];
								   $id_prodotti2[]=$id_prodotti[$i];
								   $prezzi2[]=$prezzi[$i];
								   $colori2[]=$colori[$i];
								   $categorie2[]=$categorie[$i];
								}
								$i++;
							}
							
							$i=0;
							$lung=count($nomi2);
							echo "<form action='aggiunta_confermata.php?nomeUtente=$nomeUtente' method='post'>";
							while($i < $lung) {
							   $id_stringa=(string)$id_prodotti2[$i];
							   $link="Prodotti/".$id_stringa.".jpg";
							   echo "<tr><td><input type='checkbox' name='prendi[]' value=$id_prodotti2[$i]></td><td>$id_prodotti2[$i]</td><td>$nomi2[$i]</td><td>$prezzi2[$i]</td><td>$colori2[$i]</td><td>$categorie2[$i]</td><td><a href='$link'><img src=$link width='100' height='150'></a></td><tr>";
							   $i++;
							}
							echo "<input type='submit' value='Aggiungi'></form>"
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
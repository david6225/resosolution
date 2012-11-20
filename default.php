<?php
	$sep = (stristr ('php_os', 'WIN')) ? "\\" : "/";
	$request = str_replace( "/", "", $_SERVER['REQUEST_URI'] );
	
	$pageArray = array( 2 => "visitez-la-maison.html",
						3 => "tarifs-reservation.html",
						4 => "acces.html" );

	$pageTitle = array( 1 => "Chambres d'hôtes Saint-Thibery - Pezenas - Herault - Home Saint Sauveur",
						2 => "4 chambres d'hôtes à proximité d'Agde, Pezenas, Sètes, Canal du Midi, Béziers - Home Saint Sauveur",
						3 => "Nos Tarifs - Chambres d'hôtes Saint-Thibery à 30 kilomètres de Montpellier - Languedoc Roussillon",
						4 => "Accès depuis Béziers, Montpellier, Agde - Chambres d'hôtes Saint-Thibery - Hérault" );
	
	$accroche = array( 1 => "<strong>Chambres d'hôtes de charme</strong><br/>à Saint-Thibéry pour vos séjours en Pays de <strong>Pézenas</strong>",
				2 => "<strong>Chambres d'hôtes de charme</strong><br/>proches du <strong>Canal du Midi</strong> et de la Méditerranée",
				3 => "<strong>Chambres d'hôtes de charme</strong><br/>pour une simple escapade ou un séjour professionnel",
				4 => "<strong>Chambres d'hôtes de charme</strong><br/>à la découverte de <strong>l'Hérault</strong>");
				
	$id = ( array_search( $request, $pageArray ) !== FALSE ) ? array_search( $request, $pageArray ) : 1;
	
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

		<head>
			<link href="css/style.css" rel="stylesheet" type="text/css" />
			<!--[if IE]> <link href="/templates/trucsetdeco/css/ie.css" rel="stylesheet" type="text/css" /> <![endif]-->
			<link href="/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
			  
			  <meta name="robots" content="index, follow" />
			  <meta name="keywords" content="" />
			  <meta name="description" content="Chambres d'hôtes de charme à Saint-Thibéry pour vos séjours en Pays de Pézenas." />
			  <meta name="google-site-verification" content="" />
			  <meta property="og:image" content="http://www.homesaintsauveur.com/images/MaisonDroite/1.jpg" />
			  <link href="http://www.homesaintsauveur.com/images/MaisonDroite/1.jpg" rel="image_src" />
				<title><?php echo $pageTitle[$id]; ?></title>
			  <meta http-equiv="Content-Language" content="fr" /></head> 
			<script type="text/javascript" src="js/jquery.js"></script>
			<script src="js/jquery.cross-slide.min.js"></script>
			<script type="text/javascript" src="js/str_replace.js"></script>
			
		<body>
		<div id="global">
			<div id="header">
				<p style="padding: 2em 15px;"><?php echo $accroche[$id]; ?></p>
				<img src="images/saint-sauveur.png" border=0 style="position:absolute; top: 10px; right: 170px;"/>
			</div>

			<div id="menu">
				<ul>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="visitez-la-maison.html">Visitez la maison</a></li>
				<li><a href="tarifs-reservation.html">Tarifs - Réservation</a></li>
				<li><a href="acces.html">Accès</a></li>
				</ul>
			</div>
			<?php if( $id == 1): ?>
			<div id="main">
				<div id="left" class="left">
				<p><cite>Patricia et Jean-Gilles Blondel <br/>vous accueillent dans cette grande<br/> demeure du XVIIème siècle<br/> pour vous faire découvrir de belles<br/> et confortables
				chambres d'hôtes<br/> le temps d'une nuit ou d'un séjour<br/> plus long.</cite></p>
				<p><cite>Conçue dans un esprit <br/>"maison de famille", <br/>Saint Sauveur reflète<br/> le bonheur de vivre,<br/> la sérénité tout simplement.</cite></p>
				</div>
				<div id="maincontent">
<!-- http://tobia.github.com/CrossSlide/ -->
<script>
  $(function() {
  	if( !$.browser.mise )
  	{
    $('#imggauche').crossSlide({
      sleep: 2,
      fade: 1
    }, [
      { src: 'images/MaisonGauche/1.jpg' },
      { src: 'images/MaisonGauche/2.jpg' },
      { src: 'images/MaisonGauche/3.jpg' },
      { src: 'images/MaisonGauche/4.jpg' },
      { src: 'images/MaisonGauche/5.jpg' },
      { src: 'images/MaisonGauche/6.jpg' },
      { src: 'images/MaisonGauche/7.jpg' },
      { src: 'images/MaisonGauche/8.jpg' },
      { src: 'images/MaisonGauche/9.jpg' },
      { src: 'images/MaisonGauche/10.jpg' },
      { src: 'images/MaisonGauche/11.jpg' }
    ])
  	}
    $('#imgdroite').crossSlide({
      sleep: 3,
      fade: 1
    }, [
      { src: 'images/MaisonDroite/1.jpg' },
      { src: 'images/MaisonDroite/2.jpg' },
      { src: 'images/MaisonDroite/3.jpg' },
      { src: 'images/MaisonDroite/4.jpg' },
      { src: 'images/MaisonDroite/5.jpg' },
      { src: 'images/MaisonDroite/6.jpg' },
      { src: 'images/MaisonDroite/7.jpg' },
      { src: 'images/MaisonDroite/8.jpg' },
      { src: 'images/MaisonDroite/9.jpg' },
      { src: 'images/MaisonDroite/10.jpg' }
    ])
  });
</script>
					<div id="imggauche" class="left"><img src="images/MaisonGauche/1.jpg" border="0" /></div>
					<div id="imgdroite" class="left"><img src="images/MaisonDroite/1.jpg" border="0" /></div>
					<div class="clear"></div>
					<p><cite>A 10 minutes de <strong>Pézenas</strong>, à un quart d'heure des plages, Saint-Sauveur est située dans le coeur historique d’un village vigneron. Elle possède un charmant petit jardin, bien à l’abri des regards indiscrets.</cite></p>
<p><cite>Excursion dans les hauts cantons, visite des caves viticoles, golf, équitation, sports nautiques, plage, découverte du canal du Midi ou de Pézenas, la jolie cité de Molière, initiation aux métiers d'art, dégustation d’huîtres de l’étang de Thau, tout est réuni autour de <nobr>Saint-Sauveur</nobr> pour que votre halte soit inoubliable.</cite></p>

				</div>
			</div>
			<?php else: 
			include($id.'.php');
			endif; ?>


			<div id="footer">
					<strong><cite>Saint-Sauveur - 3, place du Marché - 34630 Saint-Thibéry - Tél.: +33(0)9 75 35 78 89 - GSM : +33(0)6 71 16 44 01 - <a href="mailto:info@homesaintsauveur.com">info@homesaintsauveur.com</a></cite></strong>
					<script type="text/javascript">
					<!--
					  var _gaq = _gaq || [];
					  _gaq.push(['_setAccount', 'UA-12981088-3']);
					  _gaq.push(['_trackPageview']);

					  (function() {
					    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
					    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
					    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
					  })();
					  //-->
					</script>
			</div>
		</div>			
	
<div id="footerlink">
<center><table>
<tr>
<td align="center" ><a style="font-weight: bold;color: #000;" href="http://www.fleursdesoleil.fr">
<img src="images/logofds.png" alt="CHAMBRES D'HOTES FLEURS DE SOLEIL" border=0 width="65"></a><BR><a style="font-weight: bold;color: #000;" href="http://www.fleursdesoleil.fr" target="_blank"><font size="-2"> Label de qualité des chambres d'hôtes</font></a><BR>
<a style="font-weight: bold;color: #000;" href="http://www.french-guesthouse.com"><font size="-2"> French Guest Houses</font></a></td>

<td align="center" ><a style="font-weight: bold;color: #000;" href="http://www.ot-pezenas-valdherault.com/">
<img src="images/LogoPezenas.png" alt="Office du tourisme de Pézenas" border=0 width="150"></a><BR><a style="font-weight: bold;color: #000;" href="http://www.ot-pezenas-valdherault.com/" target="_blank"><font size="-2">A la découverte d'un site d'exception :<br/>
la ville de Molière, son architecture, <br/>
ses métiers d'art et les villages vignerons voisins.</font></a><BR>
</td>


<td align="center" ><a style="font-weight: bold;color: #000;" href="http://www.ateliersaintsauveur.com">
<img src="images/ass.jpg" alt="ATELIER SAINT SAUVEUR" border="0" /></a><BR><a style="font-weight: bold;color: #000;" href="http://www.ateliersaintsauveur.com"><font size="-2"> Conception d'espaces et réalisation d'équipements<br/>
pour l'intérieur et l'extérieur de la maison.</font></a>
</td>

<!--<td align="center"><a href="http://www.agence-differente.fr" target="_blank"><img src="images/logo_ad.png" border="0" width="120" /></a><br/>
<a style="font-weight: bold;color: #000;" href="http://www.agence-differente.fr" target="_blank"><font size="-2">Développement de sites internet</a></td>
//-->
<td align="center"><a href="http://www.rivedefrance.fr" target="_blank"><img src="images/logo_rdf.png" border="0" /></a><br/>
<a style="font-weight: bold;color: #000;" href="http://www.rivedefrance.fr" target="_blank"><font size="-2">Complice de vos vacances sur le Canal du Midi.<br/>
Location de bateaux sans permis à l'heure, la demie journée, la journée.<br/>
Bateau Promenade avec pilote, balade de 2 heures.</a></td>

</tr>
</table>
</center>
</div>
		
		</body>
</html>

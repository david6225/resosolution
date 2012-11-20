<!DOCTYPE html>
<?php error_reporting( E_ALL );
include( 'controller.php' ); ?>
<html lang="<?php echo $config->lang; ?>">

		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
			<link href="/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
    		<meta name="author" content="<?php echo $config->authors->name; ?>">

		    <link href="/assets/css/bootstrap.css" rel="stylesheet">
		    <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">
			  <link href="/assets/css/resosolution.css" rel="stylesheet">
			<meta name="robots" content="index, follow" />
			<meta name="keywords" content="<?php echo implode(',',$page->keywords); ?>" />
			<meta name="description" content="<?php echo $page->description; ?>" />
			<meta name="google-site-verification" content="<?php echo $config->gverif; ?>" />
			<meta property="og:image" content="" />
			<link href="" rel="image_src" />
			<title><?php echo $page->title; ?></title>
			<meta http-equiv="Content-Language" content="<?php echo $config->lang; ?>" /></head> 
			<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		    <!--[if lt IE 9]>
		      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		    <![endif]-->
		
		<body class="<?php echo $page->template; ?>">
			<header><a href="/"><img
                        src="assets/images/logo-reso-solution.png" border=0 alt="Réso Solution"/></a><br/>
                        <i>Prenez la bonne résolution</i>
				<div id="headerContact"><a href="#contactForm">NOUS CONTACTER</a></div>
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style pull-right hidden-phone">
          <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
          <a class="addthis_button_tweet"></a>
          <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
        </div>
        
<!-- AddThis Button END -->
      </header>
			<div class="container navbar-wrapper">

      <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <?php foreach( $pages as $p ): ?>
                <li class="<?php if( $p->url == $page->url ) { echo "active"; }  ?> <?php if( $p->id == 1) { echo "visible-desktop"; } ?>"><a href="<?php echo $p->url; ?>"><?php echo $p->name; ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->
    </div><!-- /.container -->

    

	<?php if( $page->id == 1 ): ?>
  <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="http://flickholdr.com/1375/460/office" alt="">
          <div class="container-fluid">
            <div class="carousel-caption span4">
              <p class="lead"><strong>Réso Solution</strong>, le meilleur tremplin pour vos compétences et vos besoins</p>
            </div>
          </div>
        </div>
        <div class="item">
           <img src="/assets/images/slide1.jpg" alt="">
          <div class="container">
            <div class="carousel-caption span4">
              <p class="lead">Nos valeurs : écoute, positivisme, méthode, pragmatisme, rendement</p>
            </div>
          </div>
        </div>
        <!--<div class="item">
          <img src="http://flickholdr.com/1375/460" alt="">
          <div class="container">
            <div class="carousel-caption span4">            
              <p class="lead">Notre solution: visibilité entre les acteurs du marché de l’emploi</p>
            </div>
          </div>
        </div>-->
        <div class="item">
           <img src="/assets/images/slide2.jpg" alt="">
          <div class="container">
            <div class="carousel-caption span4">            
              <p class="lead">Développer son <strong>réseau</strong> dans un lieu convivial de travail et d’échanges</p>
            </div>
          </div>
        </div>
        <!--<div class="item">
          <img src="http://lorempixel.com/1375/460" alt="">
          <div class="container">
            <div class="carousel-caption span4">            
              <p class="lead">Et prospecter vous aimerez....</p>
            </div>
          </div>
        </div>-->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
    <?php else : ?>
    <!-- Article -->
      <?php echo file_get_contents( 'templates/'.$page->id.'.html' ); ?>
  <?php endif; ?>
    <div class="marketing">
			<div class="container">
				<div class="row">
          <div class="span4">
            <h4 class="icon_map small">Nos coordonnées</h4>
            <address>
              <strong>Réso Solution</strong><br/>
              30, rue Montgrand<br/>
              13006 Marseille<br/>
              <br/>
              Tél: <?php echo $config->contact->tel; ?><br/>
              <a href="#">contact<span class="hhh">NOSPAM</span>@<span class="hhh">h</span>reso-solution.fr</a>
              <br/>
              <p><strong>Horaires:</strong><br/>
                Lundi, jeudi, vendredi 9h - 18h<br/>
                Mardi 9h - 22h<br/>
                Mercredi 9h30 - 12h30 / 14h -18h<br/>
              </p>
            </address>

          </div>
          <div class="span4" >
            <h4 class="icon_mail">Nous contacter</h4>
            <form method="POST" action="contact.php" style="margin-left: 40px;" id="contactForm">
              <input type="text" name="name" placeholder="Nom" class="span3" required/>
              <input type="text" name="firstname" placeholder="Prénom" class="span3" />
              <input type="text" name="email" placeholder="Email" class="span3" required/>
              <input type="text" name="phone" placeholder="Téléphone" class="span3" required/>
              <textarea name="message" rows="3" class="span3" placeholder="Message"></textarea><br/>
            <button type="submit" class="btn btn-primary span3" style="margin-left:0;" name="submit">Envoyer</button>
          </form>

          </div>
          <div class="span4">
            <img src="/assets/images/plan.png" alt="Réso Solution - 30 rue Montgrand - 13006 Marseille" class="pull-right"/>
          </div>
        </div>

        <div class="row">
          <div class="span12">
            <p>&nbsp;</p>
            <p class="pull-right"><small>&copy; 2012 Réso Solution, Tous droits réservés | <a href="#">Mentions légales</a> | <a href="http://agence-differente.fr/" target="_blank" title="Site web réalisé par Agence Différente">Agence Différente</a></small></p></div>
      </div>
		</div>
  </div>  

    



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/main.js"></script>
    <script>

    </script>
    <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-509a5e102a8c5d3a"></script>

    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo $config->ga; ?>']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		</body>
</html>

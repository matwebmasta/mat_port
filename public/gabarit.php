<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="multimédia,programmation,php,javascript,jquery,wordpress,ajax,js,java,flash,photoshop,ps,adobe,final cut pro,internet,sql,base de données,bdd,xhtml,html,css,portfolio,emploi,contrat,maya,after effects,quebec,montreal,artiste,graphisme,design,professionnel" />
	<meta name="description" content="Marc-Antoine est un intégrateur mulimédia de talent qui excelle dans la programmation en php/javascript/sql. Voici son portfolio." />

	<title>Portfolio Marc-Antoine Tremblay Intégrateur mulimédia,php,javascript</title>

	<!-- Code PHP de l'entête du gabarit, inclut les feuilles de style et le Javascript. ( permet aussi d'inclure une notion de privilège ainsi que les constantes de l'usager "langue & choix du lien" )  --> 

	<?php 
		/*echo $gabarit->header(); */
	?>

	<link rel="stylesheet" type="text/css" href="stylesheets/portfolio.css" />
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.js"></script>
	<!--<link type='text/javascript' href=''>-->
	
	
	
	<script type="text/javascript" src="javascripts/jquery.lightbox-0.5.js"></script>
	<link rel="stylesheet" type="text/css" href="stylesheets/jquery.lightbox-0.5.css" media="screen" />
	
	<script type="text/javascript">
	$(function() {
	$('#realisation a').lightBox({fixedNavigation:true});
	});
	</script>
</head>

<body>

<div id='general_960'>
<div id='fond_menu'>

</div>
<div id='entete'></div>

<div id='menu_principal'>
<div id='accueil'>
<a class='lien_principal'  href=''><img class='lien_principal' src='images/bouton_accueil.png' onmouseover="this.src='images/bouton_accueil_actif.png';" onmouseout="this.src='images/bouton_accueil.png';" alt='Accueil'/> </a>
</div>
<div id='cv'>
<a class='lien_principal'  href=''> <img class='lien_principal' src='images/bouton_cv.png' onmouseover="this.src='images/bouton_cv_actif.png';" onmouseout="this.src='images/bouton_cv.png';" alt='CV'/></a>
</div>
<div id='contact'>
<a class='lien_principal' href=''> <img class='lien_principal' src='images/bouton_contact.png' onmouseover="this.src='images/bouton_contact_actif.png';" onmouseout="this.src='images/bouton_contact.png';" alt='contact'/></a>
</div>
</div>

<div id='zone_presentation'>
Bonjour, je suis Marc-Antoine, un intégrateur multimédia 
passionné et minutieux qui peut créer des sites de qualités 
offrant une expérience web unique. Voici mon portfolio.

</div>
<div id='fond_sous_titre'>
<div id='zone_titre'></div>
</div>

<div id='contenu_principal'>

<div id='realisation'>
<ul class='rea_l1'>
	<li class='rea'>	
						<a href='realisation/rea1.jpg' title='Projet Addendum, refonte du site'><img class='img_rea' src='realisation/rea1_thumb.jpg' alt='realisation_01'/></a>
						<a style='display:none;' href='realisation/rea1_1.jpg' title='Section des fiches artistiques'></a>
						<a style='display:none;' href='realisation/rea1_2.jpg' title='Création du logo'></a>
	</li>
	<li class='rea'>
						<a href='realisation/rea2.jpg' title='Refonte fictive du site de la RTL'><img class='img_rea' src='realisation/rea2_thumb.jpg' alt='realisation_02'/></a></li>
	<li class='rea fin'>	
	<a href='realisation/rea3.jpg' title="Refonte fictive du site de la technique d'intégration multimédia"><img class='img_rea' src='realisation/rea3_thumb.jpg' alt='realisation_03'/></a>
	<a style='display:none;' href='realisation/rea3_1.jpg' title='Section des professeurs'></a>
	<a style='display:none;' href='realisation/rea3_2.jpg' title='Création du logo'></a>
	
	</li>

</ul>
<ul class='rea_l1'>
	<li class='rea'>		
	<a href='realisation/rea4.jpg' title="Modélisation 3D d'un jeu d'échec"><img class='img_rea' src='realisation/rea4_thumb.jpg' alt='realisation_04'/></a>
	
	</li>
	<li class='rea'>		
	<a href='realisation/rea5.jpg' title="Graphisme et illustration pour le  fanzine Asile"><img class='img_rea' src='realisation/rea5_thumb.jpg' alt='realisation_05'/></a>
	<a style='display:none;' href='realisation/rea5_1.jpg' title='Illustration de la couverture'></a>
	<a style='display:none;' href='realisation/rea5_2.jpg' title="Illustration d'une nouvelle (deuxième parrution)"></a>
	<a style='display:none;' href='realisation/rea5_3.jpg' title="Illustration d'une nouvelle (troisième parrution)"></a>
	
	</li>
	<li class='rea fin'></li>
</ul>
<ul class='rea_l1'>
	<li class='rea'></li>
	<li class='rea'></li>
	<li class='rea fin'></li>
</ul>
</div>

</div>






</div>

<div id='menu_pied'>
<div id='texte_pied'>(c) Marc-Antoine Tremblay</div>
</div>



</body>
</html>

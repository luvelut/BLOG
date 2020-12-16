<DOCTYPE HTML>
<html lang="fr">
<head>
	<link type="text/css" rel="stylesheet" href="../css/styleMonSite.css">
	<link rel="stylesheet" media="screen and (max-width: 800px)" href="smallscreen.css" type="text/css" />
	<meta charset="UTF-8">
	<title>Lucile</title>
</head>

<body>
	<header> <h1> Lucile </h1> 

		<div id= "image">
			<img src= "../photos/photo1.jpg" title="Photo" alt="Photo qui me représente" />
		</div>
<br>
<br>
		<nav id='menu'>
			<a href= "../monSite.html" title="Lucile"> <strong>Accueil</strong>  </a> 
			<a href= "../articleMaVille.html" title="Ma ville"> <strong>Ma ville </strong> </a> 
			<a href= "../articleMesEtudes.html" title="Mes études"> <strong>Etudes</strong>  </a> 
			<a href= "../articleMonEntourage.html" title="Famille & Amis"> <strong>Entourage</strong> </a>
			<a href= "../pageLien.html" title="Centre d'interêt"> <strong>Centres d'interêts</strong> </a>
			<a href= "../contact.html" title="Contact"> <strong>Contact</strong> </a>
			<span>
				<strong>Médias</strong>
					<nav id='sousmenu'>
						<a href= "../pagePhoto.html" title="Photos"> <strong>Photos</strong> </a>
						<a href= "../pageVideo.html" title="Vidéo"> <strong>Video</strong> </a>
				
					</nav>
			</span>
		</nav>
	</header>
	
	
		

<?php 

if(empty($_POST['nom'])) {
	echo 'Le nom doit être renseigné !';
	echo '<br>';
}
else {
	echo 'Bonjour  ' . $_POST['nom'];
	echo '<br>';
}


if(empty($_POST['email'])) {
	echo "L'email doit être renseigné !";
	echo '<br>';
}
else {
	echo '<br>';
}

if(empty($_POST['message'])) {
	echo 'Le message doit être renseigné !';
	echo '<br>';
}
else {
	echo 'Votre message :' . " " . $_POST['message'];
	echo '<br>';
}

if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
	echo 'Votre email :' . " " . $_POST['email'];
}
else {
	echo 'ATTENTION : email non valide';
}

?>

	<div id= "logos">
				<div id="twi">
					<a href="https://twitter.com/" title="PageTwitter"><img src= "../photos/twitter.png" title="Twi" alt="Logo twitter" /> </a>
				</div>
				<br>
				<a href= "https://www.instagram.com/lucile.vlt/" title="Ma page instagram"> <img src= "../photos/instagram.png" title="Insta" alt="Logo instagram" /> </a>
			</div>
		</div>

	<br>
	<br>
	<br>
	<br>
	<br>

	<footer> Conceptrice du site : VELUT Lucile, groupe 3</footer>


</body>
</html>

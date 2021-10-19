<?php
	session_start();
	$bdd=new PDO('mysql:host=localhost;dbname=dps','root','akatsuki',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$reponse=$bdd->query("SELECT * FROM list WHERE N=". $_GET['id']);
	$donnees=$reponse->fetch();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles-profile.css">

	<title>Contact Profile</title>
</head>
<body>

	<div class="container">
		<header class="hero">
			<a href="index.php">
				<img src="icone/arrow-left-circle.svg" alt="arrow">
			</a>
			<a href="delete.php" class="delete-button">
				<img src="icone/trash-2.svg" alt="trash" >
			</a> 
			<div class="hero-info">
				<h1 class="name"><?php echo $donnees['fullname']; ?></h1>
				<img src="icone/user.svg" alt="user" style = "width: 80px; color: white ">
				<p  class="relationship"><?php echo $donnees['relationship']; ?></p>
			</div>
		</header>
		<section class="contact-info">
			<div class="info-line">
				<img src="icone/phone-call.svg" alt="phone" >
				<p class="phone-number"><?php echo $donnees['phone']; ?></p>
			</div>
		
			<div class="info-line">
				<img src="icone/mail.svg" alt="mail">
				<p class="email"><?php echo $donnees['mail']; ?></p>
			</div>
			<div class="info-line">
				<img src="icone/map-pin.svg" alt="map">
				<p class="address"><?php echo $donnees['addresse']; ?></p>
			</div>
		</section>
		<a href="edit.php?id=<?php echo $donnees['N'];?>">
			<section class="edit-contact">
				<div class="edit-button">
					<img src="icone/edit.svg" alt="edit">
				</div>
			</section>
		</a>
				
	</div>
</body>
</html>

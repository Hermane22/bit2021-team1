<?php
if(isset($_GET['id'])){
	session_start();
	$bdd=new PDO('mysql:host=localhost;dbname=dps','root','akatsuki',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$reponse=$bdd->query("SELECT * FROM list WHERE N=". $_GET['id']);
	$donnees=$reponse->fetch();
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style-ed.css">
	
	<title>Edit Contact</title>
</head>
<body>

	<div class="container">
		<header class="hero">
			
			<a href="index.php">
			<img src="icone/arrow-left-circle.svg" alt="arrow">
			</a>
			<div class="hero-info">
				<img src="icone/user.svg" alt="phone">
                <h1 class="name"><?php if(isset($_GET['id'])){echo $donnees['fullname'];}else{ echo "<h3>Add New Contact</h3>";} ?></h1>

			</div>
		</header>

		<form action="<?= isset($_GET['id'])?'update.php?id='.$_GET['id']:'request.php' ?>" method="POST">
	<section class="contact-info">

	<div class="info-line">
				<img src="icone/user.svg" alt="phone">
				<input required type="text" class="type" name="fullname" placeholder="Full Name" value="<?php if(isset($_GET['id'])){ echo $donnees['fullname']; }?>">
				
					
		</div>

			<div class="info-line">
				<img src="icone/heart.svg" alt="phone">
				<input required type="text" class="type" name="relationship" placeholder="Relationship" value="<?php if(isset($_GET['id'])){echo $donnees['relationship'];} ?>">
			</div>

			<div class="info-line">
				<img src="icone/phone-call.svg" alt="phone">
				<input required type="text" class="type" name="phone" placeholder="Phone Number" value="<?php if(isset($_GET['id'])){echo $donnees['phone'];} ?>"> 
			</div>

			<div  class="info-line">
				<img src="icone/mail.svg" alt="phone">
				<input required type="text" class="type" name="mail" placeholder="Email" value="<?php if(isset($_GET['id'])){ echo $donnees['mail']; }?>">
			</div>

			

			<div class="info-line">
				<img src="icone/map-pin.svg" alt="phone">
				<input required type="text" class="type" name="addresse" placeholder="Address" value="<?php if(isset($_GET['id'])) {echo $donnees['addresse'];} ?>">
			</div>
			

	</section>

		<section class="button-container">
			<div class="update-contact">
				<input type="submit" value="Save" name="update">
			</div>
		</section>

		</form>
	</div>


</body>
</html>

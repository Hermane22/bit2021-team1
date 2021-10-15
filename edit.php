<?php
if(isset($_GET['id'])){
	session_start();
	$bdd=new PDO('mysql:host=localhost;dbname=dps','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<title>Edit Contact</title>
</head>
<body>

	<div class="container">
		<header class="hero">
			
			<a href="index.php">
			<i class="fas fa-arrow-left"></i>
			</a>
			<div class="hero-info">
                <h1 class="name"><?php if(isset($_GET['id'])){echo $donnees['fullname'];}else{ echo "<h3>Add New Contact</h3>";} ?></h1>
				<p class="relationship-hero"><?php if(isset($_GET['id'])){echo $donnees['relationship'];} ?></p>
               <img src="IMG/user1.png" alt="utili">
			</div>
		</header>

		<form action="<?= isset($_GET['id'])?'update.php?id='.$_GET['id']:'request.php' ?>" method="POST">
		<section class="contact-info">

		<div class="info-line">
			   <i class="fas fa-user"></i>
				<input required type="text" class="type" name="fullname" placeholder="Full Name" value="<?php if(isset($_GET['id'])){ echo $donnees['fullname']; }?>">
					
		</div>

			<div class="info-line">
		      	<i class="fas fa-heart"></i>
				<input required type="text" class="type" name="relationship" placeholder="Relationship" value="<?php if(isset($_GET['id'])){echo $donnees['relationship'];} ?>">
			</div>

			<div class="info-line">
			    <i class="fas fa-phone"></i> 
				<input required type="text" class="type" name="phone" placeholder="Phone Number" value="<?php if(isset($_GET['id'])){echo $donnees['phone'];} ?>"> 
			</div>

			<div  class="info-line">
		     	<i class="far fa-envelope"></i>
				<input required type="text" class="type" name="mail" placeholder="Email" value="<?php if(isset($_GET['id'])){ echo $donnees['mail']; }?>">
			</div>

			

			<div class="info-line">
			    <i class="fas fa-address-card"></i>
					<input required type="text" class="type" name="addresse" placeholder="Address" value="<?php if(isset($_GET['id'])) {echo $donnees['addresse'];} ?>">
			</div>
			

		</section>

		<section class="button-container">
			<div class="update-contact">
			    <i class="far fa-save"></i>
				<input type="submit" value="Save" name="update">
			</div>
		</section>

		</form>
	</div>


</body>
</html>

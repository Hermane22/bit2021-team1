<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rzel="stylesheet" type="text/css" href="style.css">
    <title>contact App</title>
</head>
<body>
<?php
session_start();
$bdd=new PDO('mysql:host=localhost;dbname=dps','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

	<title>Contact Form</title>
</head>
<body>

	<div class="container">
		<!--  SEARCH FORM -->
		<header class="header">
			
			<form class="search-bar">
				<input type="search-name" class="contact-search" name="search-area" placeholder="Search contacts">
			</form>

			<!--  ADD-CONTACT BUTTON/ICON -->
			<a href="edit.php">+</i></a>
				<input type="search-name" class="contact-search" name="search-area" placeholder="Search">
			</form>

			<!--  ADD-CONTACT BUTTON/ICON -->
			<a href="edit.php"><i>+</i></a>
		</header>

		<!--  CONTACT LIST -->
		<section class="contacts-library">
			<ul class="contacts-list">

				<a href="contact-profile.php">
					<div class="contact-section">
						<li class="list__item">
							<p class="contact-name">Hermane BAGORO</p>
							<p class="relationship">Friend</p>
						</li>

					</div>
				</a>

			</ul>
		</section>
	</div>

</body>
<<<<<<< HEAD
</html>
=======
</html>
 
>>>>>>> 6f81d4454d727d65c7c3fee4c47852f2f69f1d38
